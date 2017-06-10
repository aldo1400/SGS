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
header("location:index.html");

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

		
		<!------------------------------MENU DE NAVEGACION DOCENTE, MI PERFIL Y ASIGNATURAS------------------------->
		
		<div id="menu">
 <ul>
 <br>
 <li><img src="img/computadoralogo.png" width="40" height="35">     NAVEGACIÓN<li>
 <BR>
  <!----<li><a href="#" title="" name="link_no_util"><img src="img/computadoralogo.png" width="40" height="35">Navegación</a></li>---->
  <li><a href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?> "><img src="img/flecha.png" width="30" height="30">Mi perfil</a></li>
  <li><a href="asignaturas.php" title=""><img src="img/flecha.png" width="30" height="30">Asignaturas</a></li>
 </ul>
</div>

<!------------------------------FIN DE MENU DE NAVEGACION DOCENTE, MI PERFIL Y ASIGNATURAS------------------------->


<br>
<br>

<!-----------------------MENU LISTA DE DOCENTES Y CREAR DOCENTE------------------->

<div id="menu">
 <ul>
 <br>
 
  <li><img src="img/computadoralogo.png" width="40" height="35">    DOCENTES<li> 
  
     <!-------LINK CREAR DOCENTE---->
   <li><a href="administrador.php" title=""><img src="img/viñeta.png" width="30" height="30">Crear docente</a></li> 


 </ul>
</div>

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
 
<a href="logout.php" class="link_cerrar_sesion">Cerrar sesión</a>
<br>
	<br>
	<br>

	
	<!-------------------FORMULARIO PARA CREAR DOCENTE----------------------------------------------------------->
	
	<!-----------Metodo de envio POST----------------->
	
	
	<form action="#" method="post" class="CREACION_PENDIENTE"  >
	    <h1><center>CREAR ASIGNATURA</center></h1>

    <div class="contentform">
    	<div id="sendmessage"> Has creado correctamente al docente </div>

<!------------el formulario esta dividido en dos zonas, la primera zona que vamos a ver es la izquierda----------------------------->

		
			<br>
	<label class="control-label col-sm-4" for="email" align="left"> Nombre asignatura:</label>
	
	<br>
	<br>
	
<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="nomb_asignatura_crea" type="text" class="form-control" name="nomb_asignatura_crea" placeholder="Nombre Curso"   required >
    </div>
	
	<br>
	
	<label class="control-label col-sm-4" for="email" align="left" >Horas practica:</label>
	<br>
	<br>
	
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="horas_practica_crea" type="text" class="form-control" name="horas_practica_crea" required pattern="[0-9]" placeholder="Horas practica" required>
    </div>
	
	<br>
	
	<label class="control-label col-sm-4" for="email" align="left" >Pre requisito:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="pre_requisito_crea" type="text" class="form-control" name="pre_requisito_crea" placeholder="Pre requisito"  required>
    </div>
	<br>
	
	
	<label class="control-label col-sm-4" for="email" align="left" >Numero de creditos:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="nro_creditos_crea" type="text" class="form-control" name="nro_creditos_crea" required pattern="[0-9]" placeholder="# creditos" required>
    </div>
	<br>
	
	<label class="control-label col-sm-4" for="email" align="left" >Semestre:</label>
	<br>
	<br>
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="semestre_academico_crea" type="text" class="form-control" name="semestre_academico_crea" placeholder="Semestre " required>
    </div>
	<br>
	
	<label class="control-label col-sm-4" for="email" align="left" >Codigo asignatura:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="cod_asignatura_crea" type="text" class="form-control" name="cod_asignatura_crea" placeholder="codigo asignatura" required>
    </div>
	<br>
	
	<label class="control-label col-sm-4" for="email" align="left" >Ciclo academico:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="ciclo_academico_crea" type="text" class="form-control" name="ciclo_academico_crea" placeholder="Ciclo academico" required>
    </div>
	<br>
	
	<label class="control-label col-sm-4" for="email" align="left" >Facultad:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
	  <select name="facultad_crea" id="facultad_crea" class="form-control" required >
				
				<option>Elige facultad</option>
				<option value="FAIN">FAIN</option>
				<option value="FACI">FACI</option>
				</select>
			
    </div>
	<br>
	<!----<p>Tipo</p>----->
	
	<label class="control-label col-sm-4" for="email" align="left" >Horas teoria:</label>
	<br>
	<br>
	
	<div class="input-group ">
	
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="horas_teoria_crea" type="text" class="form-control" name="horas_teoria_crea" placeholder="Horas teoria" required>
    </div>
	<br>
	
	<label class="control-label col-sm-4" for="email" align="left">Escuela crea :</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="escuela_crea" type="text" class="form-control" name="escuela_crea" placeholder="Escuela" required>
    </div>
	<br>
	
	<label class="control-label col-sm-4" for="email" align="left" >Horas laboratorio:</label>
	<br><br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="horas_laboratorio_crea" type="text" class="form-control" name="horas_laboratorio_crea" placeholder="horas laboratorio" required>
    </div>
	

