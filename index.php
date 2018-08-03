<?php
require 'config.php';
function __autoload($class){
	require ('lib/'.$class.'.php');
}
Session::init();

//if use multy Language use this
//Language::loadLanguage(@$_GET['lang']);

ob_start();
$app = new Boots();

ob_end_flush();