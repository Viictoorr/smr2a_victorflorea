<a href="http://192.168.0.173/smr2a-VCR/smr2a.php">Victor Cabo</a>

Victor Florea ¯\_(ツ)_/¯

<?php
$f=fopen('visitas.txt','a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>

<a href="http://192.168.0.104/smr2a-Gabriel/smr2a.php">Gabi</a>