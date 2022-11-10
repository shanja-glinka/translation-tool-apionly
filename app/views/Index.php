<?

namespace Views;

class Index extends \System\Views
{

    public function __construct()
    {
        $responce = new \System\Responce('json');
        parent::__construct($responce);

    }

    public function HelpView($args)
    {
        // \System\Helper\Debug::varDump($args);
        return $this->responce->withJson($args);
    }
}