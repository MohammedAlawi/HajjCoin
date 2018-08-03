<?php

class Purchases extends control {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->openViw('purchases/index');
    }

}
