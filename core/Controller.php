<?php
/**
 * Created by PhpStorm.
 * User: seife
 * Date: 13/04/2018
 * Time: 21:31
 */

class Controller{

        public $request;
        public $variabls = array();


        public function __construct($request)
        {

            $this->request = $request;
        }



        public function set($key,$value= null){

            if(is_array($key)){
                $this->variabls += $key;
            }else{
                $this->variabls[$key] = $value;
            }

        }

    public function render($view){

            extract($this->variabls);
        $view = Root.DS.'view'.DS.$this->request->controller.DS.$view.'.php';
        require ($view);

    }
}