<?php
class Dispatcher{

    var $request;
    public function __construct()
    {
        //echo "1";
        $this->request = new Request();
       //var_dump($this->request->url);
        Route::decoup($this->request->url,$this->request);

        $controller = $this->loadController();
       // print_r($this->request);
        call_user_func_array(array($controller,$this->request->action),$this->request->params);
        //$controller->view();


    }

    public function loadController(){

        $name = ucfirst($this->request->controller).'Controller';
        $file = Root.DS.'controller'.DS.$name.'.php';
        //die($name);
       // die($file);
        require $file;
        return new $name($this->request);
    }
}