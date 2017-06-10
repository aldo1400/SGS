<!----------------
EN ESTE ARCHIVO SE MOSTRARA A LAS ASIGNATURAS ORDENADAS POR SEMESTRE Y AÑO ACADEMICO
------------------------>



<!-------------ESTE ES UN METODO DE SEGURIDAD, YO HE CREADO EN LOGIN.PHP dos variables de sesion, es decir variables que estarna presentes en todos los archivos, las podemos llamar y utilizar su valor, si estas variables estan vacias significa que no se logeo correctamnete el docente o admin, por lo tanto se redirigire a index.html----------------->


<?php

session_start();
session_name('permiso');

if(!$_SESSION)
{
header("location:index.html");

}
/*prueba de header si no funciona ver */

$nombre_admin=$_SESSION['nombre_docente'];
?>


<!DOCTYPE html>
<html charset="utf-8">
<?php 

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
		

		<br>
		<br>
		
<!--------------------MENU MI PERFIL, ASIGNATURAS---------------------------------------->

	<div id="menu">
		<ul>
		<br>
		<li><img src="img/computadoralogo.png" width="40" height="35">     NAVEGACIÓN<li>
		<BR>
  
		<li><a href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?>" title=""><img src="img/flecha.png" width="30" height="30">Mi perfil</a></li>
		<li><a href="asignaturas.php" title=""><img src="img/flecha.png" width="30" height="30">Asignaturas</a></li>
		</ul>
	</div>

<!--------------------FIN DE MENU MI PERFIL, ASIGNATURAS---------------------------------------->
<br>
<br>

<!------------------------------MENU LATERAL DOCENTES  ------------------------------------------------->

	<div id="menu">
		<ul>
		<br>
		<li><img src="img/computadoralogo.png" width="40" height="35">    DOCENTES<li>
		<li><a href="administrador.php" title=""><img src="img/viñeta.png" width="30" height="30">Crear docente</a></li>  
		</ul>
	</div>

<!------------------------------FIN DE MENU LATERAL DOCENTES  ------------------------------------------------->

<!---------------MENU DONDE APARECEN LA LISTA DE DOCENTES--------------------------------->
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

        <li><a href="revisa_docente.php?nombre_profesor=<?php echo $nombre ?>" title=""><img src="img/flecha.png" width="30" height="30">Ing.<?php echo $nombre; ?></a></li>
        </ul>
      </div>

      <?php } ?>

	<!---------------FIN DE MENU DONDE APARECEN LA LISTA DE DOCENTES--------------------------------->  

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

<!-----------LINK CERRAR SESION--------->

<a href="logout.php" class="btn btn-default btn-xs active" role="button">Cerrar sesión</a>
<br>
<br>
<br>

<!-----------------
<form action=" " method="post" class="CREACION_PENDIENTE2">
<p>Semestre acádemico<span>*</span></p>
            <span class="icon-case"><img src="img/male.png" height="15"><i class="fa fa-user"></i></span>
				<input type="text" name="curso" id="curso" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
                <div class="validation"></div>
				<BR>
				<BR>
				<BR>
	ESCRIBA "I" Y PRESIONE ENTER PARA VER CURSOS DEL PRIMER SEMESTRE
	<BR>
	ESCRIBA "II" Y PRESIONE ENTER PARA VER CURSOS DEL SEGUNDO SEMESTRE	
</form>

----------------------->


<!------Aqui se encuentra el combobox, donde el docente selecciona el semestre academico, donde esta la asignatura que necesita----------->

	<form action=" " method="post" class="CREACION_PENDIENTE2">
	
	<div class="form-group">
<p>Seleccione Semestre acádemico<span>*</span></p>
            <span class="icon-case"><img src="img/male.png" height="15"><i class="fa fa-user"></i></span>
				<select name="curso">
					<option value="" ></option>		
					<!------option 2017 I-------->
					<option value="I">2017-I</option>
					<!------option 2017 II-------->
					<option value="II">2017-II</option>
				</select>
				
                <div class="validation"></div>
				</div>
				
				<!---------boton buscar --------------------->
				
<button type="submit" name="SEMESTRE" class="bouton-contact">BUSCAR</button>

<button type="button" class="btn btn-info">CREAR ASIGNATURA</button>



				<BR>
				<BR>
				
</form>

<!------Fin del combobox, donde el docente selecciona el semestre academico, donde esta la asignatura que necesita----------->





		
<BR>
<BR>
<?PHP //con esto indicas que empiezas a insertar codigo php

