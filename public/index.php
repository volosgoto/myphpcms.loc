<?php
use ishop\App;

echo 'Front controller' . '<br>';

//echo $_SERVER['QUERY_STRING'];

require_once dirname(__DIR__ )  . '/config/init.php';
require_once LIBS . '/functions.php';

new App();