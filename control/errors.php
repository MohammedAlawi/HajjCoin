<?php

class Errors extends control {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->openViw('error/index');
    }

}
