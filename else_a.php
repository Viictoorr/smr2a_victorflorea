<?php
function calcula($d){
	
	if ($d > 5) {
			echo "Apto";
	}
	elseif ($d == 5) {
			echo "Apto";
	}
	else{
			echo "No Apto";
	}
}

calcula(9);
?>