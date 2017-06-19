<!DOCTYPE html>
<html lang="en">

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
    <div class="address-bar">Sistema de acceso para editar sílabos</div>

    <!-- Navigation -->
    

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
  <li><a href="admin.php" title=""><img src="img/viñeta.png" width="30" height="30">Mi perfil</a></li>
  <li><a href="#" title=""><img src="img/viñeta.png" width="30" height="30">Asignaturas</a></li>
 </ul>
</div>


<br>
<br>
<br>
<br>

<div id="menu">
 <ul>
 <br>
  <li><img src="img/computadoralogo.png" width="40" height="35">    DOCENTES<li>
  <br>
  
  <li><a href="#" title=""><img src="img/viñeta.png" width="30" height="30">Ing.Edwin Hinojosa</a></li>
  <li><a href="#" title=""><img src="img/viñeta.png" width="30" height="30">Ing.Edgar Taya</a></li>
  <li><a href="#" title=""><img src="img/viñeta.png" width="30" height="30">Ing.Karin Supo</a></li>
  <li><a href="#" title=""><img src="img/viñeta.png" width="30" height="30">Ing.Ana Cori</a></li>
 </ul>
</div>	


<style>

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



</style>

	
	</div>
	
	
	<div class="wrapper1234">
	
	
	
	<form action="CREAR_BASE.php" method="post" class="CREACION_PENDIENTE">
	    <h1><center>CREAR PROFESOR</center></h1>
	    
    <div class="contentform">
    	<div id="sendmessage"> Has creado correctamente al docente </div>


    	<div class="leftcontact">
		
		<div class="form-group">
			<p>Código docente <span>*</span></p>	
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
			<span class="icon-case"><img src="img/contraseña.png" height="15"><i class="fa fa-building-o"></i></span>
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
			
			--------------------->
	</div>
	</div>
	
	
<button type="submit" class="bouton-contact">CREAR</button>
	
</form>	


	
	</div>
	
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
