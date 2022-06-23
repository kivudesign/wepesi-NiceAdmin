<?php
    // Error Alert
use Wepesi\Core\Session;

if (Session::exists('errors')) {
        $errors = Session::get('errors');
        Session::delete('errors');
        $errors = !is_array($errors) ? [$errors] : $errors['error'];
        foreach ($errors as $er) {
            $error_message=$er;
            if (is_array($er)) {
                $error_message = $er['message'];
            }
            $errors_template = <<<HTML
            <div class="alert alert-danger alert-dismissible fade show" role="alert">$error_message
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML;
            echo $errors_template;
        }
    }

if (Session::exists('success')) {
        $success_message=Session::get("success");
        Session::delete("success");
        $errors_template = <<<HTML
            <div class="alert alert-success alert-dismissible fade show" role="alert">$success_message
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML;
    echo $errors_template;
}