<?php

class Balance extends control {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->openViw('balance/index');
    }

}
