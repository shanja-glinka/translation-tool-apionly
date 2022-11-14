<?


define('AppDirectory', str_replace('\\', '/', __DIR__) . '/app');

@include_once('error_output.php');
@include_once('tests_works.php');

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
