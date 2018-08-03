<?php

class Register extends control {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if (Session::get('LoggenIn') == false) {
            $this->view->openViw('register/index');
        } else {
            header('location: ' . URL . 'Home');
        }
    }

    function run() {
        if (Session::get('LoggenIn') == false) {
            $this->model->run();
        } else {
            header('location: ' . URL . 'Home');
        }
    }

}
