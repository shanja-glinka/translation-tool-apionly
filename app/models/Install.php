<?

namespace Models;

use Exception;

final class Install
{


    public function __construct()
    {
    }


    public function createMVC($name)
    {
        return array(
            $this->createController($name),
            $this->createModel($name),
            $this->createView($name)
        );
    }

    public function createController($name)
    {
        $content = $this->setTamplateVars($this->loadTemplate('Install_Controller.txt'), array('name' => $name));
        return $this->installClass($name, (AppDirectory . '/controllers/'), $content);
    }

    public function createModel($name)
    {
        $content = $this->setTamplateVars($this->loadTemplate('Install_Model.txt'), array('name' => $name));
        return $this->installClass($name, (AppDirectory . '/models/'), $content);
    }

    public function createView($name)
    {
        $content = $this->setTamplateVars($this->loadTemplate('Install_View.txt'), array('name' => $name));
        return $this->installClass($name, (AppDirectory . '/views/'), $content);
    }

    public function deleteController($name)
    {
        return $this->unlinkClass($name, AppDirectory . '/controllers/');
    }

    public function deleteModel($name)
    {
        return $this->unlinkClass($name, AppDirectory . '/models/');
    }

    public function deleteView($name)
    {
        return $this->unlinkClass($name, AppDirectory . '/views/');
    }

    private function unlinkClass($className, $dir)
    {
        clearstatcache();
        $dirMove = 'assets/deleted/MVC/';
        $filePath = $dir . $className . '.php';
        $filePathNew = $dirMove . \System\Helper\TimeWorker::timeToStamp() . '_' . $className . '.php';

        if (!file_exists($filePath))
            return true;

        if (!\System\Helper\Files::isWritable_r($dir))
            return -1;

        if (!\System\Helper\Files::isWritable_r($dirMove))
            return -2;

        if (copy($filePath, $filePathNew))
            if (unlink($filePath))
                return $filePathNew;

        return false;
    }

    private function installClass($className, $dir, $content)
    {
        clearstatcache();
        $filePath = $dir . $className . '.php';
        if (file_exists($filePath))
            return 2;

        if (!\System\Helper\Files::isWritable_r($dir))
            return -1;

        $fp = fopen($filePath, 'w+');
        fwrite($fp, $content);
        fclose($fp);
        chmod($filePath, 0777);
        clearstatcache();

        return true;
    }

    private function setTamplateVars($template, $vars)
    {
        foreach ($vars as $key => $val)
            $template = str_replace("#$key#", $val, $template);
        return $template;
    }

    private function loadTemplate($fileName)
    {
        $fileDir = 'assets/templates/MVC/';

        $filePath = $fileDir . $fileName;

        if (!file_exists($filePath))
            throw new Exception("Asset file '$fileName' in '$fileDir' does not exist", 500);

        return file_get_contents($filePath);
    }
}
