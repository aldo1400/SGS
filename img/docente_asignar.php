<?php
$v1 = $_GET['nombre_profesor'];
echo "$v1";
?>

<?php 
	$con= mysqli_connect("localhost","root","","u122483761_dos") or die("error");
	$vs=$_GET('$v1')
	$sumilla="SELECT docente.nombre FROM 'docente' inner join 'dicta' on docente.cod_docente=sdicta.cod_dicente
	inner join 'asignatura' on dicta.cod_asignatura=asignatura.cod_asignatura  WHERE asignatura.nombre='$v1'";
	$resumilla=$con->query($sumilla);
	$row=mysqli_fetch_array($resumilla);
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<title>Asignación</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
		<link rel="stylesheet" href="sumilla.css">
		<script src="jquery.js"></script>
		<script type="text/javascript">
			function openAD(){
				$(".asigna").slideDown("slow");
			}
			function closeAD(){
				$(".asigna").slideUp("fast");
			}
		</script>
</head>

<body>


	<div class="container">
		<div class="asigna">
			<div class="asigna0">
				<a href="javascript:closeAD();" class="cerrar"> X </a>
				<center>
				<h2 style="font-size: 17pt; color: #3374ff">ASIGNACIÓN DE DOCENTE</h2>
				<label>
				<?php while($row=mysqli_fetch_array($resumilla))
					{
						$name=$row["nombre"];
						echo "$name <br>";
				?>
				<input type="checkbox" name="checkbox" id="$name">
				<?php
					}
				?>					
				</label>
				
				</center>
				
				<div style="float:right; margin-right: 4%; margin-top: 2%;">
					<input value="Guardar" align="right" type="submit" name="submit SUMILLA">
				</div>
			</div> 

		</div>
		<h2><a href="JavaScript:openAD();">Agregar</a></h2>
	</div>
</body>
</html>