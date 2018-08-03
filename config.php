<?php
ini_set('display_errors', 1);

date_default_timezone_set('Asia/Kuwait');

/*
 * Database Setting
 */
define('URL', 'http://127.0.0.1/Project/');
//define('URL', 'http://51.254.214.52:49587/');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'Hajj_Coin');
define('DB_USER', 'root');
define('DB_PASS', 'toor');

/*
 * Register Setting
 */
 //		icloud added by Hassan
const BLOCK_EMAIL = array('hotmail', 'gmail', 'yahoo', 'outlook', 'windowslive', 'mail', 'icloud') ;


/*
 * Eamil Setting
 */
define("EMAIL_HOST_SMTP", 'smtp.gmail.com');      // SMTP Server
define("EMAIL_USERNAME", 'hajjcoin2018@gmail.com');  // SMTP username
define("EMAIL_PASSWORD", 'mea2481963');     // SMTP password
define("EMAIL_FROM_EMAIL", 'hajjcoin2018@gmail.com');  // From Email
define("EMAIL_FROM_NAME", 'Team-P-058-Hajj_Coin');      // From Name
define("EMAIL_REPLYTO_EMAIL", 'hajjcoin2018@gmail.com');  // Reply to (Email)
define("EMAIL_REPLYTO_NAME", 'Team-P-058-Hajj_Coin');      // Reply to (NAme)
define("EMAIL_COPY_EMAIL_CC", '');      // Copy Email
define("EMAIL_COPY_EMAIL_BCC", '');      // Copy Email Hidden   


/*
 * salt password to mysql , dont change that
 */
define("HASH_PASSWORD_KEY", 'Hajj_Hackathon_2018');