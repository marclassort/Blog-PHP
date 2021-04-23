<?php

use Core\HttpRequest;
use Core\Router;

require '../vendor/autoload.php';
define('CONF_DIR', realpath(dirname(__DIR__ )) . '/config');
define('VIEW_DIR', realpath(dirname(__DIR__ )) . '/src/view');
define('SRC_DIR', realpath(dirname(__DIR__ )) . '/src');

$configFile = file_get_contents(CONF_DIR . '/config.json');
$config = json_decode($configFile);

spl_autoload_register(function($class) use($config) 
{
    foreach($config->autoloadFolder as $folder) 
    {
        if (file_exists($folder . '/' . $class . '.php'))
        {
            require_once($folder . '/' . $class . '.php');
            break;
        }
    }
});

try
{
    $httpRequest = new HttpRequest();
    $router = new Router();
    $httpRequest->setRoute($router->findRoute($httpRequest, $config->basepath));
    $httpRequest->run($config);
}
catch(Exception $e)
{
    $httpRequest = new HttpRequest("/error", "GET");
    $router = new Router();
    $httpRequest->setRoute($router->findRoute($httpRequest, $config->basepath));
    $httpRequest->addParam($e);
    $httpRequest->run($config);
}

// return $this->render(‘nomVue.html.twig’);