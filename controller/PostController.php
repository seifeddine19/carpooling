<?php
/**
 * Created by PhpStorm.
 * User: seife
 * Date: 13/04/2018
 * Time: 21:32
 */

class PostController extends Controller{



    public function view($params){

        $this->set(array(
           'name' => 'Seife',
            'website' => 'fdfd.com'
        ));
      //  echo 'params :'.$params ;
       $this->render('index');
    }
}