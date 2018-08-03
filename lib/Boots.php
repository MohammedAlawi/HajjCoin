<?php
class Boots {

    function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        #print_r( $url);
        
        if (empty($url[0])) {
            require 'control/index.php';
            $control = new Index();
            $control->index();
            return false;
        }
        
        $file = 'control/' . $url[0] . '.php';
        if (file_exists($file)) {
            require ($file);
        } else {
            $this->error();
        }
        
        $control = new $url[0];
        $control->openModel($url[0]);
        
        if (isset($url[2])) {
            if(method_exists($control, $url[1])){
                $control->{$url[1]}($url[2]);
            } else {
                
                $this->error();
            }
        } else {
            
            if (isset($url[1])) {
                if(method_exists($control, $url[1])){
                    $control->{$url[1]}();
                } else {
                    
                    $this->error();
                }
            } else {
                $control->index();
            }
        }
    }
    function error(){
        require ('control/errors.php');
        $control = new Errors();
        $control->index();
        exit();
    }
}