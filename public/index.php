<?php

use Core\Router as CoreRouter;
use Pecee\SimpleRouter\Router;
use Pecee\SimpleRouter\SimpleRouter;

require_once '../vendor/autoload.php';
require_once '../vendor/pecee/simple-router/helpers.php';
require_once '../config/routes.php';

echo '<p>Tu es bien dans index.php ligne 16</p>';

define('CORE_DIR', realpath(dirname(__DIR__)));
define('CONF_DIR', realpath(dirname(__DIR__ )) . '/config');
define('SRC_DIR', realpath(dirname(__DIR__ )) . '/src');
define('CONTROLLER_DIR', realpath(dirname(__DIR__)) . '/src/Controller');
define('VIEW_DIR', realpath(dirname(__DIR__ )) . '/src/view');
define('PUBLIC_DIR', realpath(dirname(__DIR__)) . '/public');

$configFile = file_get_contents(CONF_DIR . '/config.json');
$config = json_decode($configFile);

// spl_autoload_register(function($class) use($config) 
// {
//     foreach($config->autoloadFolder as $folder) 
//     {
//         if (file_exists($folder . '/' . $class . '.php'))
//         {
//             require_once($folder . '/' . $class . '.php');
//             break;
//         }
//     }
// });

echo '<p>Tu es bien dans index.php ligne 35</p>';

// SimpleRouter::setDefaultNamespace('\src\Controller');
\Core\Router::start();