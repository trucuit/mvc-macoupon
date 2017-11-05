<?php
class Bootstrap
{
    private $_params;
    private $_controllerObj;
    public function __construct()
    {
        $this->setParam();
        $controllerName = ucfirst($this->_params['controller']) . 'Controller';
        $filePath = MODULE_PATH . DS . $this->_params['module'] . DS . 'controllers' . DS . $controllerName . '.php';
        if (file_exists($filePath)) {
            $this->loadFileExits($filePath, $controllerName);
            $this->callMethod();
        }
    }

    public function setParam()
    {
        $this->_params = array_merge($_POST, $_GET);
        // $this->_params['id_get']=isset($this->_params['id_get']) ? $this->_params['id_get'] : '';
        $this->_params['module'] = isset($this->_params['module']) ? $this->_params['module'] : DEFAULT_MODULE;
        $this->_params['controller'] = isset($this->_params['controller']) ? $this->_params['controller'] : DEFAULT_CONTROLLER;
        $this->_params['action'] = isset($this->_params['action']) ? $this->_params['action'] : DEFAULT_ACTION;

echo"<pre>";
        print_r($this->_params);
        echo "</pre>";
    }

    public function loadFileExits($filePath, $controllerName)
    {
        include_once $filePath;
        $this->_controllerObj = new $controllerName($this->_params);
        // echo"<pre>";
        // print_r($this->_controllerObj);
        // echo "</pre>";
    }

    public function callMethod()
    {
        $actionName = $this->_params['action'] .'Action';
        if(method_exists($this->_controllerObj,$actionName)){
            $this->_controllerObj->$actionName();
        }
    }
}
