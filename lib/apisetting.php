<?php

class APISetting {

    public static function fix_spaces($string) {
        return trim(preg_replace('/\s+/', '', $string));
    }
    
    public static function delete_between($one,$tow,$string) {
        return preg_replace('/'.$one.'[\s\S]+?'.$tow.'/', '',$string);
    }

}
