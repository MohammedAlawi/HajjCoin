<?php

class Charge extends control {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->openViw('charge/index');
    }

}
