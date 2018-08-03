<?php

class about extends control {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->openViw('about/index');
    }

}
