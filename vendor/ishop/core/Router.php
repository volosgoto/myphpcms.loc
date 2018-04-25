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
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#{$pattern}#", $url, $matches)) {
                foreach ($matches as $k => $v) {
                    if (is_string($k)) {
                        $route[$k] = $v;
                    }
                }
                if (empty($route['action'])) {
                    $route['action'] = 'index';
                }
                if (!isset($route['prefix'])) {
                    $route['prefix'] = '';
                } else {
                    $route['prefix'] .= '\\';
                }
                self::$route = $route;
                debug(self::$route);
                return true;
            }
        }
        return false;
    }
}