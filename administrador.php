<!----------------

EN ESTE ARCHIVO SE CREARA UN NUEVO DOCENTE.
--------------------------->


<!---------------------
ESTE ES UN METODO DE SEGURIDAD, YO HE CREADO EN LOGIN.PHP dos variables de sesion, es decir variables que estarna presentes en todos los archivos, las podemos llamar y utilizar su valor, si estas variables estan vacias significa que no se logeo correctamnete el docente o admin, por lo tanto se redirigire a index.html

------------------------>

<?php

session_start();
session_name('permiso');

if(!$_SESSION)
{
header("location:index.php");

}
$nombre_admin=$_SESSION['nombre_docente'];
?>

<!------------------Fin de metodo de seguridad-------------------------------------->

<!DOCTYPE html>
<html charset="utf-8">


<?PHP
include('conexion.php');//CADENA DE CONEXION

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

    <div class="brand">UNJBG</div>
    <div class="address-bar">Sistema de acceso para editar sílabos</div>

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
                        <a href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?> ">Mi perfil</a>
					</li>
					
                    <li>
                        <a class="activo "href="administrador.php">Crear Docente</a>
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



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>



<br>


		
		
		<br>
		
		
		<!------------------------------MENU DE NAVEGACION DOCENTE, MI PERFIL Y ASIGNATURAS------------------------->
		
		

<!------------------------------FIN DE MENU DE NAVEGACION DOCENTE, MI PERFIL Y ASIGNATURAS------------------------->


<br>
<br>

<!-----------------------MENU LISTA DE DOCENTES Y CREAR DOCENTE------------------->



<!-----------------------FIN DE MENU LISTA DE DOCENTES Y CREAR DOCENTE------------------->


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

<!---------------------ZONA DONDE SE CREARA EL USUARIO------------------------------------------->

	<div class="wrapper1234">
	
 <!-----------LINK CERRAR SESION-------------->
 
<div class="pull-right">
<a href="logout.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a>
</div>

<br>
	

	
	<!-------------------FORMULARIO PARA CREAR DOCENTE----------------------------------------------------------->

	<!----------Metodo de envio POST---------------->
	
<style>
.p
{	
font-size: 1em;
}
</style>


	<form action="administrador.php" method="post" class="CREACION_PENDIENTE"  >
	    <h1><center>CREAR PROFESOR</center></h1>

    <div class="contentform">
    	<div id="sendmessage"> Has creado correctamente al docente </div>

<!------------el formulario esta dividido en dos zonas, la primera zona que vamos a ver es la izquierda----------------------------->

<!---------------INICIO ZONA IZQUIERDA------------------------->

		<div class="leftcontact">
		
		<!----------CODIGO DOCENTE-------------------->
		<div class="form-group">
			<p>Código docente <span></span></p>
			<span class="icon-case"><img src="img/michi.png" height="20"></span>
                <input type="text" name="codigo_crea" id="codigo_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Sujet' doit être renseigné."required/>
                <div class="validation"></div>
			</div>
			
			
			
			
		<!----------NOMBRE DEL DOCENTE-------------------->
			<div class="form-group">
            <p>Nombres </p>
            <span class="icon-case"><img src="img/male.png" height="15"></span>
				<input type="text" name="nombres_crea" id="nombres_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."required/>
                <div class="validation"></div>
			</div>
			
		<!----------APELLIDO DOCENTE-------------------->

			      <div class="form-group">
			        <p>Apellidos</p>
			        <span class="icon-case"><img src="img/male.png" height="15"></span>
				        <input type="text" name="apellidos_crea" id="apellidos_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."required/>
                <div class="validation"></div>
				</div>

		<!----------DNI DOCENTE-------------------->

			<div class="form-group">
			<p>DNI</p>
			<span class="icon-case"><img src="img/dni.svg" height="18"></span>
				<input type="text" name="dni_crea" id="dni_crea" data-rule="maxlen:8" required pattern="[0-9]{8}" data-msg="El dni esta formado por 8 numeros"/>
                <div class="validation"></div>
			</div>
			
		<!----------DIRECCION DOCENTE-------------------->
		
		
			<div class="form-group">
			<p>Dirección</p>
			<span class="icon-case"><img src="img/direccion_fisica.png" height="15"></span>
				<input type="text" name="direccion_crea" id="direccion_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné." required/>
                <div class="validation"></div>
			</div>


			<div class="form-group">
			<p>Grado académico<span></span></p>
			<span class="icon-case"><img src="img/michi.png" height="20"></span>
                <input type="text" name="grado_academico_crea" id="grado_academico_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Sujet' doit être renseigné."required/>
                <div class="validation"></div>
			</div>

		

	</div>
