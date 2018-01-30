<html>
<head>
	<script >
		function Validar() {
			sexo = ficha.sexo.value;
			btnEnviar = ficha.btnEnviar;
			if (sexo == "") {
				alert('Datos incorrectos');
				btnEnviar.hidden = true;
			} else{
				alert('Datos correctos');
				btnEnviar.hidden = false;
			}
	}
	</script>
</head>
<body>
<form name="ficha" action="captura.php" method="post">
<label>Fecha:</label>
<input type="text" name="fecha" required value="2017-10-20" readonly="readonly" /><br></br>
<label>Nombre:</label>
<input type="text" name="nombre_persona" required="true" /><br></br>
<label>Apellido:</label>
<input type="text" name="apellido_persona" value="Perez" required="required" /><br></br>
<input type="radio" value="1" name="sexo">Femenino
<input type="radio" value="2" name="sexo">Masculino <br></br>
<input type="checkbox" name="activo">Usuario activo <br></br>
<input type="button" value="Validar Datos" onclick= "Validar()" />
<input type="submit" name = "btnEnviar" hidden="hidden" />

</form>
</body>
</html>

<?php
require 'conexion.php';
//guardar los datos
// usuario, contraseña, host, base de datos, (puerto)


$sql = "SELECT * FROM personas";
$result = $mysqli->query($sql);
?>
<table border="1px">
	<tr>
		<td>
			corr
		</td>
		<td>
			Nombre
		</td>
		<td>
			Sexo
		</td>
		<td>
			Activo
		</td>
	</tr>
<?php
$i=0;
foreach ($result as $key => $row) { 
	$i++;
	?>
	<tr>
		<td>
			<?php print $i; ?>
		</td>
		<td>
			<?php print $row['nombre_persona'].' '.$row['apellido_persona']; ?>
		</td>
		<td>
			<?php 
				if ($row ['sexo'] == 1) {
					print "Femenino";
				} else {
					print "Masculino";
				} 	
					?> 
		</td>
		<td>
			<?php
			if ($row ['activo'] == 0) {
				print "No";
			} else {
				print "Si";
			}
			?>
		</td>


	</tr>
<?php
}
?>
</table>



