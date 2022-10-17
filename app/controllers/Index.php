<?

namespace Controllers;

use Exception;

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

}
