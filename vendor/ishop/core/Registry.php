<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 23.04.18
 * Time: 15:47
 */

namespace ishop;


class Registry {

    use TSingletone;

    private static $properties = [];
//    public static $objects = [];

    public function setProperty ($name, $value){
        self::$properties[$name] = $value;

    }

    public function getProperty ($name) {
        if (isset(self::$properties[$name])) {
            return self::$properties[$name];
        }
        return null;
    }

    public function getProperties() {
        return self::$properties;
    }





}