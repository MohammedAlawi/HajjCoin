<?php
/*
 * if use multy Language use this class
 * just make file in path (lib/language/)
 */
class Language {
	
	public static function loadLanguage($lang){
		if( isset($_GET['lang']) ){
			$lang = security::clean($_GET['lang']);
			Session::set("lang", $lang);
			setcookie('lang', $lang, time() + (3600 * 24 * 30));
		} elseif( Session::get('lang') ) {
			$lang = Session::get('lang');
		} elseif(isSet($_COOKIE['lang'])) {
			$lang = $_COOKIE['lang'];
		} else {
			$lang = 'en';
		}
		Session::set("lang", $lang);
		switch ($lang) {
			case 'ar': $lang_file = 'arabic.php';break;
			case 'de':$lang_file = 'germany.php';break;
			case 'en':$lang_file = 'english.php';break;
			case 'pt':$lang_file = 'PTBR.php';break;
			case 'ru':$lang_file = 'ru.php';break;
			case 'es':$lang_file = 'es.php';break;
			default: $lang_file = 'english.php';
		}
		
		include_once 'lib/language/'.$lang_file;
	}
}