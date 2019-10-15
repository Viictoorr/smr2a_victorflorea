<?php
$meses=[
		"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"
];
	for($j=0;$j<12;$j++)
		echo $meses[$j].'<br>';
	
	foreach ($meses as $f)
		echo $f.'<br>';

	function mes($n)
	{
		$meses=[
		"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"
];
		return $meses[$n-1];
	}
	
$m = mes(4);
	
	echo $m;
?>