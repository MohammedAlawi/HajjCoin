<?php

class Profile extends control {

    function __construct() {
        parent::__construct();
        /*if (Session::get('LoggenIn') == false) {
            Session::destroy();
            header('location: ' . URL . 'Login');
        }*/
    }

    function index() {
        if (Session::get('LoggenIn') == true) {
            $this->view->openViw('profile/index');
        } else {
            header('location: ' . URL . 'Login?ref=User');
        }
    }

}
