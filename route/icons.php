<?php

use Wepesi\Controller\iconsController;

$route = $route??null;

$route->get('/nice-icons/bootstrap', [iconsController::class, "bootstrapicons"]);
$route->get('/nice-icons/remix', [iconsController::class, "remixicons"]);
$route->get('/nice-icons/boxicons', [iconsController::class, "boxicons"]);
