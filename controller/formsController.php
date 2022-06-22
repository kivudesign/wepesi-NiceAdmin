<?php


namespace Wepesi\Controller;


use Wepesi\Core\View;

class formsController
{
    private View $view;

    function __construct()
    {
        $this->view= new View("/forms");
        $this->view->assign('forms', 'show');
    }

    function elements(){
        $this->view->assign("elements","active");
        $this->view->display("/forms-elements");
    }
    function layouts(){
        $this->view->assign("layouts","active");
        $this->view->display("/forms-layouts");
    }
    function editors(){
        $this->view->assign("editors","active");
        $this->view->display("/forms-editors");
    }
    function validation(){
        $this->view->assign("validation","active");
        $this->view->display("/forms-validation");
    }
}