<?php
class Dispatcher{

    var $request;
    public function __construct()
    {
        //echo "1";
        $this->request = new Request();
       //var_dump($this->request->url);
        Route::decoup($this->request->url,$this->request);
        print_r($this->request);

    }
}