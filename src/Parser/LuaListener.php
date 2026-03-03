<?php

/*
 * Generated from Lua.g4 by ANTLR 4.13.2
 */

namespace Raudius\Luar\Parser;

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see LuaParser}.
 */
interface LuaListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see LuaParser::chunk()}.
	 * @param $context The parse tree.
	 */
	public function enterChunk(Context\ChunkContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::chunk()}.
	 * @param $context The parse tree.
	 */
	public function exitChunk(Context\ChunkContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::block()}.
	 * @param $context The parse tree.
	 */
	public function enterBlock(Context\BlockContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::block()}.
	 * @param $context The parse tree.
	 */
	public function exitBlock(Context\BlockContext $context): void;
	/**
	 * Enter a parse tree produced by the `semicolon`
	 * labeled alternative in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterSemicolon(Context\SemicolonContext $context): void;
	/**
	 * Exit a parse tree produced by the `semicolon` labeled alternative
	 * in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitSemicolon(Context\SemicolonContext $context): void;
	/**
	 * Enter a parse tree produced by the `statAssign`
	 * labeled alternative in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterStatAssign(Context\StatAssignContext $context): void;
	/**
	 * Exit a parse tree produced by the `statAssign` labeled alternative
	 * in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitStatAssign(Context\StatAssignContext $context): void;
	/**
	 * Enter a parse tree produced by the `statFunctionCall`
	 * labeled alternative in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterStatFunctionCall(Context\StatFunctionCallContext $context): void;
	/**
	 * Exit a parse tree produced by the `statFunctionCall` labeled alternative
	 * in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitStatFunctionCall(Context\StatFunctionCallContext $context): void;
	/**
	 * Enter a parse tree produced by the `statBreak`
	 * labeled alternative in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterStatBreak(Context\StatBreakContext $context): void;
	/**
	 * Exit a parse tree produced by the `statBreak` labeled alternative
	 * in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitStatBreak(Context\StatBreakContext $context): void;
	/**
	 * Enter a parse tree produced by the `statDo`
	 * labeled alternative in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterStatDo(Context\StatDoContext $context): void;
	/**
	 * Exit a parse tree produced by the `statDo` labeled alternative
	 * in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitStatDo(Context\StatDoContext $context): void;
	/**
	 * Enter a parse tree produced by the `statWhile`
	 * labeled alternative in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterStatWhile(Context\StatWhileContext $context): void;
	/**
	 * Exit a parse tree produced by the `statWhile` labeled alternative
	 * in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitStatWhile(Context\StatWhileContext $context): void;
	/**
	 * Enter a parse tree produced by the `statRepeat`
	 * labeled alternative in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterStatRepeat(Context\StatRepeatContext $context): void;
	/**
	 * Exit a parse tree produced by the `statRepeat` labeled alternative
	 * in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitStatRepeat(Context\StatRepeatContext $context): void;
	/**
	 * Enter a parse tree produced by the `statIf`
	 * labeled alternative in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterStatIf(Context\StatIfContext $context): void;
	/**
	 * Exit a parse tree produced by the `statIf` labeled alternative
	 * in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitStatIf(Context\StatIfContext $context): void;
	/**
	 * Enter a parse tree produced by the `statFor`
	 * labeled alternative in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterStatFor(Context\StatForContext $context): void;
	/**
	 * Exit a parse tree produced by the `statFor` labeled alternative
	 * in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitStatFor(Context\StatForContext $context): void;
	/**
	 * Enter a parse tree produced by the `statForEach`
	 * labeled alternative in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterStatForEach(Context\StatForEachContext $context): void;
	/**
	 * Exit a parse tree produced by the `statForEach` labeled alternative
	 * in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitStatForEach(Context\StatForEachContext $context): void;
	/**
	 * Enter a parse tree produced by the `statFunctionDeclare`
	 * labeled alternative in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterStatFunctionDeclare(Context\StatFunctionDeclareContext $context): void;
	/**
	 * Exit a parse tree produced by the `statFunctionDeclare` labeled alternative
	 * in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitStatFunctionDeclare(Context\StatFunctionDeclareContext $context): void;
	/**
	 * Enter a parse tree produced by the `statLocalFunction`
	 * labeled alternative in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterStatLocalFunction(Context\StatLocalFunctionContext $context): void;
	/**
	 * Exit a parse tree produced by the `statLocalFunction` labeled alternative
	 * in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitStatLocalFunction(Context\StatLocalFunctionContext $context): void;
	/**
	 * Enter a parse tree produced by the `statLocalVariable`
	 * labeled alternative in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterStatLocalVariable(Context\StatLocalVariableContext $context): void;
	/**
	 * Exit a parse tree produced by the `statLocalVariable` labeled alternative
	 * in {@see LuaParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitStatLocalVariable(Context\StatLocalVariableContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::laststat()}.
	 * @param $context The parse tree.
	 */
	public function enterLaststat(Context\LaststatContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::laststat()}.
	 * @param $context The parse tree.
	 */
	public function exitLaststat(Context\LaststatContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::funcname()}.
	 * @param $context The parse tree.
	 */
	public function enterFuncname(Context\FuncnameContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::funcname()}.
	 * @param $context The parse tree.
	 */
	public function exitFuncname(Context\FuncnameContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::funcname_method()}.
	 * @param $context The parse tree.
	 */
	public function enterFuncname_method(Context\Funcname_methodContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::funcname_method()}.
	 * @param $context The parse tree.
	 */
	public function exitFuncname_method(Context\Funcname_methodContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::varlist()}.
	 * @param $context The parse tree.
	 */
	public function enterVarlist(Context\VarlistContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::varlist()}.
	 * @param $context The parse tree.
	 */
	public function exitVarlist(Context\VarlistContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::namelist()}.
	 * @param $context The parse tree.
	 */
	public function enterNamelist(Context\NamelistContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::namelist()}.
	 * @param $context The parse tree.
	 */
	public function exitNamelist(Context\NamelistContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::explist()}.
	 * @param $context The parse tree.
	 */
	public function enterExplist(Context\ExplistContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::explist()}.
	 * @param $context The parse tree.
	 */
	public function exitExplist(Context\ExplistContext $context): void;
	/**
	 * Enter a parse tree produced by the `expNumber`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpNumber(Context\ExpNumberContext $context): void;
	/**
	 * Exit a parse tree produced by the `expNumber` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpNumber(Context\ExpNumberContext $context): void;
	/**
	 * Enter a parse tree produced by the `expBool`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpBool(Context\ExpBoolContext $context): void;
	/**
	 * Exit a parse tree produced by the `expBool` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpBool(Context\ExpBoolContext $context): void;
	/**
	 * Enter a parse tree produced by the `expComparison`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpComparison(Context\ExpComparisonContext $context): void;
	/**
	 * Exit a parse tree produced by the `expComparison` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpComparison(Context\ExpComparisonContext $context): void;
	/**
	 * Enter a parse tree produced by the `expBitwise`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpBitwise(Context\ExpBitwiseContext $context): void;
	/**
	 * Exit a parse tree produced by the `expBitwise` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpBitwise(Context\ExpBitwiseContext $context): void;
	/**
	 * Enter a parse tree produced by the `expOr`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpOr(Context\ExpOrContext $context): void;
	/**
	 * Exit a parse tree produced by the `expOr` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpOr(Context\ExpOrContext $context): void;
	/**
	 * Enter a parse tree produced by the `expMulDivMod`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpMulDivMod(Context\ExpMulDivModContext $context): void;
	/**
	 * Exit a parse tree produced by the `expMulDivMod` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpMulDivMod(Context\ExpMulDivModContext $context): void;
	/**
	 * Enter a parse tree produced by the `expNull`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpNull(Context\ExpNullContext $context): void;
	/**
	 * Exit a parse tree produced by the `expNull` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpNull(Context\ExpNullContext $context): void;
	/**
	 * Enter a parse tree produced by the `expString`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpString(Context\ExpStringContext $context): void;
	/**
	 * Exit a parse tree produced by the `expString` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpString(Context\ExpStringContext $context): void;
	/**
	 * Enter a parse tree produced by the `expPrefix`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpPrefix(Context\ExpPrefixContext $context): void;
	/**
	 * Exit a parse tree produced by the `expPrefix` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpPrefix(Context\ExpPrefixContext $context): void;
	/**
	 * Enter a parse tree produced by the `expUnary`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpUnary(Context\ExpUnaryContext $context): void;
	/**
	 * Exit a parse tree produced by the `expUnary` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpUnary(Context\ExpUnaryContext $context): void;
	/**
	 * Enter a parse tree produced by the `expAnd`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpAnd(Context\ExpAndContext $context): void;
	/**
	 * Exit a parse tree produced by the `expAnd` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpAnd(Context\ExpAndContext $context): void;
	/**
	 * Enter a parse tree produced by the `expElipsis`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpElipsis(Context\ExpElipsisContext $context): void;
	/**
	 * Exit a parse tree produced by the `expElipsis` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpElipsis(Context\ExpElipsisContext $context): void;
	/**
	 * Enter a parse tree produced by the `expFunction`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpFunction(Context\ExpFunctionContext $context): void;
	/**
	 * Exit a parse tree produced by the `expFunction` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpFunction(Context\ExpFunctionContext $context): void;
	/**
	 * Enter a parse tree produced by the `expPower`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpPower(Context\ExpPowerContext $context): void;
	/**
	 * Exit a parse tree produced by the `expPower` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpPower(Context\ExpPowerContext $context): void;
	/**
	 * Enter a parse tree produced by the `expConcat`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpConcat(Context\ExpConcatContext $context): void;
	/**
	 * Exit a parse tree produced by the `expConcat` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpConcat(Context\ExpConcatContext $context): void;
	/**
	 * Enter a parse tree produced by the `expAddSub`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpAddSub(Context\ExpAddSubContext $context): void;
	/**
	 * Exit a parse tree produced by the `expAddSub` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpAddSub(Context\ExpAddSubContext $context): void;
	/**
	 * Enter a parse tree produced by the `expTable`
	 * labeled alternative in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function enterExpTable(Context\ExpTableContext $context): void;
	/**
	 * Exit a parse tree produced by the `expTable` labeled alternative
	 * in {@see LuaParser::exp()}.
	 * @param $context The parse tree.
	 */
	public function exitExpTable(Context\ExpTableContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::prefixexp()}.
	 * @param $context The parse tree.
	 */
	public function enterPrefixexp(Context\PrefixexpContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::prefixexp()}.
	 * @param $context The parse tree.
	 */
	public function exitPrefixexp(Context\PrefixexpContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::functioncall()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctioncall(Context\FunctioncallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::functioncall()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctioncall(Context\FunctioncallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::varOrExp()}.
	 * @param $context The parse tree.
	 */
	public function enterVarOrExp(Context\VarOrExpContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::varOrExp()}.
	 * @param $context The parse tree.
	 */
	public function exitVarOrExp(Context\VarOrExpContext $context): void;
	/**
	 * Enter a parse tree produced by the `nameVariable`
	 * labeled alternative in {@see LuaParser::variable()}.
	 * @param $context The parse tree.
	 */
	public function enterNameVariable(Context\NameVariableContext $context): void;
	/**
	 * Exit a parse tree produced by the `nameVariable` labeled alternative
	 * in {@see LuaParser::variable()}.
	 * @param $context The parse tree.
	 */
	public function exitNameVariable(Context\NameVariableContext $context): void;
	/**
	 * Enter a parse tree produced by the `expVariable`
	 * labeled alternative in {@see LuaParser::variable()}.
	 * @param $context The parse tree.
	 */
	public function enterExpVariable(Context\ExpVariableContext $context): void;
	/**
	 * Exit a parse tree produced by the `expVariable` labeled alternative
	 * in {@see LuaParser::variable()}.
	 * @param $context The parse tree.
	 */
	public function exitExpVariable(Context\ExpVariableContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::varSuffix()}.
	 * @param $context The parse tree.
	 */
	public function enterVarSuffix(Context\VarSuffixContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::varSuffix()}.
	 * @param $context The parse tree.
	 */
	public function exitVarSuffix(Context\VarSuffixContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::nameAndArgs()}.
	 * @param $context The parse tree.
	 */
	public function enterNameAndArgs(Context\NameAndArgsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::nameAndArgs()}.
	 * @param $context The parse tree.
	 */
	public function exitNameAndArgs(Context\NameAndArgsContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::args()}.
	 * @param $context The parse tree.
	 */
	public function enterArgs(Context\ArgsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::args()}.
	 * @param $context The parse tree.
	 */
	public function exitArgs(Context\ArgsContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::functiondef()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctiondef(Context\FunctiondefContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::functiondef()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctiondef(Context\FunctiondefContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::funcbody()}.
	 * @param $context The parse tree.
	 */
	public function enterFuncbody(Context\FuncbodyContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::funcbody()}.
	 * @param $context The parse tree.
	 */
	public function exitFuncbody(Context\FuncbodyContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::parlist()}.
	 * @param $context The parse tree.
	 */
	public function enterParlist(Context\ParlistContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::parlist()}.
	 * @param $context The parse tree.
	 */
	public function exitParlist(Context\ParlistContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::elipsis()}.
	 * @param $context The parse tree.
	 */
	public function enterElipsis(Context\ElipsisContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::elipsis()}.
	 * @param $context The parse tree.
	 */
	public function exitElipsis(Context\ElipsisContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::tableconstructor()}.
	 * @param $context The parse tree.
	 */
	public function enterTableconstructor(Context\TableconstructorContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::tableconstructor()}.
	 * @param $context The parse tree.
	 */
	public function exitTableconstructor(Context\TableconstructorContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::fieldlist()}.
	 * @param $context The parse tree.
	 */
	public function enterFieldlist(Context\FieldlistContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::fieldlist()}.
	 * @param $context The parse tree.
	 */
	public function exitFieldlist(Context\FieldlistContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::field()}.
	 * @param $context The parse tree.
	 */
	public function enterField(Context\FieldContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::field()}.
	 * @param $context The parse tree.
	 */
	public function exitField(Context\FieldContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::fieldsep()}.
	 * @param $context The parse tree.
	 */
	public function enterFieldsep(Context\FieldsepContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::fieldsep()}.
	 * @param $context The parse tree.
	 */
	public function exitFieldsep(Context\FieldsepContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::operatorOr()}.
	 * @param $context The parse tree.
	 */
	public function enterOperatorOr(Context\OperatorOrContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::operatorOr()}.
	 * @param $context The parse tree.
	 */
	public function exitOperatorOr(Context\OperatorOrContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::operatorAnd()}.
	 * @param $context The parse tree.
	 */
	public function enterOperatorAnd(Context\OperatorAndContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::operatorAnd()}.
	 * @param $context The parse tree.
	 */
	public function exitOperatorAnd(Context\OperatorAndContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::operatorComparison()}.
	 * @param $context The parse tree.
	 */
	public function enterOperatorComparison(Context\OperatorComparisonContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::operatorComparison()}.
	 * @param $context The parse tree.
	 */
	public function exitOperatorComparison(Context\OperatorComparisonContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::operatorStrcat()}.
	 * @param $context The parse tree.
	 */
	public function enterOperatorStrcat(Context\OperatorStrcatContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::operatorStrcat()}.
	 * @param $context The parse tree.
	 */
	public function exitOperatorStrcat(Context\OperatorStrcatContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::operatorAddSub()}.
	 * @param $context The parse tree.
	 */
	public function enterOperatorAddSub(Context\OperatorAddSubContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::operatorAddSub()}.
	 * @param $context The parse tree.
	 */
	public function exitOperatorAddSub(Context\OperatorAddSubContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::operatorMulDivMod()}.
	 * @param $context The parse tree.
	 */
	public function enterOperatorMulDivMod(Context\OperatorMulDivModContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::operatorMulDivMod()}.
	 * @param $context The parse tree.
	 */
	public function exitOperatorMulDivMod(Context\OperatorMulDivModContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::operatorBitwise()}.
	 * @param $context The parse tree.
	 */
	public function enterOperatorBitwise(Context\OperatorBitwiseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::operatorBitwise()}.
	 * @param $context The parse tree.
	 */
	public function exitOperatorBitwise(Context\OperatorBitwiseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::operatorUnary()}.
	 * @param $context The parse tree.
	 */
	public function enterOperatorUnary(Context\OperatorUnaryContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::operatorUnary()}.
	 * @param $context The parse tree.
	 */
	public function exitOperatorUnary(Context\OperatorUnaryContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::operatorPower()}.
	 * @param $context The parse tree.
	 */
	public function enterOperatorPower(Context\OperatorPowerContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::operatorPower()}.
	 * @param $context The parse tree.
	 */
	public function exitOperatorPower(Context\OperatorPowerContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::number()}.
	 * @param $context The parse tree.
	 */
	public function enterNumber(Context\NumberContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::number()}.
	 * @param $context The parse tree.
	 */
	public function exitNumber(Context\NumberContext $context): void;
	/**
	 * Enter a parse tree produced by {@see LuaParser::string()}.
	 * @param $context The parse tree.
	 */
	public function enterString(Context\StringContext $context): void;
	/**
	 * Exit a parse tree produced by {@see LuaParser::string()}.
	 * @param $context The parse tree.
	 */
	public function exitString(Context\StringContext $context): void;
}