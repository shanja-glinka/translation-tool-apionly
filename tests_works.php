<?

// ------------------------ Test isset forks for &links

global $issetExample;
$issetExample = array(true);
function issetExampleWork0()
{
    return 'itString';
}


function issetExampleWork1()
{
    global $issetExample;
    $linkVar = &$issetExample[0];
    return $linkVar;
}
$varisset0 = issetExampleWork0();
$varisset1 = issetExampleWork1();
echo PHP_EOL . '------------------------' . PHP_EOL . PHP_EOL;
var_dump(isset($varisset0), isset($varisset1));
exit;


// ------------------------ Test invoker for __construct func
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
