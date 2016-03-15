<?php
/*************************
 *** MANAGE AUTOLOADER ***
 *************************/

require_once 'constants.php';

if (!isset($_SERVER['APPLICATION_ROOT'])) {
    trigger_error('Application root not defined', E_USER_ERROR);
    exit(ERROR_ENVIRONMENT);
}

use Aliance\Kanchanaburi\Autoload\Autoloader;
use Aliance\Kanchanaburi\Autoload\AutoloadMap;
use Aliance\Kanchanaburi\Config\Config;

require_once CLASS_ERROR_HANDLER;

require CLASS_FILE;
require_once CLASS_AUTOLOAD_MAP;

AutoloadMap::setClassesRoots([PATH_CORE, PATH_SOURCE]);
AutoloadMap::setPath(PATH_DYNAMIC);
AutoloadMap::setFileName(FILE_AUTOLOAD_MAP);
AutoloadMap::setProjectPrefix(APPLICATION_PROJECT . ':' . APPLICATION_REVISION);

require_once CLASS_AUTOLOADER;
Autoloader::register();

// Register vendor autoloader
require_once CLASS_COMPOSER_AUTOLOADER;

Config::setPathGlobalConfigs(PATH_CONFIG);
Config::setPathPlatformConfigs(PATH_PLATFORM);
