<?php
function calcula($a,$b){
	
	echo ($a+$b).'<br>';
	echo ($a-$b).'<br>';
	echo ($a*$b).'<br>';
	if($b!=0) echo ($a/$b).'<br>';
}
calcula(3,1);
?>