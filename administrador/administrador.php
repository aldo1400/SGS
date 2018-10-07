<?php
session_start();
if((!isset($_SESSION['codigo_docente'])) && $_SESSION['tipo']!='admin' ){
	header("Location:index.php");
}
$nombre_admin=$_SESSION['nombre'];
include('../conexion/conexion.php');
?>

<!DOCTYPE html>
<html charset="utf-8">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Universidad Nacional -   JORGE BASADRE GROHMANN</title>

    <!-- <link type="text/css" href="../css/admin.css" rel="stylesheet" /> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos_finales.css">

<script>
 $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '< Ant',
 nextText: 'Sig >',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 dateFormat: 'yy/mm/dd',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
$(function () 
{
$("#fecha").datepicker();
});
</script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>
 
 
 <!--------------título de la pagina------------------->
 
 <div class="container-fluid fixed-top" style="background:#560000">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark" style="background:#560000">
		<a class="navbar-brand" href="index.php"><img class="img-fluid" style="width:50px" src="../imagenes/logo-unjbg.png" />Sistema de silabos</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent" >
			<div class="mr-auto">
			</div>
		<ul class="navbar-nav">
			<li class="nav-item active">
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about.php">Noticias</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="blog.php">Blog</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Contáctenos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Silabos</a>
			</li>
			<?php

if(!isset($_SESSION))
{
	?>
	<li class="nav-item active">
		<a class="nav-link" href="index.php">Inicio 3<span class="sr-only">(current)</span></a>
	</li>
<?php }
else{
	?>
	<li class="nav-item dropdown">
<?php
if($_SESSION['tipo']=='docente'){
	?>
	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<?php echo $_SESSION['nombre']?>
			</a> 
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="docente.php">Mi perfil</a>
	<?php
}
else{
	?>
	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<?php echo $_SESSION['nombre']?>
			</a> 
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="administrador.php">Mi perfil</a>
	<?php
}
?>
<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Cerrar sesión</a>
				</div>
<?php
}
?>					
				
			</li>
			</ul>
			
		</div>
		</nav>


    </div>
    </div>

<script>

$('#bs-example-navbar-collapse-1 li a').on('click', function(){
    $('li a.activo').removeClass('activo');
    $(this).addClass('activo');
});

