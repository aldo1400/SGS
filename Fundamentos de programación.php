<!DOCTYPE html>
<html charset="utf-8">
<?php $con= mysqli_connect("localhost","u122483761_esis","123456","u122483761_dos") or die("error");
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

    <div class="brand"><img src="img/logounjbg.png" width="200" height="200">UNIVERSIDAD NACIONAL JORGE BASADRE GROHMANN</div>
    <div class="address-bar">Sistema de acceso para editar silabus</div>

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
                <a class="navbar-brand" href="index.html">UNJBG</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">Noticias</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="contact.html">Contactanos</a>
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
		<!-- Titulo -->
		<!-- Formulario -->

		<br>
		<br>

		<div id="menu">
 <ul>
 <br>
 <li><img src="img/computadoralogo.png" width="40" height="35">     NAVEGACIÓN<li>
 <BR>
  <!----<li><a href="#" title="" name="link_no_util"><img src="img/computadoralogo.png" width="40" height="35">Navegación</a></li>---->
  <li><a href="administrador0.php" title=""><img src="img/flecha.png" width="30" height="30">Mi perfil</a></li>
  <li><a href="asignaturas.php" title=""><img src="img/flecha.png" width="30" height="30">Asignaturas</a></li>
 </ul>
</div>


<br>
<br>


<div id="menu">
 <ul>
 <br>
  <li><img src="img/computadoralogo.png" width="40" height="35">    DOCENTES<li>
  <li><a href="administrador.php" title=""><img src="img/viñeta.png" width="30" height="30">Crear docente</a></li>
  
  
 </ul>
</div>


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
        $insertar="INSERT INTO docente(Cod_docente,nombre,apellido,dni,direccion,tipo,email,fnacimiento,password)
         VALUES('$cod','$nombre','$apellido','$dni','$direccion','$tipo','$email','$nacimiento','$pass')";
        $ejecutar = mysqli_query($con,$insertar);
        if($ejecutar){
          echo "";
        }
      }
     ?>

     <?php
      $consulta ="SELECT * FROM docente";
      $ejecutar= mysqli_query($con,$consulta);
      $i=0;
      while($fila = mysqli_fetch_array($ejecutar))
      {
        $nombre=$fila['nombre'];
        $i++;

      ?>
      <div id="menu">
       <ul>

        <li><a href="#" title=""><img src="img/flecha.png" width="30" height="30">Ing.<?php echo $nombre; ?></a></li>
        </ul>
      </div>

      <?php } ?>

	  

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

<!--

	<form action="administrador.php" method="post" class="CREACION_PENDIENTE">
	    <h1><center>CREAR PROFESOR</center></h1>

    <div class="contentform">
    	<div id="sendmessage"> Has creado correctamente al docente </div>


    	<div class="leftcontact">

		<div class="form-group">
			<p>Codigo docente <span>*</span></p>
			<span class="icon-case"><i class="fa fa-comment-o"></i></span>
                <input type="text" name="codigo_crea" id="codigo_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Sujet' doit être renseigné."/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
            <p>Nombres <span>*</span></p>
            <span class="icon-case"><img src="img/male.png" height="15"><i class="fa fa-user"></i></span>
				<input type="text" name="nombres_crea" id="nombres_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
                <div class="validation"></div>
			</div>

			      <div class="form-group">
			        <p>Apellidos<span>*</span></p>
			        <span class="icon-case"><img src="img/male.png" height="15"><i class="fa fa-male"></i></span>
				        <input type="text" name="apellidos_crea" id="apellidos_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
                <div class="validation"></div>
       </div>



			<div class="form-group">
			<p>DNI <span>*</span></p>
			<span class="icon-case"><img src="img/dni.svg" height="18"><i class="fa fa-home"></i></span>
				<input type="text" name="dni_crea" id="dni_crea" data-rule="maxlen:8" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Société' doit être renseigné."/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Dirección <span>*</span></p>
			<span class="icon-case"><img src="img/direccion_fisica.png" height="15"><i class="fa fa-location-arrow"></i></span>
				<input type="text" name="direccion_crea" id="direccion_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné."/>
                <div class="validation"></div>
			</div>


			<div class="form-group">
			<p>E-mail <span>*</span></p>
			<span class="icon-case"><img src="img/message_icon.png" height="15"><i class="fa fa-envelope-o"></i></span>
                <input type="email" name="email_crea" id="email_crea" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Fecha Nacimiento <span>*</span></p>
			<span class="icon-case"><img src="img/nacimiento.png" height="18"><i class="fa fa-map-marker"></i></span>
				<input type="text" name="fecha_nacimiento_crea" id="fecha_nacimiento_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."/>
                <div class="validation"></div>
			</div>


	</div>

	<div class="rightcontact">

			<div class="form-group">
			<p>Contraseña <span>*</span></p>
			<span class="icon-case"><img src="img/pass.png" height="15"><i class="fa fa-building-o"></i></span>
				<input type="password" name="password_crea" id="password_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Tipo<span>*</span></p>
			<span class="icon-case"><img src="img/tipo_usuario.png" height="18"><i class="fa fa-phone"></i></span>
				<input type="text" name="tipo_crea" id="tipo_crea" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                <div class="validation"></div>
			</div>
