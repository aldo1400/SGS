<!----------------

EN ESTE ARCHIVO SE MOSTRARAN LOS DATOS DE UN PROFESOR PARA QUE PUEDA SER EDITADO , TAMBIEN MUESTRA LOS CURSOS DEL PROFESOR

------------------------>



<!-------------ESTE ES UN METODO DE SEGURIDAD, YO HE CREADO EN LOGIN.PHP dos variables de sesion, es decir variables que estaran presentes en todos los archivos, las podemos llamar y utilizar su valor, si estas variables estan vacias significa que no se logeo correctamnete el docente o admin, por lo tanto se redirigire a index.html----------------->




<?php

session_start();
session_name('permiso');

if(!$_SESSION)
{
header("location:index.html");

}
$nombre_admin=$_SESSION['nombre_docente'];
?>




<!DOCTYPE html>
<html charset="utf-8">
<?php 

include('conexion.php');


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
                        <a href="index.html">Inicio</a>
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
					<li>
                        <a href="silabos.html">Silabos</a>
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
		
		<div class="contenedor-menu">
		
		
		

 
 


<style type="text/css">   
a:link   
{   
 text-decoration:none;   
}   
</style>



		<li class="btn-menu">Administración<i class="icono fa fa-bars"></i></li>
		<ul class="menu">
		
			<li><a href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?> "><i class="icono izquierda fa fa-home"></i>Mi perfil</a></li>
			
			
			<li><a href="asignaturas.php" title=""><i class="icono izquierda fa fa-home"></i>Asignaturas</a></li>
			
			
			<li><a href="administrador.php?nombre_admin=<?php echo $nombre_admin ?>"><i class="icono izquierda fa fa-home"></i>Crear docente</a></li>
			
			
			<li><a href="#"><i class="icono izquierda fa fa-user"></i>Docentes<i class="icono derecha fa fa-chevron-down"></i></a>
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
		
        <li><a href="revisa_docente.php?nombre_profesor=<?php echo $interno_docente ?>"><img src="img/flecha.png" width="30" height="30" name="flecha">Ing.<?php echo $nombre; ?></a></li>
		
		
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


</div>


<div class="wrapper1234">

<div class="pull-right">
<a href="logout.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a>
</div>

<br>


<?php
$id_profesor = $_GET['nombre_profesor'];//no es el nombre es el id del docente

/* primero selecciono el profesor que quiero analizar  , este dato llegara a este archivo a traves de la variable $nombre_profesor que fue enviada por el metodo get*/
//echo "$nombre_profesor";
?>



<br>
<br>
<br>


<div class="contenedor_presenta">

<!-----------en este zona muestro los datos del profesor seleccionado ------------------------------->
<?php
      $consulta ="SELECT * FROM docente where interno_docente='$id_profesor'";
      $ejecutar= mysqli_query($con,$consulta);
	  
	  $ejecutar2= mysqli_query($con,$consulta);
	  
	  
      $i=0;
      while($fila = mysqli_fetch_array($ejecutar))
      {
        $Cod_docente=$fila['Cod_docente'];
		 $nombre=$fila['nombre'];
		 $apellido=$fila['apellido'];
		 $dni=$fila['dni'];
		 $direccion=$fila['direccion'];
		 $tipo=$fila['tipo'];
		 $email=$fila['email'];
		 $fnacimiento=$fila['fnacimiento'];
		 $telefono=$fila['telefono_docente'];
		 $password=$fila['password'];
		 
		
        $i++;

      ?>
     CODIGO DOCENTE		:	<?php echo $Cod_docente; ?>
	  <BR>
	  NOMBRE DOCENTE 	:	<?php echo  $nombre; ?>
	  <br>
	 APELLIDO		:	<?php echo $apellido; ?>
	  <br>
	  DNI	:	<?php echo $dni; ?>
	  <BR>
	  DIRECCION	:	<?php echo  $direccion; ?>
	  <BR>
	  TIPO		:	<?php echo $tipo; ?>
	  <BR>
	  EMAIL				:	<?php echo $email; ?>
	  <BR>
	  FNACIMIENTO			:	<?php echo $fnacimiento; ?>
	  <BR>
	  TELEFONO			:	<?php echo $telefono; ?>
	  <br>
	  <br>
	  <center>
	  <input  type="button"  value="RECARGAR DATOS" name="boton_recargar" onclick="document.location.reload();" align="center">
	  <!-------boton recargar pagina---------------->
	  <style>
	  .boton_recargar
	  {
	  
	  
	  }
	  </style>
	  </center>
	  <br>
	  <br>

      <?php } ?>
	  
	  
	  <div id="edita">
	  
	  
	 
	 </div>
	 

