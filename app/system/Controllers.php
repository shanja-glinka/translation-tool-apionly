<?

namespace System;

use System\Request as Request;
use System\Responce as Responce;
// use System\Validator as Validator;
use System\Session as Session;
// use System\Cookie as Cookie;
use Exception;

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
        // $this->validator = new Validator;
        $this->responce = new Responce;
        $this->session = new Session;
        // $this->cookie = new Cookie;
    }
}
