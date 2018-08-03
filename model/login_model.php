<?php

class Login_Model extends model {

    public function __construct() {
        parent::__construct();
    }

    public function run() {
        $passportId = security::clean($_POST['passportId']);
        $password = security::clean($_POST['password']);
        if ($passportId == null or $password == null) {
            Session::set("login_error", "One empty fields");
            header('location: ' . URL . 'Login');
        } else {
            $jdb = new Jquerydb();
            $sth = $jdb->jSelectW('users', array("PID" => $passportId, "password" => $password));
            if (count($sth) > 0) {
                Session::set('LoggenIn', true);
                Session::set('UserData', $sth[0]);
				header('Location: ' . URL . 'Home');
            } else {
				Session::set("login_error", "The data is not correct, please check for enter data");
				header('location: ' . URL . 'Login#contactForm');
            }
        }
    }

}
