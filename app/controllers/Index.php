<?

namespace Controllers;


class Index extends \System\Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Home()
    {
        $this->responce->setContentType('json')->useFormatResponce(false);
        return $this->responce->withJson('Hello API world');
    }

    public function HelpRouting()
    {
        $this->setView('Index')->renderView('HelpView', $route);
        return $this->responce->withJson('Hello API world');
    }

}
