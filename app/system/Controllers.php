<?

namespace System;

use Exception;

abstract class Controllers
{

    protected $validator;
    protected $request;
    protected $responce;
    protected $session;
    protected $cache;
    protected $cookie;

    protected $view = null;

    public function __construct()
    {
        $this->request = new Request;
        $this->responce = new Responce();
        $this->session = new Session;
    }



    protected function setView($viewMethodName)
    {
        $this->view = Helper\Methods::installMethod($this->view, $viewMethodName);
        
        return $this;
    }

    protected function renderView($action, $params = array())
    {
        if (!$this->view)
            throw new \RuntimeException(
                'Controller View was not installed'
            );

        Helper\Methods::callMethod($this->view, $action, $params);
    }
}