</div> 


	
	<?php
	$row=mysqli_fetch_array($ejecutar2);
	$codigo_docente2=$row[0];
	/*opcion 1, es decir sin formato clarop
	 if($row=mysqli_fetch_array($ejecutar2))
	 {
	 echo "<form action='' method='post' >";
echo "Codigo docente : <br/> <input type='text' name ='id' value='".$row[0]."'/>";
echo "<br/>";
echo "Nombre docente:<input type='text' name ='nombre' value='".$row[1]."'/>";
echo "<br/>";

echo "<input type='text' name ='nombre' value='".$row[1]."'/>";
echo "<br/>";

echo"<input type='submit' value='Enviar información'>";

echo "</form>";

	 }
	 */
	 ?>
	 
	

<?php

//esta funcion nos ayudara a guardar los cambios de los datos del docente en la base de datos al momento de editarlo
if(isset($_POST['update']))
{
        
		
        $nombre=$_POST["nombres_crea"];
		
        $apellido=$_POST["apellidos_crea"];
        $dni=$_POST["dni_crea"];
		
        $direccion=$_POST["direccion_crea"];
		
        $email=$_POST["email_crea"];
		
        $fnacimiento=$_POST["fecha_nacimiento_crea"];
		

        $tipo=$_POST["tipo_crea"];
		
		$telefono=$_POST["telefono_crea"];
		
		
		$actualizar="UPDATE docente set nombre='$nombre',apellido='$apellido',dni='$dni',direccion='$direccion',
		tipo='$tipo',email='$email',fnacimiento='$fnacimiento',telefono_docente='$telefono'

		WHERE Cod_docente='$codigo_docente2'";
		
		
		$ejecutar3=mysqli_query($con,$actualizar);

      }?>
		
	
	  
	  <?php
	  
	  ?>
	  
	 