</script>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-4 bg-primary mt-5 pt-5">
				<div class="contenedor-menu1">
					<li class="btn-menu1">Docente<i class="icono fa fa-bars"></i></li>
					<ul class="menu1">
					<li><a href="administrador.php"><i class="icono izquierda fa fa-user"></i>Mi perfil</a></li>
					<li><a href="#"><i class="icono izquierda fa fa-book"></i>Mis cursos<i class="icono derecha fa fa-chevron-down"></i></a>
				<ul>
		<?php
		// $q_extraer_interno_docente="select interno_docente from docente  where Cod_docente='$nombre_admin'";
		// $e_extraer_interno_docente=mysqli_query($con,$q_extraer_interno_docente);
		// $a_interno_docente1= mysqli_fetch_array($e_extraer_interno_docente);
		
		$id_docente=$_SESSION['id'];
		//En esta zona haremos que se creen tantos submenus como cursos tenga el docente seleecionado, por ejemplo si el docnete tiene 6 cursos asignados , aparecen 6 submenus con los nombre de los cursos, de maner dinamica.
		$q_CONSULTAR_CURSOS_ASIGNADOS_MENU="select * from docente inner join dicta on docente.interno_docente=dicta.interno_docente inner join asignatura on dicta.cod_asignatura=asignatura.cod_asignatura where docente.interno_docente='$id_docente'";
		$e_EJECUCION_CURSOS=mysqli_query($con,$q_CONSULTAR_CURSOS_ASIGNADOS_MENU);
		$i=0;
		while($CURSOS = mysqli_fetch_array($e_EJECUCION_CURSOS))
		{
			$nombre=$CURSOS['nomb_asignatura'];
			$id_asignatura=$CURSOS['cod_asignatura'];	
			$dt_fecha=$CURSOS['fecha_dicta'];
			$parte = explode("-", $dt_fecha);
			$fecha_sistema=getdate();
			$i++;
			if($fecha_sistema['year']==$parte[0])
			{
			?>
	  <!--------------EN ESTA PARTE SE ESTAN CREANDO LOS LINKS DE CADA PROFESOR, Y ACTUALIZANDO AUTOMATICAMENTE SI SE CREA UN DOCENTE--->
        <li style="text-align:left;" ><a href="../curso_docente.php?id_asig=<?php echo $id_asignatura ?>"><img src="img/flecha.png" width="30" height="30" name="flecha"><?php echo $nombre; ?></a></li>
		<?php }} ?>				
				</ul>
			</li>
			
		</ul>
	</div>

	<div class="contenedor-menu">
		<li class="btn-menu">Administración<i class="icono fa fa-bars"></i></li>
			<ul class="menu">	
					<li><a href="asignaturas.php"><i class="icono izquierda fa fa-folder-open"></i>Plan de estudios</a></li>
					<li><a href="administrador.php?nombre_admin=<?php echo $nombre_admin ?>"><i class="icono izquierda fa fa-user-plus"></i>Crear docente</a></li>
					<li><a href="#"><i class="icono izquierda fa fa-users"></i>Docentes<i class="icono derecha fa fa-chevron-down"></i></a>
						<ul>
			<?php
			  $q_lista_total_docentes ="SELECT * FROM docente where interno_docente!=$id_docente";
			  $e_lista_total_docentes= mysqli_query($con,$q_lista_total_docentes);
			  while($a_lista_total_docentes = mysqli_fetch_array($e_lista_total_docentes))
			  {
				?>			
				<li style="text-align:left;"><a href="revisa_docente.php?nombre_profesor=<?php echo $a_lista_total_docentes['interno_docente'] ?>"><img src="img/flecha.png"  width="30" height="30" name="flecha">Ing.<?php echo $a_lista_total_docentes['nombre']; ?></a></li>
				<?php } ?>						
					</ul>
					</li>
				</ul>
	</div>

			</div>

			<div class="col-8 bg-secondary">
				
		
			<?php
      	$q_datos_docente ="SELECT * FROM docente where interno_docente=$id_docente ";
      $e_datos_docente= mysqli_query($con,$q_datos_docente);
      $i=0;
      while($a_datos_docente = mysqli_fetch_array($e_datos_docente))
      {
		 $Cod_docente=$a_datos_docente['Cod_docente'];
		 $nombre=$a_datos_docente['nombre'];
		 $apellido=$a_datos_docente['apellido'];
		 $dni=$a_datos_docente['dni'];
		 $direccion=$a_datos_docente['direccion'];
		 $tipo=$a_datos_docente['tipo'];
		 $email=$a_datos_docente['email'];
		 $fnacimiento=$a_datos_docente['fnacimiento'];
		 $telefono=$a_datos_docente['telefono_docente'];
		 $password=$a_datos_docente['password'];
		 $ruta_imagen=$a_datos_docente['ruta_imagen'];
		 $grado_academico=$a_datos_docente['grado_academico'];
		 $titulo=$a_datos_docente['titulo'];
        $i++;
      ?>
	  <div class="container-fluid bg-primary mt-5 pt-5">
	  <div class="container bg-success">
	  <h2>Datos personales</h2>
	  <hr>
	  <div class="row">
		<div class="col-md-4 col-12 my-auto">
		<img class="img-fluid" src="../<?php echo $ruta_imagen; ?>"  />
		</div>
		<div class="col-md-4 col-6 text-bold">
			<div>Codigo docente</div>
			<div>Nombre</div>
			<div>Apellido</div>
			<div>Grado academico</div>
			<div>Titulo</div>
			<div>DNI</div>
			<div>Tipo</div>
			<div>Email</div>
			<div>Fecha de nacimiento</div>
			<div>Telefono</div>
		</div>
		<div class="col-md-4 col-6">
		<div>Codigo docente</div>
		<div><?php echo  $nombre; ?></div>
		<div><?php echo  $apellido; ?></div>
		<div><?php echo $grado_academico; ?></div>
		<div><?php echo $titulo; ?></div>
		<div><?php echo $dni; ?></div>
		<div><?php echo $tipo; ?></div>
		<div><?php echo $email; ?></div>
		<div><?php echo $fnacimiento; ?></div>
		<div><?php echo $telefono; ?></div>
		</div>
		<hr>
		<div class="col-12">
		
		<div class="pull-right">
			<a href="logout.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a>
		</div>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_editar_admin" >Editar datos</button>
dsfsdf

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

		</div>

	  </div>
	  </div>
	  </div>
			
			</div>
		</div>
	</div>
</div>	 
      <?php } ?>
	    <!-- <style>
input[type=file] {
    display: block;
	width:100%;
}
.form-inline-2
{
    max-width: 300px;
    width: 60%;
	margin:0;
	overflow: hidden;

}
</style> -->

	  <form action="" method="post" enctype="multipart/form-data" role="form">

<!-- <style>
  div.fileinputs {
	position: relative;
}

div.fakefile {
	position: absolute;
	top: 0px;
	left: 0px;
	z-index: 1;
}

input.file {
	position: relative;
	text-align: right;
	-moz-opacity:0 ;
	filter:alpha(opacity: 0);
	opacity: 0;
	z-index: 2;
}
</style> -->
  

