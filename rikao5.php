<?php 
$arr = array(1,2,3,4,5,6);


function reOrderArray($arr){
	$lenght = count($arr);

	for ($i=1; $i < $lenght ; $i++) {
		$target = $arr[$i];
		if($target%2 == 1){
			$j = $i-1;
			while ($j >= 0 && $arr[$j]%2 == 0) {

				$arr[$j+1] = $arr[$j];
				$j--;
			}
			$arr[$j+1] = $target;

		}

	}

	return $arr;
}

$arr2 = reOrderArray($arr);
var_dump($arr2);


 ?>