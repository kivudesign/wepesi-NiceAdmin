<?php

use Wepesi\Controller\chartsController;
use Wepesi\Controller\tableController;

$route = $route??null;

$route->get('/tables/gereral', [tableController::class, "generals"]);
$route->get('/tables/data', [tableController::class, "data"]);