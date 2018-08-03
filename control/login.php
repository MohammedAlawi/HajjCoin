<?php

class Login extends control {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if (Session::get('LoggenIn') == false) {
            $this->view->openViw('login/index');
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
	
	function logout() {
        if (Session::get('LoggenIn') == true) {
            $jdb = new Jquerydb();
			Session::destroy();
            header('location: ' . URL);
        } else {
            header('location: ' . URL . 'Home');
        }
    }

}
