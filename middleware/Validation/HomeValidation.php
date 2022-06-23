<?php
namespace wepesi\Middleware\Validation;

use Wepesi\Core\Redirect;
use Wepesi\Core\Session;
use Wepesi\Core\Validation\Validate;

class HomeValidation
{
    private Validate $validation;

    function __construct(){
        $this->validation = new Validate();
    }
    function changeLang(){
        $valid = new Validate();
        $schema = [
            "token" => $valid->string("token")
                ->min(1)
                ->max(2)
                ->required()
                ->check(),
            "lang" => $valid->string("lang")
                ->min(1)
                ->max(2)
                ->required()
                ->check()
        ];

        $valid->check($_POST,$schema);
        if(!$valid->passed()){
            var_dump($valid->errors());
            die();
        }
    }
    function userLogin(){
        $schema=[
            "token"=>$this->validation->any(),
            "username"=>$this->validation->string("username")->min(6)->max(30)->required()->check(),
            "password"=>$this->validation->string("password")->min(6)->max(30)->required()->check()
        ];
        $this->validation->check($_POST,$schema);
        if(!$this->validation->passed()){
            Session::put("errors",$this->validation->errors());
            Redirect::to(WEB_ROOT."login");
        }
    }
    function userRegister(){
        $schema=[
            "token"=>$this->validation->any(),
            "name"=>$this->validation->string("name")->min(3)->max(15)->required()->check(),
            "email"=>$this->validation->string("email")->email()->min(6)->max(15)->required()->check(),
            "username"=>$this->validation->string("username")->min(6)->max(30)->required()->check(),
            "password"=>$this->validation->string("password")->min(6)->max(30)->required()->check(),
            "terms"=>$this->validation->string("terms")->min(2)->max(6)->required()->check()

        ];
        $this->validation->check($_POST,$schema);
        if(!$this->validation->passed()){
            Session::put("errors",$this->validation->errors());
            Redirect::to(WEB_ROOT."register");
        }
    }
}