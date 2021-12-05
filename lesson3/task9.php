<?php
function translit($str){
	$converter = [
		"а" => "a", 	"б" => "b", 	"в" => "v", 	"г" => "g",
		"д" => "d", 	"е" => "e", 	"ж" => "zh",	"з" => "z",
		"и" => "i", 	"й" => "y", 	"k" => "k", 	"л" => "l",
		"м" => "m", 	"н" => "n", 	"о" => "o", 	"п" => "p",
		"р" => "r", 	"с" => "s", 	"т" => "t", 	"у" => "y",
		"ф" => "f", 	"х" => "h", 	"ц" => "x", 	"ч" => "ch",
		"ш" => "sh",	"щ" => "sht", 	"ь" => "\'", 	"ы" => "y",
		"ъ" => "\'", 	"э" => "e", 	"ю" => "yu", 	"я" => "ya"
	];	
	return strtr(mb_strtolower($str), $converter);
}
	function replaceSpace($str){
		return str_replace(" ", "_", $str);
}
        function trs($text) {
            return replaceSpace (translit($text));
        }

        echo trs("как ваше ничего");