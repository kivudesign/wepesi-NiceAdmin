<?php

use Wepesi\Controller\componentController;

$route = $route??null;

$route->get('/components/alert', [componentController::class, 'alert']);
$route->get('/components/badges', [componentController::class, 'badges']);
$route->get('/components/accordion', [componentController::class, 'accordion']);
$route->get('/components/breadcrumbs', [componentController::class, 'breadcrumbs']);
$route->get('/components/buttons', [componentController::class, 'buttons']);
$route->get('/components/cards', [componentController::class, 'cards']);
$route->get('/components/carousel', [componentController::class, 'carousel']);
$route->get('/components/list-group', [componentController::class, 'listgroup']);
$route->get('/components/modal', [componentController::class, 'modal']);
$route->get('/components/pagination', [componentController::class, 'pagination']);
$route->get('/components/progress', [componentController::class, 'progress']);
$route->get('/components/spinners', [componentController::class, 'spinners']);
$route->get('/components/tabs', [componentController::class, 'tabs']);
$route->get('/components/tooltips', [componentController::class,"tooltips"]);
