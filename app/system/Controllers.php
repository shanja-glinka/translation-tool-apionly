<?

namespace System;

abstract class Controllers
{

    protected $validator;
    protected $request;
    protected $responce;
    protected $session;
    protected $cache;
    protected $cookie;

    public function __construct()
    {
        $this->request = new Request;
        $this->responce = new Responce();
        $this->session = new Session;
    }
}
