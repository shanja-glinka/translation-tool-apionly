<?


define('AppDirectory', str_replace('\\', '/', __DIR__) . '/app');

// @include_once('error_output.php');

try {
    require_once AppDirectory . '/system/App.php';

    $config = require_once AppDirectory . '/config.php';
    $routes = require_once AppDirectory . '/routes.php';

    $app = new System\App($config);
    $app($routes);

} catch (Exception $e) {

    $responce = new System\Responce();
    $responce->setHtmlCode($e->getCode());
    $responce->send(array('error' => $e->getMessage()));
}

// abstract class TestClassAbs {
//     private $property;
//     private $property2;
//     public function __construct($argument, $argument2)
//     {
//         $this->property = $argument;
//         $this->property2 = $argument2;
//     }
// }

// class TestClass extends TestClassAbs
// {
//     public function __construct($argument,$argument2)
//     {
//         parent::__construct($argument,$argument2);
//     }
// }

// $ref = new ReflectionClass('TestClass');
// $instance = $ref->newInstanceWithoutConstructor();
// echo PHP_EOL . '------------------------' . PHP_EOL . PHP_EOL;
// $constructor = $ref->getConstructor();
// $constructor->setAccessible(true);
// $constructor->invokeArgs($instance, ['It works!', '444']);
// var_dump($instance);

// Output:
// ------------------------

// object(TestClass)#2 (2) {
// ["property":"TestClassAbs":private]=>
// string(9) "It works!"
// ["property2":"TestClassAbs":private]=>
// string(3) "444"
// }

?>