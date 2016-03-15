<?php
/****************************
 *** CONSTANTS DEFINITION ***
 ****************************/

/*
 * Base constants
 */
define('APPLICATION_ROOT', $_SERVER['APPLICATION_ROOT']);
if (isset($_SERVER['APPLICATION_SERVER'])) {
    define('APPLICATION_SERVER', $_SERVER['APPLICATION_SERVER']);
}
if (!defined('APPLICATION_SERVER')) {
    define('APPLICATION_SERVER', trim(`hostname`));
}
if (!defined('APPLICATION_PLATFORM') && isset($_SERVER['APPLICATION_PLATFORM'])) {
    define('APPLICATION_PLATFORM', $_SERVER['APPLICATION_PLATFORM']);
}
if (!defined('APPLICATION_PLATFORM')) {
    define('APPLICATION_PLATFORM', 'dev');
}
if (!defined('APPLICATION_PROJECT') && isset($_SERVER['APPLICATION_PROJECT'])) {
    define('APPLICATION_PROJECT', $_SERVER['APPLICATION_PROJECT']);
}
if (!defined('APPLICATION_REVISION') && isset($_SERVER['APPLICATION_REVISION'])) {
    define('APPLICATION_REVISION', $_SERVER['APPLICATION_REVISION']);
}

/*
 * Base paths
 */
define('PATH_ROOT', $_SERVER['APPLICATION_ROOT']);
define('PATH_SOURCE', PATH_ROOT . 'src/');
define('PATH_PUBLIC', PATH_ROOT . 'public/');
define('PATH_STATICS', PATH_PUBLIC . 'statics/');
define('PATH_CONFIG', PATH_ROOT . 'config/');
define('PATH_PLATFORM', PATH_CONFIG . APPLICATION_PLATFORM . '/');
define('PATH_DYNAMIC', PATH_CONFIG . 'dynamic/');
define('PATH_STATIC', PATH_CONFIG . 'static/');
define('PATH_NGINX_TEMPLATE', PATH_ROOT . 'nginx/');
define('PATH_LOG', PATH_ROOT . 'log/');
define('PATH_VENDOR', PATH_ROOT . 'vendor/');
define('PATH_CORE', PATH_VENDOR . 'Aliance/Kanchanaburi/source/');

/*
 * Core classes
 */
define('CLASS_COMPOSER_AUTOLOADER', PATH_VENDOR . 'autoload.php');
define('CLASS_ERROR_HANDLER',       PATH_CORE . 'Error/ErrorHandler.php');
define('CLASS_FILE',                PATH_CORE . 'File/File.php');
define('CLASS_AUTOLOAD_MAP',        PATH_CORE . 'Autoload/AutoloadMap.php');
define('CLASS_AUTOLOADER',          PATH_CORE . 'Autoload/Autoloader.php');
#define('CLASS_APPLICATION_FACTORY', PATH_CORE . 'Application/ApplicationFactory.php');
#define('CLASS_TIME',                PATH_CORE . 'Time/Time.php');

/*
 * Static files
 */
define('FILE_FASTCGI_CONFIG', PATH_STATIC . 'fastcgi.config');
define('FILE_NOCACHE_CONFIG', PATH_STATIC . 'nocache.config');

/*
 * Dynamic files
 */
define('FILE_AUTOLOAD_MAP', 'classes');
define('FILE_NGINX_CONFIG', 'nginx.config');
define('FILE_CRONTAB_CONFIG', 'crontab');

/*
 * Application result/error codes
 */
const RESULT_OK = 0,
      ERROR_ENVIRONMENT = 1,
      ERROR_APPLICATION = 2,
      ERROR_USER = 3;
