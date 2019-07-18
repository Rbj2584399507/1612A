<?php 	

$str = "1 3 4";

function ReverseSentence($str){
	$arr = explode(" ",$str);
	krsort($arr);
	$arr = implode(" ",$arr);
	return $arr;
}

print_r(ReverseSentence($str));


 ?>