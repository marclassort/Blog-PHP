<<<<<<< HEAD
<?php

use Core\HttpRequest;
use Core\Router;

require '../vendor/autoload.php';
define('CORE_DIR', realpath(dirname(__DIR__)));
define('CONF_DIR', realpath(dirname(__DIR__ )) . '/config');
define('SRC_DIR', realpath(dirname(__DIR__ )) . '/src');
define('CONTROLLER_DIR', realpath(dirname(__DIR__)) . '/src/Controller');
define('VIEW_DIR', realpath(dirname(__DIR__ )) . '/src/view');
define('PUBLIC_DIR', realpath(dirname(__DIR__)) . '/public');

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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Marc Lassort</title>
</head>
<body>
    
</body>
</html>
>>>>>>> main
