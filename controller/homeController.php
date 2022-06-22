<?php
/**
 * Wepesi Home Controller
 *
 */
namespace Wepesi\Controller;
use Wepesi\Core\Input;
use Wepesi\Core\Redirect;
use Wepesi\Core\Session;
use Wepesi\Core\View;

class homeController{
    private View $view;

    function __construct()
        {
            $this->view = new View();
        }

        function home(){
            Redirect::to(WEB_ROOT);
        }
        function changeLang(){
            Session::put('lang', Input::get("lang"));
            Redirect::to(WEB_ROOT);
        }
        function profile(){
            $this->view->assign("profile","active");
            $this->view->display("/users-profile");
        }
        function faq(){
            $this->view->assign("faq","active");
            $this->view->display("/pages-faq");
        }
        function contact(){
            $this->view->assign("contact","active");
            $this->view->display("/pages-contact");
        }
        function register(){
            $this->view->assign("register","active");
            $this->view->display("/pages-register");
        }
        function login(){
            $this->view->assign("login","active");
            $this->view->display("/pages-login");
        }
        function blank(){
            $this->view->assign("blanc","active");
            $this->view->display("/pages-blank");
        }
            }