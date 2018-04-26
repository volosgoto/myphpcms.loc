<?php

namespace app\controllers;

class MainController extends AppController {



    public function indexAction(){
        debug($this->route); die;

        echo __METHOD__;
    }

}