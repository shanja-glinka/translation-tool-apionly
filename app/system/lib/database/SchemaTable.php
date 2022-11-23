<?

namespace System\Lib\Database;

class SchemaTable
{

    protected $tableName;
    protected $tableVariables;

    public function __invoke($tableName, $tableVars)
    {
        $this->tableName = $tableName;
        $this->tableVariables = $tableVars;
    }

}