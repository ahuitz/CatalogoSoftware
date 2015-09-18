<?php

if (isset($_POST['submitted'])){

	include('conexion.php');
	$fname = $_POST['fname'];
	//$lname = $_POST['lname'];
	$sql = "INSERT INTO categorias ( Nombre ) VALUES ('$fname')";
if (!mysqli_query($link,$sql)) {die('error insertando datos');}//final
	$newrecord = "categoria agregada";
}
?>

<html>
<head>
<title>Insertar Categoria</title>
</head>
<body>

<hl>Insertar Datos Categoria<hl>

<form method="post" action="insertar.php">
<input type="hidden" name="submitted" value="true" />
<fieldset>
	<legend>Nueva Categoria</legend>
	<label>Nombre: <input type="text" name="fname"/></label>
</fieldset>
<br />
<input type="submit" value="agregar nueva categoria" />
</form>

<?php 
//echo $newrecord
?>

</body>
</html>