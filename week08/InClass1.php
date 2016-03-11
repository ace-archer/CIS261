<?php
$arr_name=array("Name1","Name2","Name3","Name4");

print_arr($arr_name);


function print_arr($pArray){
	foreach($pArray as $key => $arrVal){
		echo "[$key] = $arrVal </br>";
	}
}
?>

