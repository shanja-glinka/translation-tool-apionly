<?

namespace Views;

use System\Responce;

class Index extends \System\Views
{
    private $responce;

    public function __construct()
    {
        $this->responce = new Responce('json');
        parent::__construct($this->responce);

    }

    public function HelpView()
    {

    }
}