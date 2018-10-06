
<?php

session_start();
session_name('permiso');

if(!$_SESSION)
{
header("location:index.php");


}


?>
<!------------------fin de metodo de seguridad-------------------------------------->




<!DOCTYPE html>
<html charset="utf-8">


<!------recibo la variable nombre_admin, donde esta el nombre del administrador------------->

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
				<?php
// 				session_start();
// session_name('permiso');

if(!$_SESSION)
{
?>
<li>
						<a  href="index.php">unjbg</a>
    </li>                    
                    
<?php
}
else
{

if(!isset($_SESSION['nombre_docente']))
{
$nombre_docente_verificado=$_SESSION['nombre_doc'];
// echo $nombre_docente_verificado;
?>
					<li>
						<a  href="docente.php?nombre_doc=<?php echo $nombre_docente_verificado ?>">Mi perfil</a>
                  </li>     
                    
<?php					
}
else
{
$nombre_admin=$_SESSION['nombre_docente'];
echo $nombre_admin;
?>
<li>
					<a  href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?>">Mi perfil</a>
               </li>         
						
                    

<?php
}

}
?>
               
					<?PHP $id_asignatura1=$_GET['nombre_asig'];?>
					
                    <li>
                       <a class="activo" href="curso_docente.php?nombre_asig=<?php echo $id_asignatura1 ?>  ">Mi curso</a>
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
		
		<?php
		
		// if(!$_SESSION['nombre_docente'])
		if(!isset($_SESSION['nombre_docente']))
{
$nombre_docente_verificado=$_SESSION['nombre_doc'];
$ID_DOC = $nombre_docente_verificado;

?>
			<li><a href="docente.php?nombre_doc=<?php echo $nombre_docente_verificado ?> "><i class="icono izquierda fa fa-home"></i>Mi perfil</a></li>
		<?php
		
		}	
else
{
$nombre_admin=$_SESSION['nombre_docente'];
$ID_DOC = $nombre_admin;
?>
			<li><a href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?>"><i class="icono izquierda fa fa-home"></i>Mi perfil</a></li>
<?php }?>
			<li><a href="#"><i class="icono izquierda fa fa-user"></i>Mis cursos<i class="icono derecha fa fa-chevron-down"></i></a>
				<ul>
		<?php
		
		
		
		$Cod_asignatura_enviada=$_GET['nombre_asig'];

include('conexion.php');





