<?php
function calcula($a){
	
			$r='Sobresaliente';
		if($a<8.5)
			$r='Notable';
		if($a<7)
			$r='Aprobado';
		if($a<5)
			$r='Pendiente';
	return 	$r;
	

}

echo calcula(9);

?>