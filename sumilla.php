<?php
$vs = $_GET['nombre_curso'];
echo "$vs";
?>


<?php 
	$con= mysqli_connect("localhost","u122483761_esis","123456","u122483761_dos") or die("error");
	

	$muestra="SELECT sumilla, silabo.cod_silabo FROM silabo inner join usa on silabo.cod_silabo=usa.cod_silabo inner join asignatura on 
	usa.cod_asignatura=asignatura.cod_asignatura WHERE asignatura.nomb_asignatura='$vs'";
	$sum1=$con->query($muestra);
	$row1=mysqli_fetch_array($sum1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<title>Sumilla</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
		<link rel="stylesheet" href="css/sumilla.css">
		<script src="js/jquery.js"></script>
		<script type="text/javascript">
		
			
			function openSumilla(){
				$(".sumilla").slideDown("slow");
			}
			function closeSumilla(){
				$(".sumilla").slideUp("fast");
			}
		</script>
</head>

<body>
	<div class="container">
		<div class="sumilla">
			<div class="sumilla1">
				<a href="javascript:closeSumilla();" class="cerrar"> X </a>
				<center>
				<h2 style="font-size: 17pt; color: #3374ff">SUMILLA</h2>
				<form method="post" action="#">
					<textarea name="sumG" class="size" style="padding: 8px; border-radius: 5px; border: 1px solid #666666; font-size:10pt" rows="10" cols="40">

					<?php echo $row1["sumilla"]?>
					</textarea>
				
				</center>
				<button type="submit" name="sumilla_enviar" class="bouton-contact" onclick="alert('SUMILLA ACTUALIZADA')" >Guardar cambios</button>
				<!-----------
				<div style="float:right; margin-right: 4%; margin-top: 2%;">
					<input value="Guardar" align="right" type="button" name="sumilla_enviar" />
				</div>
				----->
				</form>
				
	<?php			
if(isset($_POST['sumilla_enviar']))
{
        $con= mysqli_connect("localhost","u122483761_esis","123456","u122483761_dos") or die("error");
		$nueva_sumilla=$_POST["sumG"];
		echo $nueva_sumilla;
		$cod_silabo=$row1["cod_silabo"];
		echo $cod_silabo;
		$actualizar="UPDATE silabo set sumilla='$nueva_sumilla'
          where cod_silabo='$cod_silabo'";
		
		
		$ejecutar3=mysqli_query($con,$actualizar);
  
      }
	  
	  ?>
				
				
			</div> 

		</div>
		<h2><a href="JavaScript:openSumilla();">Agregar</a></h2>
	</div>
</body>
</html>

