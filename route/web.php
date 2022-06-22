<?php

use Wepesi\Controller\homeController;
use Wepesi\Core\Routing\Router;
use Wepesi\Core\View;

    $route=new Router();
    // setup get started pages index
    $route->get('/', function () {
        (new View)->display('index');
    });
    $route->get('/profile', [homeController::class,"profile"]);
    $route->get('/faq', [homeController::class,"faq"]);
    $route->get('/contact', [homeController::class,"contact"]);
    $route->get('/register', [homeController::class,"register"]);
    $route->get('/login', [homeController::class,"login"]);
    $route->get('/blank', [homeController::class, "blank"]);

    include "component.php";
    include "forms.php";
    include "charts.php";
    include "tables.php";
    include "icons.php";

    $route->run();