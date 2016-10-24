<?php
define ('VUBLA_CACHE', 'vubla_cache');


define ('DB_USER', 'vubla');
define ('DB_PASS', 'TfAUwNsQ97PsvYCm');
define ('DB_METADATA', 'vubla_metadata');
define ('DB_PREFIX','vubla_webshop_');

/*
define ('DB_USER', 'alex_test');
define ('DB_PASS', 'WtwwynqN4TvnNWLA');
define ('DB_METADATA', 'alex_metadata');
define ('DB_PREFIX','alex_webshop_');
*/

define ('VUBLA_BASE_URL','http://alex.vubla.com/development/api');
define ('CLASS_FOLDER', '/var/www/alex.vubla.com/htdocs/development/classes');
define ('VUBLA_BASE_PATH', '/var/www/alex.vubla.com/htdocs/development/api');
define ('API_URL', 'http://alex.vubla.com/development/api');
define ('LOGIN_URL', 'http://alex.vubla.com/development/login');
define ('VUBLA_DEBUG', true);
define ('DEBUG_SEARCH', false);
define ('HOST','77.66.51.5');
//define ('HOST','db.vubla.com');
define ('CONFIG_LOADED', true);

function checkConfig(){
    if(!defined('CONFIG_LOADED')){
        throw new VublaException("Config not loaded");
        exit;
    }
}
?>
