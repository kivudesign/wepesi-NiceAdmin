<?php


namespace Wepesi\Controller;


use Wepesi\Core\View;

class tableController
{
    function __construct(){
        $this->view= new View("/tables");
        $this->view->assign("tables","show");
    }
    function generals(){
        $this->view->assign("gereral","active");
        $this->view->display("/tables-general");
    }
    function data(){
        $this->view->assign("data","active");
        $this->view->display("/tables-data");
    }
}