<?php
/***************************
 *** PROJECT ENTRY POINT ***
 ***************************/

require_once 'autoloader.php';

use Aliance\Kanchanaburi\Application\ApplicationFactory;
use Aliance\Kanchanaburi\Error\ErrorHandler;

/** @param Exception $Ex */
$ExceptionHandler = function(Exception $Ex) {
    echo 'Error: ', $Ex->getMessage(), PHP_EOL;
    exit(ERROR_USER);
};
/** @var Closure $ExceptionHandler */
ErrorHandler::getInstance()->setPhpFatalExceptionHandler($ExceptionHandler);

$Application = ApplicationFactory::getInstance()->createApplication();

if ($Application === NULL) {
    echo 'Error: Application not found', PHP_EOL;
    exit(ERROR_APPLICATION);
}

try {
    $Application->initialize();
    $Application->run();
    exit(RESULT_OK);
} catch (Exception $Ex) {
    ErrorHandler::getInstance()->handlePhpFatalException($Ex);
}
