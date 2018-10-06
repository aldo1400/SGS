

<?php

session_start();
session_name('permiso');

if(!$_SESSION)
{
header("location:index.php");


}

$nombre_admin=$_SESSION['nombre_docente'];


?>
<!------------------fin de metodo de seguridad-------------------------------------->




<!DOCTYPE html>
<html charset="utf-8">


<!------recibo la variable nombre_admin, donde esta el nombre del administrador------------>

<?php

include('conexion.php');//en este archivo se encuentra la cadena de conexion



		
		
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

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>

	
	
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

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
 
    <div class="brand">UNJBG</div>
    <div class="address-bar">Sistema de acceso para editar sílabos</div>

	
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

session_start();
session_name('permiso');

if(!$_SESSION)
{
?>
						<a class="navbar-brand" href="index.php">unjbg</a>
                        
                    
<?php
}
else
{

if(!$_SESSION['nombre_docente'])
{
$nombre_docente_verificado=$_SESSION['nombre_doc'];
?>
						<a class="navbar-brand" href="docente.php?nombre_doc=<?php echo $nombre_docente_verificado ?>"><?php echo $nombre_docente_verificado ?></a>
                       
                    
<?php			
}
else
{
$nombre_admin=$_SESSION['nombre_docente'];
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
					
                    
					<li>
                        <a  class="activo" href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?> ">Mi perfil</a>
					</li>
					
                    <li>
                        <a href="about.php">Noticias</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="contact.php">Contáctanos</a>
                    </li>
					<li>
                        <a href="silabo.php">Sílabo</a>
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
                <div class="col-lg-12 text-center">


<div class="wrapper123">

		<br>
		<br>
		
		
		
		
		<div class="contenedor-menu1">
		

<style type="text/css">   
a:link   
{   
 text-decoration:none;   
}   
</style>



		<li class="btn-menu1">Docente<i class="icono fa fa-bars"></i></li>
		<ul class="menu1">
		
			<li><a href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?> "><i class="icono izquierda fa fa-user"></i>Mi perfil</a></li>
			
			
			<li><a href="#"><i class="icono izquierda fa fa-book"></i>Mis cursos<i class="icono derecha fa fa-chevron-down"></i></a>
				<ul>
		<?php
		
		
include('conexion.php');

$q_extraer_interno_docente="select interno_docente from docente  where Cod_docente='$nombre_admin'";

		$e_extraer_interno_docente=mysqli_query($con,$q_extraer_interno_docente);
		
		$a_interno_docente1= mysqli_fetch_array($e_extraer_interno_docente);
		
		$interno_docente=$a_interno_docente1['interno_docente'];
		
		//En esta zona haremos que se creen tantos submenus como cursos tenga el docente seleecionado, por ejemplo si el docnete tiene 6 cursos asignados , aparecen 6 submenus con los nombre de los cursos, de maner dinamica.
		
		$q_CONSULTAR_CURSOS_ASIGNADOS_MENU="select * from docente inner join dicta on docente.interno_docente=dicta.interno_docente inner join asignatura on dicta.cod_asignatura=asignatura.cod_asignatura where docente.interno_docente='$interno_docente'";
		$e_EJECUCION_CURSOS=mysqli_query($con,$q_CONSULTAR_CURSOS_ASIGNADOS_MENU);
		$i=0;
		while($CURSOS = mysqli_fetch_array($e_EJECUCION_CURSOS))
		{
		
			$nombre=$CURSOS['nomb_asignatura'];
			$id_asignatura=$CURSOS['cod_asignatura'];
			
			
			$dt_fecha=$CURSOS['fecha_dicta'];
			 $parte = explode("-", $dt_fecha);
			//echo $parte[0];//año asignado //
			$fecha_sistema=getdate();
			//echo $fecha_sistema['year'];
			
			$i++;
			if($fecha_sistema['year']==$parte[0])
			{
			?>
	  
	  <!--------------EN ESTA PARTE SE ESTAN CREANDO LOS LINKS DE CADA PROFESOR, Y ACTUALIZANDO AUTOMATICAMENTE SI SE CREA UN DOCENTE--->
	  
		
		
        <li style="text-align:left;" ><a href="curso_docente.php?nombre_asig=<?php echo $id_asignatura ?>"><img src="img/flecha.png" width="30" height="30" name="flecha"><?php echo $nombre; ?></a></li>
	
		<?php }} ?>
		
				
     
	  <style>
	  
	  .flecha
	  {
	  margin-right:10px;
	  margin-left:15px;
	  }
	  
	  </style>

 
 		
					
					
				</ul>
			</li>
			
		</ul>
	</div>
				

				


		<div class="contenedor-menu">
		
		

<style type="text/css">   
a:link   
{   
 text-decoration:none;   
}   
</style>



		<li class="btn-menu">Administración<i class="icono fa fa-bars"></i></li>
		<ul class="menu">
		
				
			<li><a href="asignaturas.php" title=""><i class="icono izquierda fa fa-folder-open"></i>Plan de estudios</a></li>
			
			
			<li><a href="administrador.php?nombre_admin=<?php echo $nombre_admin ?>"><i class="icono izquierda fa fa-user-plus"></i>Crear docente</a></li>
			
			
			<li><a href="#"><i class="icono izquierda fa fa-users"></i>Docentes<i class="icono derecha fa fa-chevron-down"></i></a>
				<ul>
				
				
	<?php
      $q_lista_total_docentes ="SELECT * FROM docente";
      $e_lista_total_docentes= mysqli_query($con,$q_lista_total_docentes);
      $i=0;
      while($a_lista_total_docentes = mysqli_fetch_array($e_lista_total_docentes))
      {
        $nombre=$a_lista_total_docentes['nombre'];
		$id_docente=$a_lista_total_docentes['Cod_docente'];
		$interno_docente=$a_lista_total_docentes['interno_docente'];
		
        $i++;

      ?>
	  
	  <!--------------EN ESTA PARTE SE ESTAN CREANDO LOS LINKS DE CADA PROFESOR, Y ACTUALIZANDO AUTOMATICAMENTE SI SE CREA UN DOCENTE--->
	  
      <?php
		
		if($id_docente!=$nombre_admin)
		{
		?>
		
        <li style="text-align:left;"><a href="revisa_docente.php?nombre_profesor=<?php echo $interno_docente ?>"><img src="img/flecha.png"  width="30" height="30" name="flecha">Ing.<?php echo $nombre; ?></a></li>
		
		
		<?php
		}
		else
		{}
		
		?>
		
		
        
     
	  <style>
	  
	  .flecha
	  {
	  margin-right:10px;
	  margin-left:15px;
	  }
	  
	  </style>

      <?php } ?>
 
 		
					
					
				</ul>
			</li>
			
		</ul>
	</div>



	


<br>


		
		
		<br>
		
 
	  
	  
<!-----------------------FIN DE NOMBRE DE PROFESORES------------------->


<style>
/*
#menu ul {
    list-style-type: none;
    margin: 0px;
    padding: 3px;
    width: 200px;
    font-family: Arial, sans-serif;
    font-size: 12pt;
}


#menu ul li {
    background-color: #fff;
}

#menu ul li a {
    color: #000;
    text-decoration: none;
    text-transform: uppercase;
    display: block;
    padding: 10px 10px 10px 20px;
	font-size: 8pt;
}




#menu ul li a:hover {
    background: #C70039;
    border-left: 10px solid #333;
    color: #fff;
}

*/
</style>


	</div>



<div class="wrapper1234">

<!-------LINK CERRAR SESION, LLAMA AL ARCHIVO LOGOUT.PHP QUE DESTRUIRA LA SESION Y POR ENDE SE REDIRIGIRA A INDEX---------------------->

<div class="pull-right">
<a href="logout.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a>
</div>


<br>
<br>
<br>

<!----------------------EN ESTA PARTE MUESTRO LOS DATOS DEL ADMINISTRADOR QUE ES EXTRAIDO DE LA BASE DE DATOS ---------------------------->



<div class="contenedor_presenta">


<!--------<img src="img/profesor.jpg" width="200" height="200" >------><!-----IMAGEN DEL PROFESOR---------------->



<?php
      $q_datos_docente ="SELECT * FROM docente where Cod_docente='$nombre_admin' ";
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
	<div>
   <img src="<?php echo $ruta_imagen; ?>" width="250" height="250" alt="" align="RIGHT" />
</div>

<br>


	<TABLE cellpadding=5 >
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cod. Docente :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Cod_docente; ?></TD> </TR>
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre         :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $nombre; ?></TD> </TR>
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apellido       :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $apellido; ?></TD> </TR>

	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grado Ac. :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $grado_academico; ?></TD> </TR>

	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Título        :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $titulo; ?></TD> </TR>

	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DNI            :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dni; ?></TD> </TR>

	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tipo           :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tipo; ?></TD> </TR>
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-MAIL         :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $email; ?></TD> </TR>
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha Nac.     :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fnacimiento; ?></TD> </TR>
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teléfono      :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $telefono; ?></TD> </TR>
	</TABLE>
	<br>
	<br>
   
      
	 
      <?php } ?>
	    <style>
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

</style>

	

	 

	  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_editar_admin" style=" position: relative; left:-150px">Editar datos</button>
	  
	  <!--<BUTTON  type="button"   name="boton_recargar" onclick="document.location.reload();" class="btn btn-warning btn-lg " style=" position: relative; left:-130px">Recargar datos</button>---->
	  
	  
	  <br>
	  <div align="rigth" style=" position: relative; margin:0px;left:430px; top:-50px; width:300px;">
	  
	  
<style>
.form-inline-3
{
 max-width: 150px;
 margin:0px;
 width:100%;
 
}

</style>
	  
	  <form action="" method="post" enctype="multipart/form-data" class="form-inline-3" role="form">

<style>
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
</style>
  

<div class="fileinputs">
	<input name="foto1" type="file" class="file" id="foto1" style="width: 47px;"/>
	<div style="width: 200px;">
		<div class="fakefile">
			<!--<input />-->
			<img src="imagenes/upload.png" width="45" height="45"/>
		</div>
		<input name="guardar2" type="submit" class="btn btn-success btn-lg" value="subir foto" style="width: 100px;"/>

	</div>
</div>
<!--<input name="foto1" type="file" id="foto1"  >-->



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


	  <BR>
	  <!------------------------------------FIN DE MOSTRAR DATOS DEL DOCENTE ADMINISTRADOR------------------------------------------------>
	  
	 
</div>

<br>
<br>


<?php
  if(isset($_POST['fecha_limite_asignación']))
{
        
		include('conexion.php');
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
	
	
	
		<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
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
		
		<div class="form-group">
     
      <label style="left: 25px;top: 30px" class="control-label col-sm-4" for="CODIGO_DOCENTE">Código docente:</label>
      <div  class="col-sm-4">
        <p style="position: relative; left: 115px; top: 15px" class="form-control-static"><?php echo $Cod_docente; ?></p>
      </div>
    </div>
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
		
  
		
	
	
	
	<br>
	<br>
	<br>
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

    <!-- jQuery -->
    </script>

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
