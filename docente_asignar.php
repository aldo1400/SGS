
<?php

/*para asignar un profesor a un curso, necesito saber el nombre del curso a asignar, por tal motivo desde revisa_docente.php envio el nombre del curso por el metodo get */
$v1 = $_GET['nombre_curso'];
echo "$v1";
?>

<?php 


	include('conexion.php');//CADENA DE CONEXION
	$lista_profesores="SELECT * from docente";
	$lista_curso="SELECT * from asignatura where nomb_asignatura='$v1'";
	
	$lista_profesores2=mysqli_query($con,$lista_profesores);
	
	$lista_curso2=mysqli_query($con,$lista_curso);
	$array_lista_curso2=mysqli_fetch_array($lista_curso2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<title>Asignación</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
		<link rel="stylesheet" href="css/docente_asignar.css">
		<script src="js/jquery.js"></script>
		<script type="text/javascript">
			function openAD(){
				$(".asigna").slideDown("slow");
			}
			function closeAD(){
				$(".asigna").slideUp("fast");
			}
		</script>
		
		
<



</head>

<body>

<!----------------------------------VENTANA EMERGENTE DOCENTE ASIGNAR--------------------------------------->
	<div class="container">
		<div class="asigna">
			<div class="asigna0">
				<a href="javascript:closeAD();" class="cerrar"> X </a>
				<center>
				
				<form action="#" method="post" name="ASIGNACIÓN">
				
				<h2 style="font-size: 17pt; color: #3374ff">ASIGNACIÓN DE DOCENTE</h2>
				<label>
				<?php 
				
				while($row=mysqli_fetch_array($lista_profesores2))
					{
						$name=$row["nombre"];
						echo "<br>$name  ";
				?>
				<input type="checkbox" name="valores[]" value="<?php echo $name?>"  >
				<?php
					}
				?>					
				</label>
				
				</center>
				<button type="submit" name="SUMILLA" class="bouton-contact"  onclick="alert('ASIGNACION CORRECTA')" >Guardar cambios</button>
				
				<!--------	
				<div style="float:right; margin-right: 4%; margin-top: 2%;">
				
				
				<input value="Guardar" align="right" type="submit" name="SUMILLA">
				</div>
				------------>
				</form>

				
				
	<?php
      //En esta zona se asigna al profesor un curso y se guarda esa asignacion en la tabla dicta
	  if(isset($_POST['SUMILLA']))
	  {
        $name=$_POST['valores'];
		echo $name[0];//el array solo esta lleno con la cantidad que haya seleccionado, en mi caso yo solo selecciono uno por eso pongo el[0]
		
		include('conexion.php');//CADENA DE CONEXION
		$nombre_profesor="SELECT * from docente where nombre='$name[0]'";
		
		$nombre_profesor2=mysqli_query($con,$nombre_profesor);
		$array_codigo_profesor=mysqli_fetch_array($nombre_profesor2);
	
		$codigo_profesor=$array_codigo_profesor['Cod_docente'];
		echo $codigo_profesor;
		$fecha=strftime( "%Y-%m-%d-%H-%M-%S", time() );
        $codigo_curso=$array_lista_curso2['cod_asignatura'];
        echo $codigo_curso;
		
        $insertar="INSERT INTO dicta(Cod_docente,cod_asignatura,fecha_dic)
         VALUES('$codigo_profesor','$codigo_curso','$fecha')";
        $ejecutar_insertar = mysqli_query($con,$insertar);
		}
?>


			</div> 
			



		</div>
		<h2><a href="JavaScript:openAD();">Agregar</a></h2>
	</div>
	
	<!----------------------------------FIN DE VENTANA EMERGENTE DOCENTE ASIGNAR--------------------------------------->
	
	
</body>
</html>