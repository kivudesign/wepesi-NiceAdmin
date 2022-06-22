<?php
namespace Wepesi\Controller;

use Wepesi\Core\View;

class componentController
{
    private View $view;

    function __construct(){
        $this->view= new View('/component');
        $this->view->assign("component","show");
    }
    function alert(){
        $this->view->assign("alert","active");
        $this->view->display("/components-alerts");
    }
    function badges(){
        $this->view->assign('badges', 'active');
        $this->view->display('/components-badges');
    }
    function accordion(){
        $this->view->assign("accordion","active");
        $this->view->display("/components-accordion");
    }
    function breadcrumbs(){
        $this->view->assign('breadcrumbs', 'active');
        $this->view->display('/components-breadcrumbs');
    }
    function buttons(){
        $this->view->assign("buttons","active");
        $this->view->display("/components-buttons");
    }
    function cards(){
        $this->view->assign('cards', 'active');
        $this->view->display('/components-cards');
    }
    function carousel(){
        $this->view->assign("carousel","active");
        $this->view->display("/components-carousel");
    }
    function listgroup(){
        $this->view->assign('listgroup', 'active');
        $this->view->display('/components-list-group');
    }
    function modal(){
        $this->view->assign("modal","active");
        $this->view->display("/components-modal");
    }
    function pagination(){
        $this->view->assign('pagination', 'active');
        $this->view->display('/components-pagination');
    }
    function progress(){
        $this->view->assign("progress","active");
        $this->view->display("/components-progress");
    }
    function spinners(){
        $this->view->assign('spinners', 'active');
        $this->view->display('/components-spinners');
    }
    function tabs(){
        $this->view->assign("tabs","active");
        $this->view->display("/components-tabs");
    }
    function tooltips(){
        $this->view->assign('tooltips', 'active');
        $this->view->display('/components-tooltips');
    }
}