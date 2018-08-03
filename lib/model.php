<?php

class model {

    function __construct() {
        $this->db = new Database();
        $this->security = new security();
    }
}
