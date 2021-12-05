<?php
function replaceSpace($str){
		return str_replace(" ", "_", $str);
}
echo replaceSpace("P H P");