<div class="fileinputs">
	<input name="foto1" type="file" class="file" id="foto1" style="width: 47px;"/>
	<div style="width: 200px;">
		<div class="fakefile">
			<img src="imagenes/upload.png" width="45" height="45"/>
		</div>
		<input name="guardar2" type="submit" class="btn btn-success btn-lg" value="subir foto" style="width: 100px;"/>

	</div>
</div>

</form>





	  </div>
	  

<?php
				  			  			  
if(isset($_POST['guardar2'])){

$nombrefoto1=$_FILES['foto1']['name'];
$ruta1=$_FILES['foto1']['tmp_name'];
if(is_uploaded_file($ruta1))
{ 
if($_FILES['foto1']['type'] == 'image/png' OR $_FILES['foto1']['type'] == 'image/gif' OR $_FILES['foto1']['type'] == 'image/jpeg')
		{
$tips = 'jpg';
$type = array('image/jpeg' => 'jpg');
$name = $nombre_admin.'Foto-perfil'.'.'.$tips;
$destino1 =  "imagenes/".$name;
copy($ruta1,$destino1);

$ruta_imagen = $destino1;

$miniatura_ancho_maximo = 700;
$miniatura_alto_maximo = 500;

$info_imagen = getimagesize($ruta_imagen);
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( $ruta_imagen );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( $ruta_imagen );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( $ruta_imagen );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, $destino1, 80);
}
}

$act="UPDATE docente SET ruta_imagen='".$destino1."' where Cod_docente='$nombre_admin'";

if(@mysqli_query($con,$act)){

?>
		<script language="JavaScript">
	var page='administrador0.php?nombre_admin=<?php echo $nombre_admin ?>';
		location.href=page;
		
	</script>
		<?php
		
}
}

?>


	  <?php
	   $result = mysqli_query($con,"SELECT * FROM docente where Cod_docente='$Cod_docente'"); 
	   
while ($row=mysqli_fetch_array($result)) 
{ 
    /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
    $ruta_img = $row["ruta_imagen"]; 
}
?>
	  <!------------------------------------FIN DE MOSTRAR DATOS DEL DOCENTE ADMINISTRADOR------------------------------------------------>
	  
	 
</div>



<?php
  if(isset($_POST['fecha_limite_asignación']))
{
        $cod_asig=$_POST["cod_asig"];
		echo $cod_asig;
		
		$fecha=$_POST["fecha"];
		
		echo $fecha;
		
		$int_docente=$_POST["interno_docente1"];
        echo $int_docente;
		
		$CONSULTAR_ID_ASIG="update dicta set fecha_limite='$fecha' where interno_docente='$int_docente' and cod_asignatura='$cod_asig'";
		
		$execute=mysqli_query($con,$CONSULTAR_ID_ASIG);
		if($execute)
		
		{
		
		?>
		<script language="JavaScript">
	var page='administrador0.php?nombre_admin=<?php echo $nombre_admin ?>';
		location.href=page;
		
	</script>
	<?php
		
		}

      }?>
	</div>
	
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar datos personales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  	<div class="form-group">
			<label  class="control-label col-sm-4" for="CODIGO_DOCENTE">Código docente:</label>
			<div  class="col-sm-4">
				<input class="form-control-static" value="<?php echo $Cod_docente; ?>"" disabled="true"/>
			</div>
   	  	</div>
			 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	
		<div class="container">
  <div class="modal fade" id="myModal_editar_admin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-family: Roboto;">Editar docente</h4>
        </div>
		<style>
.contentform2 {
    padding: 0px 30px;
    height: 600px;
	
}