<!---------------INICIO ZONA DERECHA------------------------->
	</div>

	<!--------------BOTON CREAR DOCENTE---------------------------------->
 
<button type="submit" name="insert_asignatura" class="bouton-contact" >CREAR</button> 


</form>

<!-------------------FIN DE  FORMULARIO PARA CREAR DOCENTE----------------------------------------------------------->

	</div>
	
	
	<!------------------FIN DE ZONA CREAR DOCENTE-------------------------------->
	
	
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>

<!---------ESTA FUNCION PHP INSERTARA EL NUEVO REGISTRO EN LA BASE DE DATOS------------------->

  	<?php
	include('conexion.php');//CADENA DE CONEXION

      if(isset($_POST['insert_asignatura']))
	  {
        $nomb_asignatura=$_POST["nomb_asignatura_crea"];
		echo $nomb_asignatura;
        $horas_practica=$_POST["horas_practica_crea"];
		echo $horas_practica;
        $pre_requisito=$_POST["pre_requisito_crea"];
		echo $pre_requisito;
        $nro_creditos=$_POST["nro_creditos_crea"];
		echo $nro_creditos;
        $semestre_academico=$_POST["semestre_academico_crea"];
		echo $semestre_academico;
        $cod_asignatura=$_POST["cod_asignatura_crea"];
		echo $cod_asignatura;
        $ciclo_academico=$_POST["ciclo_academico_crea"];
		echo $ciclo_academico;
        $facultad=$_POST["facultad_crea"];
		echo $facultad;
        $horas_teoria=$_POST["horas_teoria_crea"];
		echo $horas_teoria;
		$escuela=$_POST["escuela_crea"];
		echo $escuela;
		$horas_laboratorio=$_POST["horas_laboratorio_crea"];
		echo $horas_laboratorio;
		
        $insertar_asig="INSERT INTO asignatura(nomb_asignatura,horas_practica,pre_requisito,nro_creditos,semestre_academico,cod_asignatura,ciclo_academico,facultad,horas_teoria,escuela,horas_laboratorio)
         VALUES('$nomb_asignatura','$horas_practica','$pre_requisito','$nro_creditos','$semestre_academico','$cod_asignatura','$ciclo_academico','$facultad','$horas_teoria','$escuela','$horas_laboratorio')";
        $ejecutar = mysqli_query($con,$insertar_asig);
        if($ejecutar){
          echo "fallo";
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



        <li><a href="revisa_docente.php?nombre_profesor=<?php echo $nombre ?>" title=""><img src="img/flecha.png" width="30" height="30">Ing.<?php echo $nombre; ?></a></li>
        </ul>
      </div>

      <?php } ?>

	<br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br>


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
