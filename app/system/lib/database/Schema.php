<?

namespace System\Lib\Database;

class Schema implements \System\Interfaces\SchemaInterface
{

    protected $schemaName;
    protected $schemaData;

    public function __construct()
    {
        $this->schemaName = '';
        $this->schemaData = null;

    }

    public function setScheme($schemaTable)
    {
        
    }

    public function create($schemaTable)
    {

    }

    public function drop($schemaTable)
    {

    }
}