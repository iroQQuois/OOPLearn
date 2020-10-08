<?php


class InterpreterContext
{
    private $expressionstore = [];


    public function replace(Exception $exp, $value)
    {
        $this->expressionstore[$exp->getKey()] = $value;
    }

    public function lookup(Expression $exp)
    {
        return $this->expressionstore[$exp->getKey()];
    }
}

$context = new InterpreterContext();
$literal = new LiteralExpression('input', 'четыре');
$literal->interpret($context);
echo $context->lookup($myvar) . "\n";

$newvar = new VariableExpression('input');
$newvar->interpret($context);
echo $context->lookup($newvar) . "\n";

$myvar->setValue("пять");
$myvar->interpret($context);
echo $context->lookup($myvar) . "\n";

echo $context->lookup($newvar) . "\n";



$context = new Interpretercontext();
$input = new VariableExpression('input');
$statement = new BooleanOrExpression(new EqualsExpression($input,
new LiteralExpression('четыре')),
new EqualsExpression($input,
    new LiteralExpression('4'))) ;
