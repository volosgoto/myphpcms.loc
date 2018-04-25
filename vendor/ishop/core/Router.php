<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 25.04.18
 * Time: 9:36
 */

namespace ishop;


class Router {

    protected static $routes = [];
    protected static $route = [];

    public static function add ($regrxp, $route = []) {
        self::$routes[$regrxp] = $route;
    }

    public static function getRoutes () {
        return self::$routes;
    }

    public static function getRoute () {
        return self::$route;
    }

    public static function dispatch ($url){
        if (self::matchRoute($url)) {
            echo 'OK';
        } else {
            echo 'NO';
        }
    }

    public static function matchRoute($url) {
        return true;
    }
}