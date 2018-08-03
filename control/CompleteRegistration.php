<?php

class CompleteRegistration extends control {

    function __construct() {
        parent::__construct();
    }

    function index() {
        header('location: ' . URL . 'Home');
    }

    function code($code) {
        if ($code == NULL)
            header('location: ' . URL . 'Home');
        if (Session::get('LoggenIn') == false) {
            $this->view->openViw('header', true);
            $this->model->Code(security::clean($code));
            $this->view->openViw('footer', true);
        } else {
            header('location: ' . URL . 'Home');
        }
    }

    function confirm() {
        if (Session::get('LoggenIn') == false) {
            $this->model->confirm();
        } else {
            header('location: ' . URL . 'Home');
        }
    }

}
