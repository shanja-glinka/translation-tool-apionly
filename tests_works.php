<?

abstract class TestClassAbs {
    private $property;
    private $property2;
    public function __construct($argument, $argument2)
    {
        $this->property = $argument;
        $this->property2 = $argument2;
    }
}

class TestClass extends TestClassAbs
{
    public function __construct($argument,$argument2)
    {
        parent::__construct($argument,$argument2);
    }
}

$ref = new ReflectionClass('TestClass');
$instance = $ref->newInstanceWithoutConstructor();
echo PHP_EOL . '------------------------' . PHP_EOL . PHP_EOL;
$constructor = $ref->getConstructor();
$constructor->setAccessible(true);
$constructor->invokeArgs($instance, ['Work!', 'arg0']);
var_dump($instance);
