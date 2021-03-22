<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio1</title>
	<style type="text/css">
		input [type=text], input[type=submit], select{
			text-align:center;
			border-radius: 10px;
			border:1px solid black;
		}
	</style>
</head>
<body>
<?php
	$numero1 = "";
	$numero2 = "";
	$suma = "";
	$mensaje = "";

	if (isset($_POST['subSumar'])) {
		$numero1 = $_POST['txtN1'];
		$numero2 = $_POST['txtN2'];
		if (is_numerio($numero1) && is_numerio($numero2)){
			$suma = $numero1 + $numero2;
		} else {
		$numero1 = "";
		$numero2 = "";
		$suma = "";
		$mensaje = "Datos incorrectos";
		}
	}
?>
<form action="ejercicio1.php" method="POST">
	Numero1: <input type="text" name="txtN1" size="10" value="<php? echo $numero1; ?>"/>
	Numero2: <input type="text" name="txtN2" size="10" value="<php? echo $numero2; ?>"/>
	Resultado: <input type="text" name="txtR" size="10" value="<php? echo $suma; ?>" disabled/>
	Mensaje: <input type="text" name="txtR" size="15" value="<php? echo $mensaje; ?>" disabled/>
	
</form>
</body>
</html>