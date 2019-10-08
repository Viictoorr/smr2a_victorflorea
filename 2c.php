<?php
function calcular(){
	$a=23;
	$b=43;
	$r=null;
	
	$r=$r.($a+$b).'<br>';
	$r=$r.($a-$b).'<br>';
	$r=$r.($a*$b).'<br>';
	$r=$r.($a/$b).'<br>';
	return $r;
}
echo calcular();
$a=calcular();
echo $a;
calcular();
calcular();
?>