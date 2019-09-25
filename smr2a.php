Victor Florea ¯\_(ツ)_/¯

<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>

<a href="http://192.168.0.104/smr2a_ADRIAN/smr2a.php">Adri</a>