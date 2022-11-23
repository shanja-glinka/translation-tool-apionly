<?

namespace Controllers;

class Schemas extends \System\Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Builder()
    {
        
    }

    public function Table()
    {
        $schema = new \System\Lib\Database\SchemaWorker();

        $schema->setScheme('Users');

        var_dump($schema->val('uID'));
        var_dump($schema->setVal('uID', 41));
        var_dump($schema->val('uID'));
        
        // var_dump($schema->val('uID'));
        // $schema->

    }
    
}