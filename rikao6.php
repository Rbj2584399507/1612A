<?php 

nm(1,13);

function nm($n,$m){

	$zfc = range($n,$m);
	echo substr_count(join($zfc),'1');
}



 ?>