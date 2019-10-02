<?php
if(isset($_GET['correo'])){
	$f=fopen('Suscriptores.txt','a');
	fwrite($f,$_GET['correo']."\r\n");
	fclose($f);
}
?>

<html>
	<h1>
	<center><a href="http://localhost/smr2a_VictorFlorea/catalogo.php">Lista GitHub</a><center>
	</h1>
	</html>

<html>
	<body>
	<form>
	<center>Email:<center>
	<center><input type="email" name="correo"><br><center>
	<center><button>Enviar</button><center>
	</form>
	</body>
</html>

<?php
$f=fopen('visitas.txt','a');
	fwrite($f,date('Y-m-d H:i:s '));
	fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
	fclose($f)
?>
<a href="http://192.168.0.173/smr2a-VCR/smr2a.php">Victor Cabo</a>

Victor Florea ¯\_(ツ)_/¯

<a href="http://192.168.0.104/smr2a-Gabriel/smr2a.php">Gabi</a>