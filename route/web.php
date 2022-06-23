<?php

use Wepesi\Controller\homeController;
use Wepesi\Core\Routing\Router;
use Wepesi\Core\View;
use Wepesi\Middleware\Auth\Permission;
use wepesi\Middleware\Validation\HomeValidation;

$route=new Router();
    // setup get started pages index
    $route->get('/', function () {
        (new View)->display('index');
    });
    $route->get('/profile', [homeController::class,"profile"]);
    $route->get('/faq', [homeController::class,"faq"]);
    $route->get('/contact', [homeController::class,"contact"]);
    $route->get('/register', [homeController::class,"register"]);
    $route->post('/register', [homeController::class,"userRegister"])
        ->middleware([Permission::class, 'authorization'])
        ->middleware([HomeValidation::class, 'userRegister']);

    $route->get('/login', [homeController::class,"login"]);
    $route->post('/login', [homeController::class,"userLogin"])
        ->middleware([Permission::class,"authorization"])
        ->middleware([HomeValidation::class,"userLogin"])
    ;
    $route->get('/blank', [homeController::class, "blank"]);

    include "component.php";
    include "forms.php";
    include "charts.php";
    include "tables.php";
    include "icons.php";

    $route->run();