$extraer_interno_docente="select interno_docente from docente  where Cod_docente='$ID_DOC'";

		$EJECUCION_ID=mysqli_query($con,$extraer_interno_docente);
		$interno_docente1= mysqli_fetch_array($EJECUCION_ID);
		
		$interno_docente=$interno_docente1['interno_docente'];
		
		//En esta zona haremos que se creen tantos submenus como cursos tenga el docente seleecionado, por ejemplo si el docnete tiene 6 cursos asignados , aparecen 6 submenus con los nombre de los cursos, de maner dinamica.
		
		$CONSULTAR_CURSOS="select * from docente inner join dicta on docente.interno_docente=dicta.interno_docente inner join asignatura on dicta.cod_asignatura=asignatura.cod_asignatura where docente.interno_docente='$interno_docente'";
		$EJECUCION_CURSOS=mysqli_query($con,$CONSULTAR_CURSOS);
		
		$i=0;
		while($CURSOS = mysqli_fetch_array($EJECUCION_CURSOS))
		{
		
			$nombre=$CURSOS['nomb_asignatura'];
			$id_asignatura=$CURSOS['cod_asignatura'];
			
			
			$fecha=$CURSOS['fecha_dicta'];
			 $parte = explode("-", $fecha);
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

	
	<?php 
	
	// if($_SESSION['nombre_docente'])
	if(isset($_SESSION['nombre_docente']))
	{
	?>
	
<div class="contenedor-menu">
		
		

<style type="text/css">   
a:link   
{   
 text-decoration:none;   
}   
</style>



		<li class="btn-menu">Administración<i class="icono fa fa-bars"></i></li>
		<ul class="menu">
		
				
			<li><a href="asignaturas.php" title=""><i class="icono izquierda fa fa-home"></i>Plan de estudios</a></li>
			
			
			<li><a href="administrador.php?nombre_admin=<?php echo $nombre_admin ?>"><i class="icono izquierda fa fa-folder-open"></i>Crear docente</a></li>
			
			
			<li><a href="#"><i class="icono izquierda fa fa-users"></i>Docentes<i class="icono derecha fa fa-chevron-down"></i></a>
				<ul>
				
				
	<?php
      $consulta ="SELECT * FROM docente";
      $ejecutar= mysqli_query($con,$consulta);
      $i=0;
      while($fila = mysqli_fetch_array($ejecutar))
      {
        $nombre=$fila['nombre'];
		$id_docente=$fila['Cod_docente'];
		$interno_docente=$fila['interno_docente'];
		
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
	
<?php }?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>



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


<?php
      
	  $consulta2 ="SELECT * FROM asignatura  where cod_asignatura='$Cod_asignatura_enviada'";

$ejecutar2= mysqli_query($con,$consulta2);
	   
	   
	   while($fila = mysqli_fetch_array($ejecutar2))
      {
		$nombre=$fila['nomb_asignatura'];
		 $horas_practica=$fila['horas_practica'];
		 $pre_requisito=$fila['pre_requisito'];
		 $nro_creditos=$fila['nro_creditos'];
		 $semestre_academico=$fila['semestre_academico'];
		 $cod_asignatura=$fila['cod_asignatura'];
		 $facultad=$fila['facultad'];
		 $horas_teoria=$fila['horas_teoria'];
		 $horas_laboratorio=$fila['horas_laboratorio'];
		 ?>
		 <TABLE style="text-align: left; position: relative; left: 150px" >
	<TR><TH>Código asignatura    :</TH>
		<TD>&nbsp;<?php echo $cod_asignatura; ?></TD> </TR>
	<TR><TH>Nombre del curso     :</TH>
		<TD>&nbsp;<?php echo  $nombre;  ?></TD> </TR>
	<TR><TH>Pre-requisito        :</TH>
		<TD>&nbsp;<?php echo $pre_requisito; ?></TD> </TR>
	<TR><TH>Semestre académico   :</TH>
		<TD>&nbsp;<?php echo $semestre_academico; ?></TD> </TR>
	<TR><TH>Facultad             :</TH>
		<TD>&nbsp;<?php echo  $facultad; ?></TD> </TR>
	<TR><TH>Número de créditos   :</TH>
		<TD>&nbsp;<?php echo $nro_creditos; ?></TD> </TR>
	<TR><TH>Horas de teoría      :</TH>
		<TD>&nbsp;<?php echo $horas_teoria; ?></TD> </TR>
	<TR><TH>Horas de práctica    :</TH>
		<TD>&nbsp;<?php echo $horas_practica; ?></TD> </TR>
	<TR><TH>Horas de laboratorio :</TH>
		<TD>&nbsp;<?php echo $horas_laboratorio; ?></TD> </TR>
		 </TABLE>
		<?php
}
		
	 ?>
	 
	 <br>
	  <a class="btn btn-info btn-lg" href="silabo_crear1.php?nombre_asig=<?php echo $cod_asignatura ?>">Editar sílabo</a>
	  
	  <!--<BUTTON  type="button"   name="boton_recargar" onclick="document.location.reload();" class="btn btn-warning btn-lg " >Recargar datos</button>-->
	  
	  
	  <BR>
	  <!------------------------------------FIN DE MOSTRAR DATOS DEL DOCENTE ADMINISTRADOR------------------------------------------------>
	  
	 
</div>




	</div>
	
	
	
	

<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>


<?php

//esta funcion nos ayudara a guardar los cambios de los datos del docente en la base de datos al momento de editarlo

      ?>
		
  
		
	
	
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
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
                    <p>versión 1.0 &copy;  2017</p>
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
