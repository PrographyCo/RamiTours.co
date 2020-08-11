<?php

if (!defined('DS')){
    define('DS', DIRECTORY_SEPARATOR);
}

define('APP_PATH', realpath(dirname(__FILE__)) .DS.'..');
define('VIEWS_PATH', APP_PATH . DS . 'views' . DS);
define('TEMPLATE_PATH', APP_PATH . DS . 'template' . DS);
define('LANG_PATH', APP_PATH . DS . 'languages' . DS);

define('CSS', '/assets/css/');
define('JS', '/assets/js/');
define('IMG', '/assets/images/');

defined('DATABASE_HOST_NAME')? null : define('DATABASE_HOST_NAME','business29.web-hosting.com');
defined('DATABASE_DB_NAME')? null : define('DATABASE_DB_NAME','progwlfo_ramitours_2164956');
defined('DATABASE_USER_NAME')? null : define('DATABASE_USER_NAME','progwlfo_ramitours');
defined('DATABASE_PASSWORD')? null : define('DATABASE_PASSWORD','RAmiTourS31.156PQ');
defined('DATABASE_PORT_NUMBER')? null : define('DATABASE_PORT_NUMBER',3306);
defined('DATABASE_CONN_DRIVER')? null : define('DATABASE_CONN_DRIVER',1);

defined('DEFAULT_LANG')? null : define('DEFAULT_LANG','en');