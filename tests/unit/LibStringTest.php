<?php
namespace Raudius\Luar\UnitTests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Raudius\Luar\Luar;

class LibStringTest extends TestCase {
	#[DataProvider('substringCases')]
	public function testSub(string $expression, string $expected): void {
		$luar = new Luar();
		$this->assertSame(
			$expected,
			$luar->eval('return ' . $expression),
			'Substrings must preserve their exact contents and Lua index semantics: ' . $expression
		);
	}

	public static function substringCases(): array {
		return [
			'single zero' => ['string.sub("0", 1, 1)', '0'],
			'zero inside a media ID' => ['string.sub("301", 2, 2)', '0'],
			'zero with negative indexes' => ['string.sub("301", -2, -2)', '0'],
			'zero with default end' => ['string.sub("10", -1)', '0'],
			'zero through string method' => ['("301"):sub(2, 2)', '0'],
			'positive inclusive range' => ['string.sub("123456789", 2, 4)', '234'],
			'default end' => ['string.sub("123456789", 7)', '789'],
			'negative start' => ['string.sub("123456789", -4)', '6789'],
			'negative range' => ['string.sub("123456789", -6, -4)', '456'],
			'clamped range' => ['string.sub("123456789", -10, 10)', '123456789'],
			'zero start' => ['string.sub("123456789", 0, 3)', '123'],
			'reversed range' => ['string.sub("123456789", 7, 6)', ''],
			'zero end' => ['string.sub("123456789", 0, 0)', ''],
			'start past end' => ['string.sub("123456789", 10)', ''],
			'end before start of string' => ['string.sub("123456789", -10, -20)', ''],
			'empty string' => ['string.sub("", 1)', ''],
		];
	}

	#[DataProvider('reconstructionCases')]
	public function testSubReconstructsTextCharacterByCharacter(string $subject): void {
		$program = <<<'LUA'
local reconstructed = ""
for index = 1, #subject do
	reconstructed = reconstructed .. string.sub(subject, index, index)
end
return reconstructed
LUA;

		$luar = new Luar();
		$luar->assign('subject', $subject);
		$this->assertSame(
			$subject,
			$luar->eval($program),
			'Reconstructing text one character at a time must not drop zero digits.'
		);
	}

	public static function reconstructionCases(): array {
		return [
			'single zero' => ['0'],
			'media ID' => ['301'],
			'year' => ['2007'],
			'UUID' => ['550e8400-e29b-41d4-a716-446655440000'],
			'nil UUID' => ['00000000-0000-0000-0000-000000000000'],
			'mixed text' => ['{"mediaIds":[301,1002,9000],"years":[2007,2020],"uuid":"550e8400-e29b-41d4-a716-446655440000"}'],
			'empty text' => [''],
		];
	}
}
