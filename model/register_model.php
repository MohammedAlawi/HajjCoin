<?php

class Register_Model extends model {

    public function __construct() {
        parent::__construct();
    }
	
    public function run() {
        $passportId = security::clean($_POST['passportId']);
        $dateBirth = $_POST['dateBirth'];
        if ($passportId == null	or $dateBirth == null) {
            Session::set("register_error", "One empty fields");
            header('location: ' . URL . 'Register#contactForm');
        } else {
			$jdb = new Jquerydb();
			$check = $jdb->jSelectW('users', array("PID" => $passportId));
			if (count($check) == 0 ) {
				$checkFroGovrment = $jdb->jSelectW('people', array("PID" => $passportId, "dateBirth"=> $dateBirth)); // get data from the goverment to check the Hajj aleredy register at Database
				if (count($checkFroGovrment) > 0 ) {
					$data = base64_encode($passportId.'|'.strtotime($dateBirth));
					header('location: ' . URL . 'CompleteRegistration/code/'.$data.'/#contactForm');
				} else {
					Session::set("register_error", "The Hajj Information not exist at database, please check enter the data");
					header('location: '. URL .'Register#contactForm');
				}
			} else {
				Session::set("register_error", "This Account aleredy registerd!");
				header('location: ' . URL . 'Register#contactForm');
			}
        }
    }

}
