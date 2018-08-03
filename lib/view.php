<?php

class view {

    function __construct() {
        
    }
    
    public function openViw($name, $noInclude = FALSE) {
        if ($noInclude == True) {
            require 'view/' . $name . '.php';
        } else {
            require 'view/header.php';
            require 'view/' . $name . '.php';
            require 'view/footer.php';
        }
    }

}