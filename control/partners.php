<?php

class Partners extends control {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->openViw('partners/index');
    }

}
