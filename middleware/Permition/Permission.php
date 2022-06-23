<?php


namespace Wepesi\Middleware\Auth;

use Wepesi\Core\Redirect;
use Wepesi\Core\Input;
use Wepesi\Core\Session;
use Wepesi\Core\Token;

class Permission
{
    function __construct(){

    }

    function authorization(){
        $source = Session::flash('Source_page');
        if (!Input::exists()) {
            Session::put('errors',"No Data");
            Redirect::to(WEB_ROOT.$source);
        }
        if (!Token::check(Input::get('token'))) {
            Session::put('errors', 'Token expire');
            Redirect::to(WEB_ROOT.$source);
        }
    }
}