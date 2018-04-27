<?php

namespace app\controllers;

use ishop\App;
use ishop\Cache;

class MainController extends AppController {

    public function indexAction(){
        $posts = \R::findAll('test');

        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane', 'Mike'];

        $cache = Cache::instance();
//        $cache->set('test', $names);
//        $cache->delete('test');

        $this->setMeta(App::$app->getProperty('site_name'), 'главная', 'главная');
        $this->set(compact('posts'));
    }

}