.EDITAR_ADMIN2
{
    border-radius: 5px;
    max-width: 1000px;
    width: 100%;
    margin: 2% auto;
    overflow: hidden;
}
	</style>	
		
        <div style="margin-top: -5%" class="modal-body">
		
		<form action="#" method="post" class="EDITAR_ADMIN2"  >
	   
    <div class="contentform2">
    	<div id="sendmessage"> Has creado correctamente al docente </div>
		
		
	<!------------------------------------------------------------------------------------>
	
	<label style="position: relative;  right: 55px;top: -4px;  bottom: 20px;" class="control-label col-sm-6" for="email" >Nombre docente:</label>
	
	<label style="float: right; bottom: 10px; top: -4px; left: 42px" class="control-label col-sm-4" for="email" align="left" >DNI:</label>
	<br>	
	
	<div style="position: relative;" class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
      <input style="width: 220px" id="nombre_docente_edita" type="text" class="form-control" name="nombre_docente_edita"   data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."  placeholder="Nombre" value="<?php echo $nombre;?>" required />
	  
      <span  style="position: relative; left: 14px" class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input style="width: 125px;left: 14px" id="DNI_edita" type="text" class="form-control" name="DNI_edita"  data-rule="maxlen:8" required pattern="[0-9]{8}" placeholder="DNI" value="<?php echo $dni;?>"  required />
    </div>
	
	
	<BR>
	<label style="right: 12px;" class="control-label col-sm-4" for="email" align="left" >Apellido:</label>
	<label style="float: right;right: -60px" class="control-label col-sm-6" for="email" align="left" >Tipo:</label>
	<br>
	<br>
	<div style="position: relative;" class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input style="width: 220px" id="apellido_edita" type="text" class="form-control" name="apellido_edita" placeholder="Apellido" value="<?php echo $apellido;?>"  required />
      <span style="position: relative; right: 15px" class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
	  <select style="right: 15px" name="tipo_edita" id="tipo_edita" class="form-control" required />
				
				<option value="<?php echo $tipo;?>"><?php echo $tipo;?></option>
				<option value="docente">docente</option>
				<option value="admin">admin</option>
				
				</select>
    </div>
    <br>

	<label style="position: relative;  right: 55px;top: -4px;  bottom: 20px;" class="control-label col-sm-6" for="email" >Grado académico</label>
	
	
	<br>	
	
	<div style="position: relative;" class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
      <input style="width: 220px" id="grado_academico_edita" type="text" class="form-control" name="grado_academico_edita"   data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."  placeholder="Grado academico" value="<?php echo $grado_academico;?>" required />
	  
    </div>



	
	<br>
		
	<label style="right: 12px" class="control-label col-sm-4" for="email" align="left" >Título:</label>
	<br>
	<div class="input-group ">
      <span style="position: relative;" class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
	   <input style="position:relative; width: 450px;" id="titulo_edita" type="text" class="form-control" name="titulo_edita"  placeholder="Titulo" value="<?php echo $titulo;?>"  required />
	   
	   
    </div>
    
	<br>
	
	<label style="right: 12px" class="control-label col-sm-4" for="email" align="left" >Email:</label><label style="float: right;right: -55px" class="control-label col-sm-6" for="email" align="left" >Fecha de nacimiento:</label>
	<br>
	
	<div style="position: relative;" class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input style="width: 220px" id="email_edita" type="email" class="form-control" name="email_edita" placeholder="Email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire." value="<?php echo $email;?>" required/>
      <span style="position: relative; left: 20px" class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input style="left: 14px;width: 125px" id="f_nacimiento_edita" type="text" class="form-control" name="f_nacimiento_edita" placeholder="Fecha nacimiento"  value="<?php echo $fnacimiento;?>" required />
    </div>
	<br>
		
	<label style="right: 12px" class="control-label col-sm-4" for="email" align="left" >Contraseña</label><label style="float: right;right: 20px" class="control-label col-sm-4" for="email" align="left" >Teléfono:</label>
	<br>
	<div style="position: relative;" class="input-group ">
	
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input style="width: 220px" id="password_edita" type="text" class="form-control" name="password_edita" placeholder="Contraseña"  value="<?php echo $password;?>" required />
      <span style="position: relative; left: 20px" style="position: relative;" class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
	   <input style="left: 14px;width: 125px" id="telefono_edita" type="text" class="form-control" name="telefono_edita"  placeholder="telefono" value="<?php echo $telefono;?>"  required />
    </div>
	<br>
	
	
	</div>

	<!--------------BOTON CREAR DOCENTE---------------------------------->
 
<button style="width: 200px" type="submit" name="update_admin" class="bouton-contact" >GUARDAR</button> 


</form>
		
		
		  
        </div>
		
		<!-----------
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
		
		-------------->
		
		
      </div>
      
    </div>
  </div>
  
</div>

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
		
		$password_edita=$_POST["password_edita"];
		
		$telefono_edita=$_POST["telefono_edita"];

		$grado_academico_edita=$_POST["grado_academico_edita"];

		$titulo_edita=$_POST['titulo_edita'];



		$actualizar="UPDATE docente set nombre='$nombre_docente_edita',apellido='$apellido_edita',dni='$dni_edita',direccion='$direccion_edita',
		tipo='$tipo_edita',email='$email_edita',fnacimiento='$fnacimiento_edita',password='$password_edita',telefono_docente='$telefono_edita',grado_academico='$grado_academico_edita',titulo='$titulo_edita'

		WHERE Cod_docente='$Cod_docente'";
		
		
		$ejecutar_actu_admin=mysqli_query($con,$actualizar);
		
		if($ejecutar_actu_admin)
		{
		?>
		<script language="JavaScript">
	var page='administrador0.php?nombre_admin=<?php echo $nombre_admin ?>';
		location.href=page;
		
	</script>
	<?php
	}
	
      }?>
                    <h2 class="brand-before">

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

<link type="text/css" href="./css/style_admin_creacion_asignatura.css" rel="stylesheet" />



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

   <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="../js/main.js"></script>
</body>

</html>
