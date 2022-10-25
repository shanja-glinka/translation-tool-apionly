<?

namespace System;

final class App
{

    protected static $config;
    protected static $router;
    protected static $session;
    protected static $responce;
    protected static $request;

    public function __construct($config, $routes)
    {
        $this->autoloadInit();
        
        $this->config = $config;
        $this->session = new Session();
        $this->router = new Router();
        $this->request = new Request();
        $this->responce = new Responce();


        $this->setConfig($config);
        $this->setRoutes($routes);
    }

    public function getConfig($variable = null)
    {
        if ($variable == null)
            return $this->config;
        return $this->config[$variable];
    }


    protected function setRoutes($routes)
    {
        $this->router->add($routes);
        if ($this->router->isFound())
            $this->router->executeHandler($this->router->getRequestHandler(), $this->router->getParams());
        else
            $this->responce->setHtmlCode(404)->send('Page not found');
    }

    protected function setConfig($config)
    {
        $this->config = $config;
        $this->applyConfig();
    }


    private function applyConfig()
    {
        if ($this->getConfig('https_only')) {
            if (!$this->request->isHttps())
                $this->responce->redirectTo('https://' . $this->request->getDomainName(). $this->request->getRequestUri());
        }
    }

    private function autoloadInit()
    {
        spl_autoload_register(function ($class) {
            $class = explode('\\', $class);
            $i = 0;
            $c = count($class);
            $realclass = "";
            foreach ($class as $ns) {
                if ($c - 1 == $i) {
                    $realclass .= $ns;
                } else {
                    $realclass .= strtolower($ns) . '\\';
                }
                $i++;
            }
            $path = AppDirectory . '/' . $realclass . '.php';
            $path = str_replace('\\', '/', $path);
            if (file_exists($path)) {
                require_once $path;
            }
        });
    }
}
