<?php

namespace Core;

use Pecee\SimpleRouter\SimpleRouter;

class Router extends SimpleRouter
{
    public static function start(): void
    {
        require_once '../../config/helpers.php';
        require_once '../../config/routes.php';
        parent::start();
    }
}