$link_valor=$_POST['curso']; //recibo la variable que escogio el docente

// En esta zona verifico que valor ha escogido el docente si primer semestre o segundo semestre

if($link_valor=='I')//si selecciono primer semestre
{

      $consulta ="SELECT * FROM asignatura where semestre_academico='I'";
      $ejecutar= mysqli_query($con,$consulta);
	  $repeticion=1;
      $i=0;
	  
	  //En esta zona separo los cursos que sean del primer semestre academico por año, colocando un mensaje de primer año,segundo año,etc.
	  
      while($fila = mysqli_fetch_array($ejecutar))
      {
       //en este caso usare 2 variables
	   if($fila['ciclo_academico']=='Primer ciclo' and $repeticion==1)
	  {
			echo 'Primer año';
			$repeticion++;
			
	  }
	  else
	  
	  {
		if($fila['ciclo_academico']=='Tercer ciclo' and $repeticion==2)
			{
				echo 'Segundo año';
				$repeticion++;
			}	
		else
		{
			if($fila['ciclo_academico']=='Quinto ciclo' and $repeticion==3)
			{
				echo 'Tercer año';
				$repeticion++;
			}
			else
			{
				if($fila['ciclo_academico']=='Séptimo ciclo' and $repeticion==4)
				{
					echo 'Cuarto año';
					$repeticion++;
				}	
				else
				{
					if($fila['ciclo_academico']=='Noveno ciclo' and $repeticion==5)
					{
						echo 'Quinto año';
						$repeticion++;
					}
					else
					{
					
					}
				}
			}
		}			
	  }
	  
		 
		$nombre2=$fila['nomb_asignatura'];
;
        $i++;
      ?>
	  
	  <!-------------MUESTRO EN PANTALLA LOS CURSOS DEL PRIMER SEMESTRE COMO LINKS--------------------------->
	  
	  
      <div id="menu">
       <ul>

</a>
        
<li><a href="curso.php?nombre_curso_enviado=<?php echo $nombre2 ?>"><img src="img/flecha.png" width="30" height="30"><?php echo $nombre2; ?></a></li>

        <!-----------
        <li><a href="<?PHP ECHO $nombre2?>.php" title=""><img src="img/flecha.png" width="30" height="30"><?php echo $nombre2; ?></a></li>

        ----------------->
        </ul>
      </div>

      <?php 
	  
		//} 
		
		
	  //else{}
	  
	  }
	  ?>
	  
	  
<?
}

else

{
if($link_valor=='II')//SI SELECCIONO SEGUNDO SEMESTRE ACADEMICO
{

      $consulta ="SELECT * FROM asignatura where semestre_academico='II'";
      $ejecutar= mysqli_query($con,$consulta);
	  $repeticion=1;
      $i=0;
	  
	  // EN ESTA ZONA SEPARO LOS CURSOS DEL SEGUNDO SEMESTRE ACADEMICO POR AÑO CON UN MENSAJE DE PRIMER AÑO, SEGUNDO AÑO,ETC
	  
      while($fila = mysqli_fetch_array($ejecutar))
      {
		
		if($fila['ciclo_academico']=='Segundo ciclo' and $repeticion==1)
	  {
			echo 'Primer año';
			$repeticion++;
			
	  }
	  else
	  
	  {
		if($fila['ciclo_academico']=='Cuarto ciclo' and $repeticion==2)
			{
				echo 'Segundo año';
				$repeticion++;
			}	
		else
		{
			if($fila['ciclo_academico']=='Sexto ciclo' and $repeticion==3)
			{
				echo 'Tercer año';
				$repeticion++;
			}
			else
			{
				if($fila['ciclo_academico']=='Octavo ciclo' and $repeticion==4)
				{
					echo 'Cuarto año';
					$repeticion++;
				}	
				else
				{
					if($fila['ciclo_academico']=='Decimo ciclo' and $repeticion==5)
					{
						echo 'Quinto año';
						$repeticion++;
					}
					else
					{
					
					}
				}
			}
		}			
	  }

			
			


	   $nombre3=$fila['nomb_asignatura'];
        $i++;
//MUESTRO LOS CURSOS QUE CORRESPONDEN AL SEGUNDO SEMESTRE ACADEMICO COMO LINKS
      ?>
      <div id="menu">
       <ul>

        <li><a href="curso.php?variable1=<?php echo $nombre3 ?>"><img src="img/flecha.png" width="30" height="30"><?php echo $nombre3; ?></a></li>
        </ul>
      </div>

      <?php } ?>
	  
	  <?
}
} 
?>

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
