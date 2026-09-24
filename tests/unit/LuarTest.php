<?php
namespace Raudius\Luar\UnitTests;

use PHPUnit\Framework\TestCase;
use Raudius\Luar\Interpreter\LuarObject\Invokable;
use Raudius\Luar\Interpreter\LuarObject\Literal;
use Raudius\Luar\Interpreter\LuarObject\ObjectList;
use Raudius\Luar\Luar;


class LuarTest extends TestCase {
	public function testAssignFunction(): void {
		$luar = new Luar();
		$luar->assign('sum', function ($a, $b) {
			return $a+$b;
		});
		$luar->assign('sum2', new Invokable(function (ObjectList $ol) {
			return $ol->getObject(0)->getValue() + $ol->getObject(1)->getValue();
		}));

		$this->assertEquals(3, $luar->call('sum', [1,2]));
		$this->assertEquals(3, $luar->call('sum2', [1,2]));
	}

	public function testCall(): void {
		$program = <<<LUA
function sum(a,b)
	return a+b
end
LUA;

		$luar = new Luar();
		$luar->eval($program);
		$this->assertEquals(
			3,
			$luar->call('sum', [1,2])
		);
	}

	public function testGetGlobals(): void {
		$program = <<<LUA
function foo(a,b)
	return 'bar'
end
a,b = 'a', 'b'
local c = 'c'
LUA;

		$luar = new Luar();
		$global_keys = array_keys($luar->getGlobals());
		$global_keys = [...$global_keys, 'foo', 'a', 'b', 'manual'];

		$luar->assign('manual', false);

		$luar->eval($program);
		$this->assertEqualsCanonicalizing(
			$global_keys,
			array_keys($luar->getGlobals())
		);
	}

	public function testMakeLuarObject(): void {
		$values = [
			'boolean' => [true, false, new Literal(false)],
			'number' => [0, 1, 1.2],
			'function' => [function () {}],
			'string' => [new Literal('a'), 'abc', ''],
			'table' => [['a'=>1], []],
			'nil' => [null, new Literal(null)]
		];

		foreach ($values as $type => $vs) {
			foreach ($vs as $v) {
				$luarObj = Luar::packLuarObject($v);
				$this->assertEquals($type, $luarObj->getType());
			}
		}
	}

	/**
	 * A table field whose value is a function-call result is stored as the
	 * call's ObjectList. PHP callables must still receive plain nested arrays,
	 * never interpreter wrapper objects.
	 */
	public function testPhpCallableReceivesPlainArraysForFieldsAssignedFromFunctionCalls(): void {
		$received = null;
		$luar = new Luar();
		$luar->assign('capture', function ($args) use (&$received) {
			$received = $args;
			return 'ok';
		});
		$luar->eval(<<<'LUA'
local function build()
	local t = {}
	t['layout'] = 'center'
	t['count'] = 42
	t['items'] = {}
	t['items'][#t['items'] + 1] = { title = 'A' }
	return t
end
capture({ direct = { layout = 'center' }, viaCall = build(), viaIife = (function() return build() end)() })
LUA);

		$expected = ['layout' => 'center', 'count' => 42, 'items' => [1 => ['title' => 'A']]];
		$this->assertSame(['layout' => 'center'], $received['direct']);
		$this->assertSame($expected, $received['viaCall'], 'A field holding a function-call result must unpack to nested PHP arrays.');
		$this->assertSame($expected, $received['viaIife'], 'An immediately-invoked closure result must unpack the same way.');
	}

	/**
	 * Lua long-bracket strings are raw: no escape sequences are interpreted,
	 * and only a newline directly after the opening bracket is skipped.
	 */
	public function testLongBracketStringsKeepBackslashesRaw(): void {
		$received = [];
		$luar = new Luar();
		$luar->assign('show', function ($s) use (&$received) { $received[] = $s; });
		$luar->eval(<<<'LUA'
show([[a\nb — c\\d \"q\" \65]])
show([==[x\ty]==])
show([[
first line after bracket]])
show("a\nb\65")
LUA);

		$this->assertSame('a\nb — c\\\\d \"q\" \65', $received[0], 'Backslashes inside [[ ]] must survive untouched.');
		$this->assertSame('x\ty', $received[1], 'Level-n long brackets are raw too.');
		$this->assertSame('first line after bracket', $received[2], 'Only the newline right after the opening bracket is dropped.');
		$this->assertSame("a\nbA", $received[3], 'Quoted strings still interpret escapes.');
	}
}
