<?php

use Wepesi\Controller\formsController;

$route = $route??null;

$route->get('/forms/elements', [formsController::class, 'elements']);
$route->get('/forms/layouts', [formsController::class, 'layouts']);
$route->get('/forms/editors', [formsController::class, 'editors']);
$route->get('/forms/validation', [formsController::class, 'validation']);
