<?php

class database extends PDO {

    function __construct() {
        try {
            parent::__construct('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
        } catch (Exception $e) {
			if(security::getip() == "127.0.0.1"){
				echo "The Error : " . APISetting::delete_between("[", "]", $e->getMessage() ) . "<br />";
				echo "The Error in : " . $e->getFile() . "<br />";
				echo "Line : " . $e->getLine() . "<br />";
			}
            die;
        }
    }

}
