<?php


namespace Wepesi\Controller;


use Wepesi\Core\View;

class iconsController
{
    function __construct()
    {
        $this->view = new View("/icons");
        $this->view->assign("icons","show");
    }

    function bootstrapicons(){
        $this->view->assign("bootstrapicons","active");
        $this->view->display("/icons-bootstrap");
    }
    function remixicons(){
        $this->view->assign("remixicons","active");
        $this->view->display("/icons-remix");
    }
    function boxicons(){
        $this->view->assign("boxicons","active");
        $this->view->display("/icons-boxicons");
    }
}