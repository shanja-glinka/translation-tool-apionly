<?

namespace Controllers;


class Translate extends \System\Controllers
{


    public function __construct()
    {
        parent::__construct();

        $this->responce->setContentType('json');
    }

    public function Languages()
    {
        $this->responce->setContentType('json');
        return $this->responce->send('Hello API world');
    }

    public function infoPost()
    {
        $this->responce->setContentType('json');
        return $this->responce->send('POST Hello API world');
    }

    public function Index()
    {
        $this->responce->setContentType('json');

        return $this->setView('Translate')->renderView('Index');
    }

}
