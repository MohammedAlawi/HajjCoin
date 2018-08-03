<?php

class Home extends control {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->openViw('home/index');
    }

}
