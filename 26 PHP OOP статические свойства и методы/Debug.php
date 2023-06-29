<?php

$newArr = [1,2,3,4,5,6];

class Debug
{
	public static function d($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}

	public static function dd($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
		die();
	}
}

//Debug::d($newArr);
Debug::dd($newArr);
echo 'hello';