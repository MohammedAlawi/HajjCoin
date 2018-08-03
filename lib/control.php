<?php

class control {

    function __construct() {
        $this->view = new View();
    }
        
    public function openModel($name) {
        $path = 'model/'.$name.'_model.php';

        if(file_exists($path)){
            require 'model/'.$name.'_model.php';
            $modelName = $name.'_Model';
            $this->model = new $modelName;
        }
    }

}
