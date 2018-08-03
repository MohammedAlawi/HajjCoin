<?php

class Contact extends control {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->openViw('contact/index');
    }

    function run() {
		$this->model->run();
    }

}
