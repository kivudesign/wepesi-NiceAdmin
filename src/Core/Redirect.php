<?php

namespace Wepesi\Core;

use Wepesi\Core\Validation\Validate;

class Redirect
{
    static function to($location)
    {
        $validate = new Validate();
        $schema = ['link' => $validate->string('link')->url()->check()];
        $source = ['link' => $location];
        if ($location) {
            if (is_numeric($location)) {
                $location = 'view/';
                switch ($location) {
                    case 404:
                        $location .= '404';
                        header('Location:' . $location);
                        break;
                }
            } else {
                // check if the location is an url
                $validate->check($source, $schema);
                if ($validate->passed()) {
                    // Redirect a url
                    header('Location:' . $location, true, 301);
                } else {
                    $link = substr(Escape::addSlaches($location), 1);
                    $location = WEB_ROOT . $link;
                    header('Location:' . $location);
                }
            }
        } else {
            //TODO Design a 404 pages in case file or page does not exist
            header('HTTP/1.0 404 Not Found', true, 404);
        }
        exit();
    }
}