<!-----
			<div class="form-group">
			<p>Function <span>*</span></p>
			<span class="icon-case"><i class="fa fa-info"></i></span>
                <input type="text" name="fonction" id="fonction" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Fonction' doit être renseigné."/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Company Address <span>*</span></p>
			<span class="icon-case"><i class="fa fa-location-arrow"></i></span>
				<input type="text" name="adresse" id="adresse" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné."/>
                <div class="validation"></div>
			</div>


			<div class="form-group">
			<p>Message <span>*</span></p>
			<span class="icon-case"><i class="fa fa-comments-o"></i></span>
                <textarea name="message" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
                <div class="validation"></div>
			</div>

			---------------------><!--
	</div>
	</div>


<button type="submit" name="insert" class="bouton-contact">CREAR</button>

</form>

-->

</div>


<div class="wrapper1234">
<a href="logout.php" class="link_cerrar_sesion">Cerrar sesión</a>
<br>
<br>
<br>


<div class="contenedor_presenta">

<?php
      $consulta ="SELECT * FROM asignatura where nomb_asignatura='Fundamentos de programación'";
      $ejecutar= mysqli_query($con,$consulta);
      $i=0;
      while($fila = mysqli_fetch_array($ejecutar))
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
		 
		
        $i++;

      ?>
      NOMBRE DEL CURSO 		:	<?php echo $nombre; ?>
	  <BR>
	  HORAS DE PRACTICA 	:	<?php echo $horas_practica; ?>
	  <br>
	  PRE-REQUISITO			:	<?php echo $pre_requisito; ?>
	  <br>
	  NUMERO DE CREDITOS	:	<?php echo $nro_creditos; ?>
	  <BR>
	  SEMESTRE ACADEMICO	:	<?php echo $semestre_academico; ?>
	  <BR>
	  CODIGO ASIGNATURA		:	<?php echo $cod_asignatura; ?>
	  <BR>
	  FACULTAD				:	<?php echo $facultad; ?>
	  <BR>
	  HORAS TEORIA			:	<?php echo $horas_teoria; ?>
	  <BR>
	  HORAS LABORATORIO		:	<?PHP echo $horas_laboratorio; ?>
      <br>  
	  DOCENTES				:	<A HREF="#">Agregar</A>  <!---AQUI COLOCAN LA VENTANA EMERGENTE----------->
	  <br>
	  SUMILLA 				:    <A HREF="#">Agregar</A>  <!---AQUI COLOCAN LA SUMILLA----------->

      <?php } ?>
	  
	 

</div> 

	</div>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>



  
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
                        <small>BIENVENIDOS</small>
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