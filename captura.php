<?php
require 'conexion.php';

print "hola ".$_POST['nombre_persona']." tu registro fue guardado ";

if ($_POST['activo'] == "on") {
	$activo = 1;
} else {
	$activo = 0;
}

//guardar los datos
// usuario, contraseña, host, base de datos, (puerto)


$sql = "INSERT INTO personas(fecha, nombre_persona, apellido_persona, sexo, activo) VALUES ('$_POST[fecha]','$_POST[nombre_persona]','$_POST[apellido_persona]','$_POST[sexo]', $activo)";
$mysqli->query($sql);

?>



<form action="default.php">
	<input type="submit" value="Ingresar otro registro">
</form>