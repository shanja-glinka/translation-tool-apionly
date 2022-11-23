<?

namespace System\Lib\Database;

final class SchemaData extends \ArrayObject 
{
    public function __construct()
    {
        parent::__construct();
        $this->loadConfig();
    }

    public function getAll()
    {
        return $this->config;
    }

    private function loadConfig()
    {
        $this->config = require AssetsDirectory . '/data/config.php';

        foreach($this->config as $k => $v)
            $this->offsetSet($k, $v);
    }

}