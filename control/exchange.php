<?php

class Exchange extends control {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->openViw('exchange/index');
    }

}
