<?php

class Contact_Model extends model {

    public function __construct() {
        parent::__construct();
    }

    public function run() {
        $name = security::clean($_POST['name']);
        $email = security::clean($_POST['email']);
        $phone = security::clean($_POST['phone']);
        $message = security::clean($_POST['message']);
		$time = date('Y-m-d H:i:s');
		if ($name == null or $email == null or $phone == null or $message == null ) {
			Session::set("contact_error", "One empty filds");
            header('location: ' . URL . 'Contact');
        } elseif (!security::checkEmail($email)) {
            Session::set("contact_error", "error_email");
            header('location: ' . URL . 'Contact');
        } else {
			
			$jdb = new Jquerydb();
			$insert = $jdb->jInsert("contact", array("name"=> $name, "email" => $email, "phone" => $phone, "message" => $message) );
			if (count($insert) > 0) {
				header('location: ' . URL . 'Contact/Success');
			} else {
				Session::set("contact_error", "error_error");
				header('location: ' . URL . 'Contact');
			}
		}
    }

}