<!---------------FIN  ZONA IZQUIERDA------------------------->

<!--------------INICIO ZONA DERECHA------------------------>

	
		<div class="rightcontact">
		
		
		

		<!----------EMAIL DOCENTE-------------------->
		
			<div class="form-group">
			<p>E-mail</p>
			<span class="icon-case"><img src="img/message_icon.png" height="15"></span>
                <input type="email" name="email_crea" id="email_crea" required/>
                <div class="validation"></div>
			</div>
		
		<!----------FECHA DE NACIMIENTO DOCENTE-------------------->
		
			<div class="form-group">
			
			<p>Fecha nacimiento</p>
			<span class="icon-case"><img src="img/nacimiento.png" height="18"></span>
				<input type="text" name="fecha_nacimiento_crea" id="fecha_nacimiento_crea"  placeholder="aaaa-mm-dd" required pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné." required/>
                <div class="validation"></div>
			
			</div>
		
		
		<div class="form-group">
			<p>Teléfono</p>
			
			
			<span class="icon-case"><img src="img/direccion_fisica.png" height="15"></span>
				<input type="text" name="telefono_crea" id="telefono_crea" data-rule="required" required pattern="[0-9]*" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné." required/>
                <div class="validation"></div>
			
			
			</div>
	
			
			
		<!----------CONTRASEÑA DOCENTE-------------------->
		
		
			<div class="form-group">
			<p>Contraseña</p>
			<span class="icon-case"><img src="img/contrasenia.png" height="15"></span>
				<input type="password" name="password_crea" id="password_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné." required/>
                <div class="validation"></div>
			</div>
			
			
		<!----------TIPO DOCENTE-------------------->
		
			<div class="form-group">
			<p>Tipo</p>
			<span class="icon-case"><img src="img/tipo_usuario.png" height="18"></span>
				
				<select name="tipo_crea">
				<option value="docente">docente</option>
				<option value="admin">admin</option>
				</select>
				
                <div class="validation"></div>
			</div>
			
<!---------------FIN  ZONA DERECHA------------------------>
			
</div>


<div class="form-group">
			<p>Título<span></span></p>
			<span class="icon-case"><img src="img/michi.png" height="20"></span>
                <input type="text" name="titulo_crea" id="titulo_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Sujet' doit être renseigné."required/>
                <div class="validation"></div>
			</div>


	</div>

	<!--------------BOTON CREAR DOCENTE-------------------------------->
 
<button type="submit" name="insert" class="bouton-contact" onclick="valida_envia()">CREAR</button> 

</form>

<!-------------------FIN DE  FORMULARIO PARA CREAR DOCENTE-------------------------------------------------------->

	</div>
	
	
	<!------------------FIN DE ZONA CREAR DOCENTE-------------------------------->
	
	
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>

<!---------ESTA FUNCION PHP INSERTARA EL NUEVO REGISTRO EN LA BASE DE DATOS------------------->

  	<?php
      if(isset($_POST['insert'])){
        $cod=$_POST["codigo_crea"];
        $nombre=$_POST["nombres_crea"];
        $apellido=$_POST["apellidos_crea"];
        $dni=$_POST["dni_crea"];
        $direccion=$_POST["direccion_crea"];
        $email=$_POST["email_crea"];
        $nacimiento=$_POST["fecha_nacimiento_crea"];
        $pass=$_POST["password_crea"];
        $tipo=$_POST["tipo_crea"];
		 $telefono=$_POST["telefono_crea"];
		 
		 $grado_academico=$_POST["grado_academico_crea"];

		$titulo=$_POST["titulo_crea"];

        $insertar="INSERT INTO docente(Cod_docente,interno_docente,nombre,apellido,dni,direccion,tipo,email,fnacimiento,telefono_docente,password,grado_academico,titulo)
         VALUES('$cod',NULL,'$nombre','$apellido','$dni','$direccion','$tipo','$email','$nacimiento','$telefono','$pass','$grado_academico','$titulo')";
		
	   $ejecutar = mysqli_query($con,$insertar);
        if($ejecutar)
		{
		
          ?>
		<script language="JavaScript">
	var page='administrador.php?nombre_admin=<?php echo $cod ?>';
		location.href=page;
		
	</script>
	
	<?php
        }
		
		?>
		
		<?php
      }
     ?>
	 
	 
	 
	  
	<br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br>
	

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
