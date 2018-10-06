
<?php

session_start();
session_name('permiso');

if(!$_SESSION)
{
header("location:index.php");

}

// $nombre_docente_verificado=$_SESSION['nombre_doc'];


?>


<!DOCTYPE html>
<html charset="utf-8">
<?php

include('conexion.php');//en este archivo se encuentra la cadena de conexion
$id_asig13=$_GET["nombre_asig"];
$id_asig=$_GET["nombre_asig"];



?>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Universidad Nacional -   JORGE BASADRE GROHMANN</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link type="text/css" href="./css/admin.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/input_silabo.css">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

<style>
body {
    font-family: 'Roboto';font-size: 16px;
}
</style>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


 <!--------------título de la pagina------------------->
<style>
 .brand {
    display: inherit;
    margin: 0;
    padding: 30px 0 10px;
    text-align: center;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    font-family: "Josefin Slab","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 3em;
    font-weight: 700;
    line-height: normal;
    color: #fff;
	}
</style>
    <div class="brand"><img src="img/logounjbg.png" width="100" height="100">UNJBG</div>
    <div class="address-bar">Sistema de acceso para editar silabos</div>


	<!-----------------MENU DE NAVEGACION HOME, NOTICIAS BLOG CONTACTANOS--------------------------------->

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <?php

// session_start();
// session_name('permiso');

if(!$_SESSION)
{
?>
						<a class="navbar-brand" href="index.php">unjbg</a>


<?php
}
else
{

// if(!$_SESSION['nombre_docente'])
if(!isset($_SESSION['nombre_docente']))
{
$nombre_docente_verificado=$_SESSION['nombre_doc'];
?>
						<a class="navbar-brand" href="docente.php?nombre_doc=<?php echo $nombre_docente_verificado ?>"><?php echo $nombre_docente_verificado ?></a>


<?php
}
else
{
$nombre_admin=$_SESSION['nombre_docente'];
$nombre_docente_verificado=$_SESSION['nombre_docente'];
?>

					<a class="navbar-brand" href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?>"><?php echo $nombre_admin ?></a>




<?php
}

}
?>

<script>

$('#bs-example-navbar-collapse-1 li a').on('click', function(){
    $('li a.activo').removeClass('activo');
    $(this).addClass('activo');
});

</script>

<style>
.activo {
    text-decoration: underline;
    background-color: rgba(123, 129, 129,0.6);
}
</style>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php

// session_start();
// session_name('permiso');

if(!$_SESSION)
{
?>
<li>
                        <a href="index.php">Inicio</a>
                    </li>
<?php
}
else
{

// if(!$_SESSION['nombre_docente'])
if(!isset($_SESSION['nombre_docente']))
{
$nombre_docente_verificado=$_SESSION['nombre_doc'];
?>
					<li>
                        <a href="docente.php?nombre_doc=<?php echo $nombre_docente_verificado ?>">Perfil</a>
                    </li>
<?php
}
else
{
$nombre_admin=$_SESSION['nombre_docente'];

$nombre_docente_verificado=$_SESSION['nombre_docente'];
?>

					<li>
                        <a href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?>">Perfil</a>
                    </li>

<?php
}

}
?>

                    <li>
                        <a class="activo" href="silabo_crear1.php?nombre_asig=<?php echo $id_asig13 ?>">Mi sílabo</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="contact.php">Contáctanos</a>
                    </li>
					<li>
                        <a href="silabo.php">Sílabos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<!-----------------FIN DE NAVEGACION HOME, NOTICIAS BLOG CONTACTANOS--------------------------------->




    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-left">



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>


<!----------------------EN ESTA PARTE MUESTRO LOS DATOS DEL ADMINISTRADOR QUE ES EXTRAIDO DE LA BASE DE DATOS ---------------------------->


