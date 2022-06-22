<?php

use Wepesi\Controller\chartsController;

$route = $route??null;

$route->get('/charts/chartjs', [chartsController::class, "chartjs"]);
$route->get('/charts/apexcharts', [chartsController::class, "apexcharts"]);
$route->get('/charts/echarts', [chartsController::class, "echarts"]);
