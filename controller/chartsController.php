<?php


namespace Wepesi\Controller;


use Wepesi\Core\View;

class chartsController
{
    private View $view;

    function __construct()
    {
        $this->view= new View("/charts");
        $this->view->assign('charts', 'show');
    }

    function chartjs(){
        $this->view->assign("chartjs","active");
        $this->view->display("/charts-chartjs");
    }
    function apexcharts(){
        $this->view->assign("apexcharts","active");
        $this->view->display("/charts-apexcharts");
    }
    function echarts(){
        $this->view->assign("echarts","active");
        $this->view->display("/charts-echarts");
    }
}