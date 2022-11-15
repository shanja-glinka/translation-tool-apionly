<?

namespace Controllers;


class Install extends \System\Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function MVC()
    {
        $this->request->throwIfValueNotExist('controllerName');

        $callResult = $this->makeCallModelMethod('Install', 'createMVC', array($this->request->val('controllerName')));

        return $this->setView('Install')->renderView('MVC', array($callResult));
    }

    public function Controller()
    {
        $this->request->throwIfValueNotExist('controllerName');
        
        $methodName = $this->requestMethodToOperName('Controller');
        $callResult = $this->makeCallModelMethod('Install', $methodName, array($this->request->val('controllerName')));

        return $this->setView('Install')->renderView('OneViewMVC', array($this->request->getRequestMethod(), $callResult));
    }

    public function Model()
    {
        $this->request->throwIfValueNotExist('modelName');

        $methodName = $this->requestMethodToOperName('Model');
        $callResult = $this->makeCallModelMethod('Install', $methodName, array($this->request->val('modelName')));

        return $this->setView('Install')->renderView('OneViewMVC', array($this->request->getRequestMethod(), $callResult));
    }

    public function View()
    {
        $this->request->throwIfValueNotExist('viewName');

        $methodName = $this->requestMethodToOperName('View');
        $callResult = $this->makeCallModelMethod('Install', $methodName, array($this->request->val('viewName')));
        
        return $this->setView('Install')->renderView('OneViewMVC', array($this->request->getRequestMethod(), $callResult));
    }

    public function Route()
    {
        $methodName = $this->requestMethodToOperName('Route');
        $args = array(
            $this->request->val('route'),
            $this->request->val('callFunctions'),
            $this->request->val('requests')
        );

        $callResult = $this->makeCallModelMethod('Install', $methodName, $args);
        return $this->setView('Install')->renderView('Route', array($callResult));
    }


    private function requestMethodToOperName($methodCallName)
    {
        $methodName = null;

        if ($this->request->getRequestMethod() == 'POST')
            $methodName = 'create' . $methodCallName;
        else if ($this->request->getRequestMethod() == 'DELETE')
            $methodName = 'delete' . $methodCallName;

        return $methodName;
    }

    private function makeCallModelMethod($modelName, $methodName, $args = array())
    {
        if ($methodName == null)
            return false;

        $model = $this->callModel($modelName);
        $callResult = $this->callModelMethod($model, $methodName, $args);

        return $callResult;
    }
}
