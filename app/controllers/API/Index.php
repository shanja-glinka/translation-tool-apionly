<?

namespace Controllers\API;

use Exception;

class Index extends \System\Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function info()
    {
        // var_dump($arg0, $arg1);
        $this->responce->setContentType('json');
        return $this->responce->send('Hello API world', $this->responce->withText());
    }

    public function infoPost()
    {
        // var_dump($arg0, $arg1);
        $this->responce->setContentType('json');
        return $this->responce->send('POST Hello API world', $this->responce->withText());
    }

}
