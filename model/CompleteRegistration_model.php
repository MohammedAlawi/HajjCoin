<?php

class CompleteRegistration_Model extends model {

    public function __construct() {
        parent::__construct();
    }
	
    public function Code($code) {
        $code = security::clean($code);
        $jdb = new Jquerydb();
		$code2 = explode("|", base64_decode($code));
		$PID = $code2[0];
		$date = date('Y-m-d', $code2[1]);
		$checkFroGovrment = $jdb->jSelectW('people', array( "PID" => $PID, "dateBirth" => $date )); // get data from the goverment to check the Hajj aleredy register at Database
        if (count($checkFroGovrment) > 0) {
			Session::set("code_completeregister", $code);
			Session::set("PID_completeregister", $code2[0]);
			$view = new view();
			$view->openViw('completeregister/complete', true);        
		} else {
            header('location: ' . URL . 'Home');
        }
    }

    public function confirm() {
        $code = Session::get("code_completeregister");
        $passportId = Session::get("PID_completeregister");
        $password = security::clean($_POST['password']);
		$repassword = security::clean($_POST['re_password']);
		$email = security::clean($_POST['email']);
        if ($passportId == null or $password == null or $repassword == null) {
            Session::set("confirmreg_error", "One empty filds");
            header('location: ' . URL . 'CompleteRegistration/code/' . $code);
		}elseif ($repassword != $password) {
            Session::set("confirmreg_error", "Tow Password not match!");
            header('location: ' . URL . 'CompleteRegistration/code/' . $code);
        } else {
			$jdb = new Jquerydb();
			$checkFroGovrment = $jdb->jSelectW('people', array("PID" => $passportId)); // get data from the goverment to check the Hajj aleredy register at Database			
			$check = $jdb->jSelectW('users', array("PID" => $passportId));
			if (count($check) == 0 ) {
				$insert = $jdb->jInsert("users", array("PID" => $checkFroGovrment[0]['PID'], "fullName" => $checkFroGovrment[0]['name'], "email" => $email, "password" => $password, "dateRegister" => date('Y-m-d'), "type" => "personal" ));
				if (count($insert) > 0) {
					
					Session::set("success_register", 'Your account has been successfully registered, Now you can Sign in to account');
					header('location: ' . URL . 'Login');
					
					/** Send success message to E-mail **/
					/*
						$Semail = new Email();
						$send = $Semail->Send($email, 'Your account has been successfully registered', 'Thank You For registertion in Hajj Coin');
						if ($send) {
							Session::set("success_register", 'Your account has been successfully registered, Now you can Sign in to account');
							header('location: ' . URL . 'Login');
						} else {
							Session::set("confirmreg_error", "Error When Register(Email), please contact with suport");
							header('location: ' . URL . 'CompleteRegistration/code/' . $code);
						}
					*/
				} else {
					Session::set("confirmreg_error", "Error When Register, please contact with suport");
					header('location: ' . URL . 'CompleteRegistration/code/' . $code);
				}
			} else {
				Session::set("success_register", 'You can Log in :) ');
				header('location: ' . URL . 'Login');
			}
        }
    }

}