<br><br>
	<br>
	<br>
	
	<!---------------estilo del menu desplegable---------------------------------------->
	
	<style>
	
	.panel-group .panel {
        border-radius: 0;
        box-shadow: none;
        border-color: #EEEEEE;
		width:60%;
    }

    .panel-default > .panel-heading {
      
		padding: 0;
        border-radius: 0;
        color: #212121;
        background-color: #FAFAFA;
        border-color: #EEEEEE;
    }

    .panel-title {
        font-size: 14px;
    }

    .panel-title > a {
        display: block;
        padding: 15px;
        text-decoration: none;
    }

    .more-less {
        float: right;
        color: #212121;
    }

    .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #EEEEEE;
    }

	
	</style>
	
	
	<!----------------script del menu desplegable-------------->
	<script>
	function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
	
	</script>
	
	
	<!----------Esta zona es el menu desplegable donde se encuentra el editar docente y donde salen  los cursos que él dicta(dentro de ellos saldra su sumilla y la fecha de entrega)------------>
	
	
	<div class="container demo">

    
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        Editar profesor
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              
				<div class="panel-body">
				
				<?php  ?>
				
	 <form action=" " method="post" class="CREACION_PENDIENTE">
	    <h1><center>EDITAR PROFESOR</center></h1>

    <div class="contentform">
    	<div id="sendmessage"> Has creado correctamente al docente </div>
    	<div class="leftcontact">

		
		<div class="form-group">
			<label class="control-label col-sm-4" for="CODIGO_DOCENTE">Codigo docente:</label>
			<div class="col-sm-4">
			<p class="form-control-static"><?php echo $row[0]; ?></p>
			</div>
		</div>

			<div class="form-group">
            <p>Nombres <span>*</span></p>
            <span class="icon-case"><img src="img/male.png" height="15"><i class="fa fa-user"></i></span>
				<input type="text" name="nombres_crea" id="nombres_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné." value="<?php echo $row[2] ?>" required/>
                <div class="validation"></div>
			</div>

			      <div class="form-group">
			        <p>Apellidos<span>*</span></p>
			        <span class="icon-case"><img src="img/male.png" height="15"><i class="fa fa-male"></i></span>
				        <input type="text" name="apellidos_crea" id="apellidos_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné." value="<?php echo $row[3] ?>" required/>
                <div class="validation"></div>
       </div>



			<div class="form-group">
			<p>DNI <span>*</span></p>
			<span class="icon-case"><img src="img/dni.svg" height="18"><i class="fa fa-home"></i></span>
				<input type="text" name="dni_crea" id="dni_crea" data-rule="maxlen:8" required pattern="[0-9]{8}"  data-msg="Vérifiez votre saisie sur les champs : Le champ 'Société' doit être renseigné." value="<?php echo $row[4] ?>"/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Dirección <span>*</span></p>
			<span class="icon-case"><img src="img/direccion_fisica.png" height="15"><i class="fa fa-location-arrow"></i></span>
				<input type="text" name="direccion_crea" id="direccion_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné." value="<?php echo $row[5] ?>" required />
                <div class="validation"></div>
			</div>

			
			<div class="form-group">
			<p>Tipo<span>*</span></p>
			<span class="icon-case"><img src="img/tipo_usuario.png" height="18"><i class="fa fa-phone"></i></span>
				<select name="tipo_crea" id="tipo_crea"  required />
				<option value="<?php echo $row[5];?>"><?php echo $row[6];?></option>
				<option value="docente">docente</option>
				<option value="admin">admin</option>
				</select>

                <div class="validation"></div>
			</div>
			
			

			
			<div class="form-group">
			<p>E-mail <span>*</span></p>
			<span class="icon-case"><img src="img/message_icon.png" height="15"><i class="fa fa-envelope-o"></i></span>
                <input type="email" name="email_crea" id="email_crea" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire." value="<?php echo $row[7] ?>" required />
                <div class="validation"></div>
			</div>

			


	</div>

	<div class="rightcontact">
			
			<div class="form-group">
			<p>Fecha Nacimiento <span>*</span></p>
			<span class="icon-case"><img src="img/nacimiento.png" height="18"><i class="fa fa-map-marker"></i></span>
				<input type="text" name="fecha_nacimiento_crea" id="fecha_nacimiento_crea" placeholder="dd-mm-aaaa" required pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné." value="<?php echo $row[8] ?>"/>
                <div class="validation"></div>
			</div>
			
			
	<div class="form-group">
			<p>Telefono <span>*</span></p>
			<span class="icon-case"><img src="img/direccion_fisica.png" height="15"><i class="fa fa-location-arrow"></i></span>
				<input type="text" name="telefono_crea" id="telefono_crea" data-rule="required" required pattern="[0-9]*" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné." value="<?php echo $row[10] ?>" required />
                <div class="validation"></div>
			</div>
			
			
			
			
			<!----------------------------------------------------PASSWORD---------------------------
			<div class="form-group">
			<p>Contraseña <span>*</span></p>
			<span class="icon-case"><img src="img/contraseña.png" height="15"><i class="fa fa-building-o"></i></span>
				<input type="text" name="password_crea" id="password_crea" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné." value="<?php echo $row[10] ?>"  required/>
                <div class="validation"></div>
			</div>
			------------------------------------>
			
	</div>
	</div>


<button type="submit" name="update" class="bouton-contact">Guardar cambios</button>


</form>
				
                    
                
				<!----------------------FIN DE AREA DOCENTE------------------------------------------->
				
				</div>
            </div>
        </div>
		<?php
		
		
		
		//En esta zona haremos que se creen tantos submenus como cursos tenga el docente seleecionado, por ejemplo si el docnete tiene 6 cursos asignados , aparecen 6 submenus con los nombre de los cursos, de maner dinamica.
		include('conexion.php');
		$CONSULTAR_CURSOS="select * from docente inner join dicta on docente.interno_docente=dicta.interno_docente inner join asignatura on dicta.cod_asignatura=asignatura.cod_asignatura where docente.interno_docente='$id_profesor'";
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
            </div>
        </div>
		<?php } ?>
		
		<!----------fin de submenus de cursos--------------------->
		
		

    </div><!-- panel-group -->
    
    
</div><!-- container -->
	
	
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