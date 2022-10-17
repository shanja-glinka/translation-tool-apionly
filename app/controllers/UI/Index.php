<?

namespace Controllers\UI;

use Exception;

class Index extends \System\Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $this->responce->setContentType('json');
        return $this->responce->send('Hello world', $this->responce->withText());
    }


    private function hasRequestAccess($token = null)
    {
        if (!$this->request->getQuery('query'))
            throw new Exception('No query', 404);

        return;
    }
}
