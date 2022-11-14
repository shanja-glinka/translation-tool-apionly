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

    public function HelpSwitch($helpModule)
    {
        $modelCallResult = null;
        switch (strtolower($helpModule)) {
            case 'translate':
                $modelCallResult = 'translate';
                break;
            default:
                $modelCallResult = 'Any';
                break;
        }

        $modelHelp = $this->callModel('HelpSwitch');
        $callResult = $this->callModelMethod($modelHelp, $modelCallResult);
        return $this->setView('Index')->renderView('HelpSwitch', array($callResult, $helpModule));
    }

    public function HelpRouting()
    {
        // $modelHelpRouting = new \Models\HelpRouting();
        $modelHelpRouting = $this->callModel('HelpRouting');
        return $this->setView('Index')->renderView('HelpView', array($modelHelpRouting(1)));
    }
}
