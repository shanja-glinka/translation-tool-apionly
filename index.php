<?


define('AppDirectory', str_replace('\\', '/', __DIR__) . '/app');

try {
    require_once AppDirectory . '/system/App.php';

    $config = require_once AppDirectory . '/config.php';
    $routes = require_once AppDirectory . '/routes.php';

    $app = new System\App($config, $routes);
} catch (Exception $e) {

    $responce = new System\Responce();
    $responce->setHtmlCode($e->getCode());
    $responce->send(array('error' => $e->getMessage()));
}