<style>
body{font: 14px "Open Sans", serif; background-color: #fdfdfd; float: left; height: 100%; position: relative; width: 100%;}

*{margin: 0; padding: 0; box-sizing: border-box;}
a{text-decoration: none;}
li{list-style: none;}
h2{font-size: 24px; font-weight: 600; margin-bottom: 20px;}

.container{margin: 0 auto; max-width: 900px;}

.row{float: left; width: 100%;}
/* accordion css */
.accordions{padding: 20px 0;}
.accordions li{padding: 6px 0 6px 22px;}
.accordion-Heading {font-size: 18px; text-transform: uppercase; color: #333; position: relative; padding: 0 10px; font-weight: 600; cursor: pointer;}
.accordion-Heading span{position: absolute; width: 22px; text-align: center; height: 22px; border: 1px solid #333; border-radius: 50%; left: -22px; top: 1px;}
.accordion-Heading i.acc-minus{background-color: #333; height: 3px; transition: 0.3s; left: 5px; margin-top: 8px; position: absolute; vertical-align: top; width: 11px;}
.accordion-Heading i.acc-minus.close{transition: 0.3s; margin-top: 5px; top: 3px; z-index: -1; transform: rotate(90deg); -webkit-transform: rotate(90deg); -moz-transform: rotate(90deg); -ms-transform: rotate(90deg);}
.acc-description{display: none; padding: 0 10px;}
.acc-description p{font-size: 13px; line-height: 22px; margin-top: 15px;}
.acc-description p:first-child{margin-top: 0;}
/* accordion css */

</style>

<?php

include('conexion.php');
$sql_primero="select * from asignatura where cod_asignatura='$id_asig'";
$consulta=mysqli_query($con,$sql_primero);
$DATOS_ASIGNA=mysqli_fetch_array($consulta);
$id_asignatura=$DATOS_ASIGNA['cod_asignatura'];
 //ESTAMOS ENVIANDO PARA REPORTAR CON ESTE DATO!!!!!!!!esta aprte fue donde te quedaste

?>

<div class="pull-right">
<a href="logout.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a>
</div>


<div class="pull-left">
<a href="curso_docente.php?nombre_asig=<?php echo $id_asignatura ?>" class="btn btn-info btn-lg" >ATRÁS</a>

</div>

<style>
.alert-danger{

width:60%;
position:relative;
right:-100px;
margin:0px;
padding:0px;
text-align: justify
}
</style>
<div class="alert alert-danger">
  <strong>Alerta!</strong> En caso quiera retroceder recomendamos usar el botón ATRÁS para evitar problemas de envío de formulario
</div>	  


<div class="container">
    <ul class="accordionsrdions on-clicks row"><!--esta parte es lo del modal-->


    	<li>
        	<h3 style="text-transform:none;font-family:Roboto;"><!--class="accordion-Heading" href="javascript: void(0);"><span><i class="acc-minus close"></i><i class="acc-minus"></i></span>-->I. Datos generales</h3>
		 <table style="position: relative;" border="0" align="center">
       <tr>

          <td > 1.1 Facultad: </td>
          <td><input name="facultad" type="text" size="35" maxlength="35" value="<?php echo $DATOS_ASIGNA['facultad'];?>" disabled>

       </tr>

       <tr>

        <td >1.2 Escuela: </td>
        <td><input name="escuela" type="text" size="35" maxlength="35" value="<?php echo $DATOS_ASIGNA['escuela'];?>" disabled>

      </tr>

      <tr>
         <td > 1.3 Asignatura: </td>
         <td><input name="asignatura" type="text" size="35" maxlength="35"value="<?php echo $DATOS_ASIGNA['nomb_asignatura'];?>" disabled>

      </tr>

    <tr>
       <td> 1.4 Código: </td>
       <td><input name="codigo" type="text" size="35" maxlength="35"  value="<?php echo $DATOS_ASIGNA['cod_asignatura'];?>" disabled>

    </tr>

     <tr>
         <td> 1.5 Pre-requisito:  </td>
         <td><input name="pre-requisito" type="text" size="35" maxlength="35"value="<?php echo $DATOS_ASIGNA['pre_requisito'];?>" disabled>
    </tr>

	  <tr>
         <td> 1.6 Ciclo académico:  </td>
         <td><input name="ciclo" type="text" size="35" maxlength="35"value="<?php echo $DATOS_ASIGNA['ciclo_academico'];?>" disabled>
    </tr>

   </table>

   <table style="position: relative; float: right; bottom: 330px" border="0" align="center">

    <tr>
         <td> 1.7 Semestre académico:  </td>
         <td><input name="semestre" type="text" size="35" maxlength="35"value="<?php echo $DATOS_ASIGNA['semestre_academico'];?>" disabled>
    </tr>
   <tr>
         <td> 1.8 Horas semanales:  </td>
         <?php $horas_semanales=$DATOS_ASIGNA['horas_teoria']+$DATOS_ASIGNA['horas_practica']+$DATOS_ASIGNA['horas_laboratorio'];
     ?>

         <td><input name="horas" type="text" size="35" maxlength="35" value="<?php echo $horas_semanales;?>" disabled>
    </tr>

   <tr>
         <td> 1.9 Créditos:  </td>
         <td><input name="creditos" type="text" size="35" maxlength="35"value="<?php echo $DATOS_ASIGNA['nro_creditos'];?>" disabled>
    </tr>


    <?php include('conexion.php');
    $sql_segundo="select * from docente where Cod_docente='$nombre_docente_verificado'";
    $consultar=mysqli_query($con,$sql_segundo);
    $DATOS_TEACHER=mysqli_fetch_array($consultar); 
	
	$grado_teacher=utf8_decode($DATOS_TEACHER['grado_academico']);

switch ($grado_teacher) 
{
case "magister":
	$grado_teacher='Mg.';
	break;
case "Magister":
	$grado_teacher='Mg.';
	break;
case "doctor":
	$grado_teacher='Dr.';
	break;
case "Doctor":
	$grado_teacher='Dr.';
	break;
case "bachiller":
	$grado_teacher='Bach.';
	break;
	
	case "Bachiller":
	$grado_teacher='Bach.';
	break;

}
	?>

   <tr>
         <td> 1.10 Docente:  </td>
         <td><input name="docente" type="text" size="35" maxlength="35"value="<?php echo $grado_teacher." ".$DATOS_TEACHER['nombre']." ".$DATOS_TEACHER['apellido'];?>" disabled>
    </tr>

   <tr>
         <td> 1.11 Email:  </td>
         <td><input name="email" type="text" size="35" maxlength="35"value="<?php echo $DATOS_TEACHER['email'];?>" disabled>
    </tr>

   </table>


            <!--</div>-->
        </li>
        <li>
        	<h3 style="text-transform:none;font-family:Roboto;">II. Sumilla</h3>

  <div style="position: absolute;" class="form-group">
      <textarea  id="Field4" name="Field4" style="width: 800px; height: 300px; resize:none;" disabled><?php echo  $DATOS_ASIGNA['sumilla'];?> </textarea>
    </div>

        </li>
        <li>

<?php
  ?>
<div style="position: relative; top: 330px;" id="formulario2">
<form style="width:450px; float: left; height: 90px" action="silabo_crear1.php?nombre_asig=<?php echo $id_asignatura ?>& nombre_doc=<?php echo $nombre_docente_verificado ?>" method="POST">
	Número de unidades:<br>
 <input style="width: 250px; position: relative; left: 5px;top: 15px" maxlength="2" type="text" name="unidades" placeholder="Ingrese el número de unidades" required pattern="[0-9]*" required/><br><br>

    <input style="position: relative; left: 30px; width: 150px; bottom: 25px" type="submit" name="generar" value="Generar" class="btn btn-success"><br>


</form>
<div>
<style type="text/css">
#formulario2 {  width:300px; float:letf;}
</style>
<?php
  if(isset($_POST["generar"]))
  {?>
<!--aqui hacemos para generar el numero de semanas por unidad-->
<div <div id="formulario">
<form style="width:700px; float:left;" action="silabo_crear1.php?nombre_asig=<?php echo $id_asignatura ?>& nombre_doc=<?php echo $nombre_docente_verificado ?>" method="POST">
<?php
  $uni=$_POST['unidades'];
  ?><input type="hidden" name="uni" value="<?php echo $uni?>">
  <?php
  echo "Ingresar el número de semanas por unidad:<br><br>";
  echo '<table  style="position: relative; left: 5px;  " WIDTH=500 align:"right"  border="2px">
  <tr>
    <td WIDTH=100><center>Unidad</center></td>
    <td  WIDTH=400><center>Número de semanas</center></td>
  </tr>';
  for($n=0;$n<$uni;$n++)
  {
  echo '<tr>
    <td WIDTH=100>Unidad '.($n+1).'</td>
    <td WIDTH=400 ><textarea name="semana'.($n).'" maxlength="2" placeholder="Número de semanas por unidad"  style="width: 300px;  resize:none; height: 25px;" required/></textarea></td>
  </tr>';
  }
  echo '</table>';

//probaremos

  ?><input style="position: relative; left: 525px; width: 150px; bottom: 80px" type="submit" name="mostrar" value="Generar" class="btn btn-success" onclick="location.href='silabo_crear1.php';"><br>
  
  <a href="<?php $_SERVER["HTTP_REFERER"]?>" class="btn btn-info btn-lg" >ATRÁS</a>

<?php
}

  ?>

</form>
</div>
<style type="text/css">
#formulario {  width:300px; float:letf;}
</style>

<div id="formulario1">
<form  target="_blank" action="for.php?nombre_asig=<?php echo $id_asignatura ?>& nombre_doc=<?php echo $nombre_docente_verificado ?>& " method="POST" iname="add_name" id="add_name" style="width: 1000px;">

<?php
if(isset($_POST["mostrar"]))
{
    //en esta parte del codigo es para enviar las competencias de una manera XD!
?>

<h3 style="text-transform:none;font-family:Roboto;" >III. Competencias de las asignatura</h3>


        <div class="form-group">
<label class="LABEL-pe" for="compe">3.1 Competencias :</label><br>
</div >
<table width="100" class="table table-bordered" id="compe">
     <tr>
          <td><input size="70" type="text" name="compe[]" placeholder="Ingrese las competencias" class="form-control name_list" /></td>
          <td><button type="button" name="ayuda" id="ayuda" class="btn btn-success">Añadir más</button></td>
     </tr>
</table>
<script>
$(document).ready(function(){
     var i=1;
     $('#ayuda').click(function(){
          i++;
          $('#compe').append('<tr id="row'+i+'"><td><input type="text" name="compe[]" placeholder="Ingrese las competencias" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
     });
     $(document).on('click', '.btn_remove', function(){
          var button_id = $(this).attr("id");
          $('#row'+button_id+'').remove();
     });
     $('#reporte').click(function(){
          $.ajax({
               url:"for.php",
               method:"POST",
               data:$('#add_name').serialize(),
               success:function(data)
               {
                    alert(data);
                    $('#add_name')[0].reset();
               }
          });
     });
});
</script>

<?php  include('conexion.php');
$q_competencia_asig="select * from competencia_asignatura ca inner join banco_competencia bc on ca.cod_competencia=bc.cod_competencia where cod_asignatura=$id_asig";
$e_competencia_asig=mysqli_query($con,$q_competencia_asig);
echo "<br>";?>
<div class="alert alert-success">
  <strong>Aviso!</strong> Competencias sugeridas.(Puede copiar y pegar)
</div>

<style>
.size {
  border-radius: 0px 5px 5px 0px;
  border: 1px solid #EEE;
  margin: 0;
  width: 98%;
  height: 230px;
  float: left;
  padding: 0px 15px;
}
</style>
<?php
echo'<textarea name="sumG" class="size"  rows="60" cols="60" disabled>';

    while($a_competencia_asig=mysqli_fetch_array($e_competencia_asig))
    {

     echo $a_competencia_asig["competencia"];
     echo "\n\n";
    }

echo '</textarea>';
?>
<br><br><br><br><br>
<br><br><br>
<br><br><br>

<br><br><h3 style="text-transform:none;" >IV. Unidades didácticas</h3>

  <?php $uni2=$_POST['uni'];
  ?>

  <?php echo '<input type="hidden" name="uni2" value="'.$uni2.'">';?>
  <?php
  $i=0;
  $z=0;//para cambiar el id de cada concepto o contenido por semema
  while($i<$uni2)
  {
    echo "<br>4.".($i+1).": UNIDAD ".($i+1);
  	echo "";

    echo "<br><br>4.".($i+1).".1:\nCONTENIDO <br>";
    $sem[$i]=$_POST['semana'.($i).''];?>
    <?php echo '<input type="hidden" name="sema'.($i).'" value="'.$sem[$i].'">';?>

       <?php
       echo '<table border="2px" style="text-align: center;">
           <tr>
           <td colspan="3">Unidad número '.($i+1).'</td></tr>
           <tr>
           <td colspan="3">Título<br><textarea name="titulo'.($i).'" style="width: 640px; resize:none; height: 30px;"></textarea></td></tr>
           <tr><td id="semanaTitulo" style="width: 100px; height: 20px;">Semana</td>
           <td colspan="2" style="width: 500px; height: 20px;">Contenido</td></tr></table>';
        for($m=0;$m<$sem[$i];$m++){
        //if($m==0){
          echo '<table border="2px" style="font-family: Arial; text-align: center; font-size: 8pt;">
        <tr>
            <td rowspan="2" style="width: 100px;">'.($z+1).'</td>
            <td style="width: 140px; height: 100px;">Conceptual</td>
            <td><p><textarea name="conceptual'.($z).'" style="line-height: 1.2;width: 400px;resize:none; height: 100px;" id="semanaConceptual'.($m+1).'"></textarea></td>
        </tr>
        <tr>
            <td style="width: 140px; height: 100px;">Procedimental</td>
            <td><p><textarea name="procedimental'.($z).'" style="line-height: 1.2;width: 400px; resize:none; height: 100px;"></textarea></td>
        </tr>

    </table>';
    $z++;
  }

    echo "<br><br>4.".($i+1).".2:\n";
    echo 'ACTIVIDADES Y ESTRATEGIAS DIDÁCTICAS: <br>';
    echo '<br><table border="2px" style="font-family: Arial; font-size: 8pt; text-align: center;">

  <tr>
      <td style="width: 200px; height: 30px;">Actividades</td>
      <td style="width: 400px; height: 30px;">Estrategias Didácticas</td>
  </tr>
  <tr>
      <td><p><textarea name="actividad'.($i).'"  style="line-height: 1.2;width: 200px; resize:none; height: 200px;"></textarea></td>
      <td><p><textarea name="estrategia'.($i).'" style="line-height: 1.2;width: 400px; resize:none; height: 200px;"></textarea></td>
  </tr>

  </table>';

  /*mostrar evaluaciones*/

    echo "<br><br>"; ?>

   <div class="alert alert-success">
  <strong>Aviso!</strong> Estrategias sugeridas.(Puede copiar y pegar)
</div>
   <?php

			include("conexion.php");
			$q_extraer_estrategias="select * from banco_estrategia";
			$e_extraer_estrategias=mysqli_query($con,$q_extraer_estrategias);

			echo'<textarea name="sumG" class="size"  rows="40" cols="40" disabled>';

			while($a_extraer_estrategias=mysqli_fetch_array($e_extraer_estrategias))
			{

			 echo $a_extraer_estrategias["estrategia"]."\n";



			}

			echo '</textarea>';

  echo "<br><br><br><br><br><br><br><br><br><br>";
  /*fin mostrar evaluaciones*/

  echo "<br><br><br><br>4.".($i+1).".3:\n";
  echo 'EVALUACIÓN DE LOS LOGROS DE APRENDIZAJE: <br>';
  echo '<br><table border="2px" size="11" style="font-family: Arial; font-size: 8pt; text-align: center;">

<tr>
    <td style="width: 60px; height: 30px;">Ponderación
    de la Unidad</td>
    <td style="width: 150px; height: 30px;">Criterios de Evaluación</td>
    <td style="width: 50px; height: 30px;">Ponderación
     de los
     criterios (%)</td>
    <td style="width: 150px; height: 30px;">Procedimientos</td>
</tr>
<tr>
                <td rowspan="5"><p><textarea name="ponduni'.$i.'" maxlength="3" style="width: 70px; height: 50px; resize:none;"></textarea></td>
                <td>Evaluación del desempeño<br><p><textarea name="desmpeño'.$i.'" style="line-height: 1.2;width: 250px; height: 100px; resize:none;"></textarea></td>
                <td><p><textarea name="ponderacion1'.$i.'" maxlength="3" style="width: 70px; height: 50px; resize:none;"></textarea></td>
                <td><p><textarea name="procedimenta1'.$i.'" style="line-height: 1.2;width: 250px; height: 100px; resize:none;"></textarea></td>
            </tr>
            <tr>
                <td>Evaluación de impacto<br><p><textarea name="impacto'.$i.'" style="line-height: 1.2;width: 250px; height: 100px; resize:none;"></textarea></td>
                <td><p><textarea name="ponderacion2'.$i.'"  maxlength="3" style="width: 70px; height: 50px; resize:none;"></textarea></td>
                <td><p><textarea name="procedimenta2'.$i.'" style="line-height: 1.2;width: 250px; height: 150px; resize:none;"></textarea></td>
            </tr>
            <tr>
                <td>Desarrollo actitudinal</td>
                <td><p><textarea name="ponderacion3'.$i.'" maxlength="3" style="width: 70px; height: 50px; resize:none;"></textarea></td>
                <td><p><textarea name="procedimenta3'.$i.'" style="line-height: 1.2;width: 250px; height: 100px; resize:none;"></textarea></td>
            </tr>
            <tr>
                <td>Examen de unidad</td>
                <td><p><textarea name="ponderacion4'.$i.'" maxlength="3" style="width: 70px; height: 50px; resize:none;"></textarea></td>
                <td><p><textarea name="procedimenta4'.$i.'" style="line-height: 1.2;width: 250px; height: 50px; resize:none;"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>100%</td>
                <td></td>
            </tr>


</table>';

  $i++;
  }
  echo "<br>5:\n";
  echo 'BIBLIOGRAFÍA:<br><BR>';
  ?>
  <table width="100" class="table table-bordered" id="joel">
       <tr>
            <td><input type="text" name="name[]" placeholder="Nombre del libro" class="form-control name_list" /></td>
            <td><input type="text" name="autor[]" placeholder="Nombre del autor" class="form-control name_list" /></td>
            <td><input type="text" name="año[]" onkeypress="return justNumbers(event);" placeholder="Año o edición del libro" class="form-control name_list" /></td>
            <td><button type="button" name="add" id="add" class="btn btn-success">Añadir más</button></td>
       </tr>
  </table>
  <script>
  $(document).ready(function(){
       var i=1;
       $('#add').click(function(){
            i++;
            $('#joel').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Nombre del libro" class="form-control name_list" /></td><td><input type="text" name="autor[]" placeholder="nombre del autor" class="form-control name_list" /></td><td><input type="text" name="año[]" placeholder="año o  edicion del libro" onkeypress="return justNumbers(event);" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
       });
       $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
       });
       $('#reporte').click(function(){
            $.ajax({
                 url:"for.php",
                 method:"POST",
                 data:$('#add_name').serialize(),
                 success:function(data)
                 {
                      alert(data);
                      $('#add_name')[0].reset();
                 }
            });
       });
  });
  </script>
  <script>
  function justNumbers(e)
      {
      var keynum = window.event ? window.event.keyCode : e.which;
      if ((keynum == 8) || (keynum == 46))
      return true;

      return /\d/.test(String.fromCharCode(keynum));
      }
  </script>


<?php

  echo '<input class="report" type="submit" name="reporte" style="color:white" value="Visualizar silabo"><br>';
?>
<div class="pull-right">
  <a href="<?php $_SERVER["HTTP_REFERER"]?>" class="btn btn-info btn-lg" >Atrás</a>
  
 </div>
<?php }?>
</form>
<div><!--no olvidarse de este div-->
<style type="text/css">
#formulario1 {  width:900px; float:center;}
</style>


            <!--</div>-->

          <!--</div>-->
          </li>

      </ul>


  </div>



<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(window).load(function(){

	var clk = 0;

	/* on click accordion jquery */
	$(".on-clicks .accordion-Heading").click(function(){
		if(clk == 0){
			$(".on-clicks .acc-description").slideUp(300);
			$(this).next(".acc-description").slideDown(300);
			$(this).children("span").children(".acc-minus").eq(0).removeClass("close");
			$(this).addClass("active");
			clk++;
		}
		else{
			if($(this).hasClass("active")){
				$(this).next(".acc-description").slideUp(300);
				$(this).children("span").children(".acc-minus").eq(0).addClass("close");
				$(this).removeClass("active");
				clk--;
			} else {
				$(".on-clicks .acc-description").slideUp(300);
				$(".on-clicks .accordion-Heading.active").children("span").children(".acc-minus").eq(0).addClass("close");
				$(".on-clicks .accordion-Heading ").removeClass("active");
				$(this).next(".acc-description").slideDown(300);
				$(this).children("span").children(".acc-minus").eq(0).removeClass("close");
				$(this).addClass("active");
				clk++;
			}
		}
	});
	/* on click accordion jquery end */

	/* on mouseover accordion jquery */
	$(".on-mouseover .accordion-Heading").mouseover(function(){
		if(clk == 0){
			$(".on-mouseover .acc-description").slideUp(300);
			$(this).next(".acc-description").slideDown(300);
			$(this).children("span").children(".acc-minus").eq(0).removeClass("close");
			$(this).addClass("active");
			clk++;
		}
		else{
			if($(this).hasClass("active")){
				$(this).next(".acc-description").slideUp(300);
				$(this).children("span").children(".acc-minus").eq(0).addClass("close");
				$(this).removeClass("active");
				clk--;
			} else {
				$(".on-mouseover .acc-description").slideUp(300);
				$(".on-mouseover .accordion-Heading.active").children("span").children(".acc-minus").eq(0).addClass("close");
				$(".on-mouseover .accordion-Heading ").removeClass("active");
				$(this).next(".acc-description").slideDown(300);
				$(this).children("span").children(".acc-minus").eq(0).removeClass("close");
				$(this).addClass("active");
				clk++;
			}
		}
	});
	/* on mouseover accordion jquery end */
});
</script>



<!-----menu de cursos--------------------->

<div class="container demo">
<style>
.panel-group
{
width:60%;
height:100%;

}
</style>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

		<?php

		$ID_ADMIN = $_GET['nombre_admin'];

$extraer_interno_admin="select interno_docente from docente  where Cod_docente='$ID_ADMIN'";
		$EJECUCION_ID=mysqli_query($con,$extraer_interno_admin);
		$interno_docente= mysqli_fetch_array($EJECUCION_ID);


		//En esta zona haremos que se creen tantos submenus como cursos tenga el docente seleecionado, por ejemplo si el docnete tiene 6 cursos asignados , aparecen 6 submenus con los nombre de los cursos, de maner dinamica.
		include('conexion.php');
		$CONSULTAR_CURSOS="select * from docente inner join dicta on docente.interno_docente=dicta.interno_docente inner join asignatura on dicta.cod_asignatura=asignatura.cod_asignatura where dicta.interno_docente='$interno_docente'";
		$EJECUCION_CURSOS=mysqli_query($con,$CONSULTAR_CURSOS);
		$indice=1;
		while($CURSOS = mysqli_fetch_array($EJECUCION_CURSOS))
		{
		$indice++;
		?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading<?php echo $indice;?>">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $indice;?>" aria-expanded="false" aria-controls="collapse<?php echo $indice;?>">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <?php echo $CURSOS['nomb_asignatura']?>
                    </a>
                </h4>
            </div>
            <div id="collapse<?php echo $indice;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $indice;?>">
                <div class="panel-body">

				  aqui se podran los detalles del curso

				  <p>Fecha limite <span>*</span></p>
			<span class="icon-case"><img src="" height="15"><i class="fa fa-building-o"></i></span>
				<input type="text" name="fecha_limite" id="fecha_limite" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."  />
                <div class="validation"></div>

				<br>
				<br>
				<br>
			<p>OBSERVACIONES <span>*</span></p>
			<span class="icon-case"><img src="" height="18"><i class="fa fa-map-marker"></i></span>
				<textarea type="text" name="observaciones" id="observaciones" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné." /></textarea>
                <div class="validation"></div>


                </div>
				<br>
<br>
<br>
<br>
            </div>
			<br>
<br>
<br>
<br>
        </div>
		<?php } ?>

		<!----------fin de submenus de cursos--------------------->



    </div><!-- panel-group -->


</div><!-- container -->



	</div>



	<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModal_editar_admin" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>


        <div class="modal-body">

		<form action="#" method="post" class="EDITAR_ADMIN"  >

    <div class="contentform">
    	<div id="sendmessage"> Has creado correctamente al docente </div>

		<div class="form-group">
      <label class="control-label col-sm-4" for="CODIGO_DOCENTE">Codigo docente:</label>
      <div class="col-sm-4">
        <p class="form-control-static"><?php echo $Cod_docente; ?></p>
      </div>
    </div>


	<label class="control-label col-sm-8" for="email" align="left" >Nombre docente:</label>
	<br>
	<br>


	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="nombre_docente_edita" type="text" class="form-control" name="nombre_docente_edita"   data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."  placeholder="Nombre" value="<?php echo $nombre;?>" required />
    </div>

	<br>

	<label class="control-label col-sm-4" for="email" align="left" >Apellido:</label>
	<br>
	<br>

	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="apellido_edita" type="text" class="form-control" name="apellido_edita" placeholder="Apellido" value="<?php echo $apellido;?>"  required />
    </div>
	<br>


	<label class="control-label col-sm-8" for="email" align="left" >DNI:</label>
	<br>
	<br>

	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="DNI_edita" type="text" class="form-control" name="DNI_edita"  data-rule="maxlen:8" required pattern="[0-9]{8}" placeholder="DNI" value="<?php echo $dni;?>"  required />
    </div>
	<br>

	<label class="control-label col-sm-4" for="email" align="left" >Dirección:</label>
	<br>
	<br>
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

	   <input id="direccion_edita" type="text" class="form-control" name="direccion_edita"  placeholder="Direccion" value="<?php echo $direccion;?>"  required />


    </div>
	<br>

	<label class="control-label col-sm-6" for="email" align="left" >Tipo:</label>
	<br>
	<br>

	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

	  <select name="tipo_edita" id="tipo_edita" class="form-control" required />

				<option value="<?php echo $tipo;?>"><?php echo $tipo;?></option>
				<option value="docente">docente</option>
				<option value="admin">admin</option>
				</select>
    </div>
	<br>

	<label class="control-label col-sm-4" for="email" align="left" >Email:</label>
	<br>
	<br>

	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email_edita" type="email" class="form-control" name="email_edita" placeholder="Email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire." value="<?php echo $email;?>" required/>
    </div>
	<br>

	<br>
	<!----<p>Tipo</p>----->

	<label class="control-label col-sm-4" for="email" align="left" >Fecha nacimiento:</label>
	<br>
	<br>

	<div class="input-group ">

      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="f_nacimiento_edita" type="text" class="form-control" name="f_nacimiento_edita" placeholder="Fecha nacimiento"  value="<?php echo $fnacimiento;?>" required />
    </div>
	<br>



	<br>
	<!----<p>Tipo</p>----->

	<label class="control-label col-sm-4" for="email" align="left" >Contraseña</label>
	<br>
	<br>

	<div class="input-group ">

      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="password_edita" type="text" class="form-control" name="password_edita" placeholder="Contraseña"  value="<?php echo $password;?>" required />
    </div>
	<br>

	<br>



	<label class="control-label col-sm-4" for="email" align="left" >Telefono:</label>
	<br>
	<br>
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

	   <input id="telefono_edita" type="text" class="form-control" name="telefono_edita"  placeholder="telefono" value="<?php echo $telefono;?>"  required />


    </div>
	<br>




	</div>

	<!--------------BOTON CREAR DOCENTE---------------------------------->

<button type="submit" name="update_admin" class="bouton-contact" >GUARDAR CAMBIOS</button>


</form>



        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>


<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>


<?php

//esta funcion nos ayudara a guardar los cambios de los datos del docente en la base de datos al momento de editarlo
if(isset($_POST['update_admin']))
{
        include('conexion.php');

		$nombre_docente_edita=$_POST["nombre_docente_edita"];

        $apellido_edita=$_POST["apellido_edita"];

        $dni_edita=$_POST["DNI_edita"];

        $direccion_edita=$_POST["direccion_edita"];

		$tipo_edita=$_POST["tipo_edita"];

        $email_edita=$_POST["email_edita"];

        $fnacimiento_edita=$_POST["f_nacimiento_edita"];


		$telefono_edita=$_POST["telefono_edita"];

		$password_edita=$_POST["password_edita"];

		$actualizar="UPDATE docente set nombre='$nombre_docente_edita',apellido='$apellido_edita',dni='$dni_edita',direccion='$direccion_edita',
		tipo='$tipo_edita',email='$email_edita',fnacimiento='$fnacimiento_edita',password='$password_edita',telefono_docente='$telefono_edita'

		WHERE Cod_docente='$Cod_docente'";


		$ejecutar_actu_admin=mysqli_query($con,$actualizar);

      }?>






                    <h2 class="brand-before">
					<center>
                        <small>BIENVENIDOS</small>
					</center>
                    </h2>
                    <h1 class="brand-name">UNJBG</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>
                            <strong></strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

<link type="text/css" href="./css/style_admin_creacion.css" rel="stylesheet" />



	<!---aqui pegar--->





    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>version 1.0 &copy;  2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
