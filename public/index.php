<?php
use ishop\App;
use ishop\Router;

echo 'Front controller' . '<br>';

//echo $_SERVER['QUERY_STRING'];

require_once dirname(__DIR__ )  . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routs.php';

new App();

//debug(Router::getRoutes());