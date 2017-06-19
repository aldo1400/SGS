<!----------------
EN ESTE ARCHIVO SE MOSTRARA A LAS ASIGNATURAS ORDENADAS POR SEMESTRE Y AÑO ACADEMICO
------------------------>



<!-------------ESTE ES UN METODO DE SEGURIDAD, YO HE CREADO EN LOGIN.PHP dos variables de sesion, es decir variables que estarna presentes en todos los archivos, las podemos llamar y utilizar su valor, si estas variables estan vacias significa que no se logeo correctamnete el docente o admin, por lo tanto se redirigire a index.html----------------->


<?php

session_start();
session_name('permiso');

if(!$_SESSION)
{
header("location:index.php");

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
	
 <link href="css/style_admin_creacion_asignatura.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	
<style>
body {
    font-family: 'Roboto';font-size: 16px;
}
</style>

	
	
	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




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

session_start();
session_name('permiso');

if(!$_SESSION)
{
?>
						<a class="navbar-brand" href="index.php">unjbg</a>
                        
                    
<?
}
else
{

if(!$_SESSION['nombre_docente'])
{
$nombre_docente_verificado=$_SESSION['nombre_doc'];
?>
						<a class="navbar-brand" href="docente.php?nombre_doc=<?php echo $nombre_docente_verificado ?>"><?php echo $nombre_docente_verificado ?></a>
                       
                    
<?					
}
else
{
$nombre_admin=$_SESSION['nombre_docente'];
?>

					<a class="navbar-brand" href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?>"><?php echo $nombre_admin ?></a>
                        
						
                    

<?
}

}
?>


				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?> ">Mi perfil</a>
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
			
			
			<li><a href="asignaturas.php" title=""><i class="icono izquierda fa fa-home"></i>Plan de estudios</a></li>
			
			
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
		
        <li style="text-align:left;" ><a href="revisa_docente.php?nombre_profesor=<?php echo $interno_docente ?>"><img src="img/flecha.png" width="30" height="30" name="flecha">Ing.<?php echo $nombre; ?></a></li>
		
		
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
		
		
		
<!--------------------MENU MI PERFIL, ASIGNATURAS---------------------------------------->

	

<!--------------------FIN DE MENU MI PERFIL, ASIGNATURAS---------------------------------------->
<br>
<br>

<!------------------------------MENU LATERAL DOCENTES  ------------------------------------------------->


<!------------------------------FIN DE MENU LATERAL DOCENTES  ------------------------------------------------->

<!---------------MENU DONDE APARECEN LA LISTA DE DOCENTES--------------------------------->
	  
	  
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

<div class="pull-left">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>  Crear asignatura</button>

</div>
<div class="pull-right">
<a href="logout.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a>
</div>

<br>
<br>

	<form action=" " method="post" class="form-inline" role="form">
	<br>
	
			<label class="control-label col-sm-5" for="email" align="left" >Seleccione Semestre acádemico</label>
		
		<div class="input-group col-sm-3 " >
			<select name="curso">
					<option value="" ></option>		
					<!------option 2017 I-------->
					<option value="I">2017-I</option>
					<!------option 2017 II-------->
					<option value="II">2017-II</option>
				</select>
			
		
		</div>
<button style="position: relative; bottom: 8px" type="submit" name="SEMESTRE" class="btn btn-success btn-lg">BUSCAR</button>

</form>


<?PHP //con esto indicas que empiezas a insertar codigo php

$link_valor=$_POST['curso']; //recibo la variable que escogio el docente


// En esta zona verifico que valor ha escogido el docente si primer semestre o segundo semestre

if($link_valor=='I')//si selecciono primer semestre
{

      $consulta ="SELECT * FROM asignatura where semestre_academico='I' order by cod_asignatura ASC";
      $ejecutar= mysqli_query($con,$consulta);
	  $repeticion=1;
      $i=0;
	  
	  //En esta zona separo los cursos que sean del primer semestre academico por año, colocando un mensaje de primer año,segundo año,etc.
	  
	  ?>
	  <div class="container" style="width:700px;">  
                 
                <br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">
                          
						  <tr>  
                               <th width="60%">Nombre asignatura</th>  
                               <!------<th width="20%">Vista</th> ------------>
							   <th width="20%">Editar</th> 
                          </tr>  
						  
						  
                          <?php  
						  $indice_asi=0;
						  while($indice_asi<1)
						  {
						  
						  ?> <tr> <th> <?php echo  'Primer año';?> </th> </tr>
						  <?php 
                          while($fila = mysqli_fetch_array($ejecutar))  
                          {  
						  
								 
									
								if($fila['ciclo_academico']=='Primer ciclo' )
								{
									
										$nombre2=$fila['nomb_asignatura'];
										$cod_asig=$fila['cod_asignatura'];
										?>  
                          <tr>  
                               
							   
							   <td width="60%"><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_editar">editar</button></td>
                          </tr>  
                          <?php  
										
								}
								else
								{}
							}
							
							
						?> <tr> <th > <?php echo  'Segundo año';?>  </th> </tr> <?php 
						
						
							 $consulta ="SELECT * FROM asignatura where semestre_academico='I' order by cod_asignatura ASC";
								$ejecutar= mysqli_query($con,$consulta);
	  
								
						while($fila = mysqli_fetch_array($ejecutar))
						{
							if($fila['ciclo_academico']=='Tercer ciclo')
							{
								
								$nombre2=$fila['nomb_asignatura'];
								
										$cod_asig=$fila['cod_asignatura'];
									?>  
                          <tr>  
                               
							   
							   <td width="60%"><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_editar">editar</button></td>

						 
                          </tr>  
                          <?php  
						  
								
							}
							else
							{}
						
						}
						?> <tr> <th> <?php echo  'Tercer año';?> </th> </tr> <?php 
						 $consulta ="SELECT * FROM asignatura where semestre_academico='I' order by cod_asignatura ASC";
								$ejecutar= mysqli_query($con,$consulta);
								
									
						while($fila = mysqli_fetch_array($ejecutar))  
                          {  
						  
	   
								if($fila['ciclo_academico']=='Quinto ciclo'  )
								{
									
									$nombre2=$fila['nomb_asignatura'];
										$cod_asig=$fila['cod_asignatura'];
									?>  
                          <tr>  
                               
							   

							   <td width="60%"><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn"><?php echo $fila["nomb_asignatura"]; ?></td> 

								<td width="20%" ><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_editar">editar</button></td>
							  

						 
                          </tr>  
                          <?php  
						  
								
							}
							
									
								
								else
								{}
							}
						
						?> <tr> <th> <?php echo  'Cuarto año';?> </th> </tr> <?php 
							$consulta ="SELECT * FROM asignatura where semestre_academico='I' order by cod_asignatura ASC";
								$ejecutar= mysqli_query($con,$consulta);		
						
						while($fila = mysqli_fetch_array($ejecutar))  
                          {  
						  
	   
								if($fila['ciclo_academico']=='Séptimo ciclo' )
								{
									
									
									$nombre2=$fila['nomb_asignatura'];
										$cod_asig=$fila['cod_asignatura'];
									?>  
                          <tr>  
                               
							   
							   <td width="60%"><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_editar">editar</button></td>

						 
                          </tr>  
                          <?php  
						  
								
							}
									
									
								else
								{}
							}

							?> <tr> <th> <?php echo  'Quinto año';?> </th> </tr> <?php 
									
									$consulta ="SELECT * FROM asignatura where semestre_academico='I' order by cod_asignatura ASC";
								$ejecutar= mysqli_query($con,$consulta);	
								
								
									
						while($fila = mysqli_fetch_array($ejecutar))  
                          {  
						  
	   
								if($fila['ciclo_academico']=='Noveno ciclo' )
								{
									
									
									$nombre2=$fila['nomb_asignatura'];
										$cod_asig=$fila['cod_asignatura'];
									?>  
                          <tr>  
                               
							   
							   <td width="60%"><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_editar">editar</button></td>

						 
                          </tr>  
                          <?php  
						  
								
							}
									
								
								else
								{}
							}
	  
	 
	  

		
                          $indice_asi++;
                          }  
                          ?>  
                     </table>  
                </div>  
           </div> 
		   
		 
	  
	   <?php
      
      ?>
	  
	  <!-------------MUESTRO EN PANTALLA LOS CURSOS DEL PRIMER SEMESTRE COMO LINKS-------------------------->
	  


      <?php 
	  
		//} 
		
		
	  //else{}
	  
	  }
	  

else

{
if($link_valor=='II')//SI SELECCIONO SEGUNDO SEMESTRE ACADEMICO
{


$consulta ="SELECT * FROM asignatura where semestre_academico='II' order by cod_asignatura ASC";
      $ejecutar= mysqli_query($con,$consulta);
	  $repeticion=1;
      $i=0;
	  
	  //En esta zona separo los cursos que sean del primer semestre academico por año, colocando un mensaje de primer año,segundo año,etc.
	  
	  ?>
	  
	  
	  <div class="container" style="width:700px;">  
                 
                <br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">
                          
						  <tr>  
                               <th width="60%">Nombre asignatura</th>  
                               <!------<th width="20%">Vista</th> ------------>
							   <th width="20%">Editar</th> 
                          </tr>  
						  
						  
                          <?php  
						  $indice_asi=0;
						  while($indice_asi<1)
						  {
						  
						  ?> <tr> <th> <?php echo  'Primer año';?> </th> </tr>
						  <?php 
                          while($fila = mysqli_fetch_array($ejecutar))  
                          {  
						  
								 
									
								if($fila['ciclo_academico']=='Segundo ciclo' )
								{
									
										$nombre2=$fila['nomb_asignatura'];
										$cod_asig=$fila['cod_asignatura'];
										?>  
                          <tr>  
                               
							   
							   <td width="60%"><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_editar">editar</button></td>

						 
                          </tr>  
                          <?php  
										
								}
								else
								{}
							}
							
							
						?> <tr> <th> <?php echo  'Segundo año';?> </th> </tr> <?php 
						
						
							 $consulta ="SELECT * FROM asignatura where semestre_academico='II' order by cod_asignatura ASC";
								$ejecutar= mysqli_query($con,$consulta);
	  
								
						while($fila = mysqli_fetch_array($ejecutar))
						{
							if($fila['ciclo_academico']=='Cuarto ciclo')
							{
								
								$nombre2=$fila['nomb_asignatura'];
								
										$cod_asig=$fila['cod_asignatura'];
									?>  
                          <tr>  
                               
							   
							   <td width="60%"><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_editar">editar</button></td>

						 
                          </tr>  
                          <?php  
						  
								
							}
							else
							{}
						
						}
						?> <tr> <th> <?php echo  'Tercer año';?> </th> </tr> <?php 
						 $consulta ="SELECT * FROM asignatura where semestre_academico='II' order by cod_asignatura ASC";
								$ejecutar= mysqli_query($con,$consulta);
								
									
						while($fila = mysqli_fetch_array($ejecutar))  
                          {  
						  
	   
								if($fila['ciclo_academico']=='Sexto ciclo'  )
								{
									
									$nombre2=$fila['nomb_asignatura'];
										$cod_asig=$fila['cod_asignatura'];
									?>  
                          <tr>  
                               
							   
							   <td width="60%"><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_editar">editar</button></td>

						 
                          </tr>  
                          <?php  
						  
								
							}
							
									
								
								else
								{}
							}
						
						?> <tr> <th> <?php echo  'Cuarto año';?> </th> </tr> <?php 
							$consulta ="SELECT * FROM asignatura where semestre_academico='II' order by cod_asignatura ASC";
								$ejecutar= mysqli_query($con,$consulta);		
						
						while($fila = mysqli_fetch_array($ejecutar))  
                          {  
						  
	   
								if($fila['ciclo_academico']=='Octavo ciclo' )
								{
									
									
									$nombre2=$fila['nomb_asignatura'];
										$cod_asig=$fila['cod_asignatura'];
									?>  
                          <tr>  
                               
							   
							   <td width="60%"><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_editar">editar</button></td>

						 
                          </tr>  
                          <?php  
						  
								
							}
									
									
									
								else
								{}
							}

							?> <tr> <th> <?php echo  'Quinto año';?> </th> </tr> <?php 
									
									$consulta ="SELECT * FROM asignatura where semestre_academico='II' order by cod_asignatura ASC";
								$ejecutar= mysqli_query($con,$consulta);	
								
								
									
						while($fila = mysqli_fetch_array($ejecutar))  
                          {  
						  
	   
								if($fila['ciclo_academico']=='Décimo ciclo' )
								{
									
									
									$nombre2=$fila['nomb_asignatura'];
										$cod_asig=$fila['cod_asignatura'];
									?>  
                          <tr>  
                               
							   
							   <td width="60%"><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_editar">editar</button></td>

						 
                          </tr>  
                          <?php  
						  
								
							}
									
								
								else
								{}
							}
	  
	 
	  

		
                          $indice_asi++;
                          }  
                          ?>  
                     </table>  
                </div>  
           </div> 
		   
		   
		 
	  
	   <?php
      
      ?>
	  
	  <!-------------MUESTRO EN PANTALLA LOS CURSOS DEL PRIMER SEMESTRE COMO LINKS------------------------>
	  


      <?php 
	  
		//} 
		
		
	  //else{}
	  
	  
	  
	  
}
} 
?>

</form>

<br>
<br>



<br>


<BR>
	  <div class="container">
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  
  <div class="modal fade" id="myModal" role="dialog" style="color:#000;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
	  
	  
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">CREACIÓN DE ASIGNATURA</h4>
		 <!-------- <h1><center>CREAR ASIGNATURA</center></h1>------------>
        </div>
		
        <div class="modal-body" style="color:#000;"  >
		
		
		<style>
		.CREACION_PENDIENTE
		{
		margin:0;
		padding-top:0;
		}
		
		</style>
		
		<form action="#" method="post" class="CREACION_PENDIENTE"  >
	   
    <style>
	.contentform
	
	{
	padding: 0px 30px;
	margin-top:0;
	}
	</style>
	<div class="contentform">
	
<!------------el formulario esta dividido en dos zonas, la primera zona que vamos a ver es la izquierda---------------------------->
		<br>
	<label class="control-label col-sm-8" for="email" align="left"> Nombre asignatura:</label>
	
	<br>
	<br>
	
<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="nomb_asignatura_crea" type="text" class="form-control" name="nomb_asignatura_crea" placeholder="Nombre Curso"   required >
    </div>
	
	<br>
	<label class="control-label col-sm-4" for="email" align="left" >Código asignatura:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="cod_asignatura_crea" type="text" class="form-control" name="cod_asignatura_crea" placeholder="codigo asignatura" required>
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
				<option value="FCJE">FCJE</option>
				<option value="FCAG">FCAG</option>
				<option value="FACS">FACS</option>
				<option value="FECH">FECH</option>
				<option value="FIAG">FIAG</option>
				
				</select>
			
    </div>
	<br>
	
	
	
	<label class="control-label col-sm-4" for="email" align="left">Escuela :</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="escuela_crea" type="text" class="form-control" name="escuela_crea" placeholder="Escuela" required>
    </div>
	<br>
	
	
	
	
	
	
	
	
	<label class="control-label col-sm-4" for="email" align="left" >Ciclo académico:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
	  <select name="ciclo_academico_crea" id="ciclo_academico_crea" class="form-control"  required >
				
				<option>Elige ciclo</option>
				<option value="FAIN">Primer ciclo</option>
				<option value="FACI">Segundo ciclo</option>
				<option value="FCJE">Tercer ciclo</option>
				<option value="FCAG">Cuarto ciclo</option>
				<option value="FACS">Quinto ciclo</option>
				<option value="FECH">Sexto ciclo</option>
				<option value="FECH">Séptimo ciclo</option>
				<option value="FECH">Octavo ciclo</option>
				<option value="FECH">Noveno ciclo</option>
				<option value="FECH">Décimo ciclo</option>
				
				
				</select>
				
      
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
	
	
	
	
	<label class="control-label col-sm-4" for="email" align="left" >Número de créditos:</label>
	
	<div class="col-sm-2">
	
	<div class="input-group ">
	
      

      <input id="nro_creditos_crea" type="text" class="form-control" name="nro_creditos_crea" required pattern="[0-9]"  required>
    </div>
	
	</div>
	
	
	
	<label class="control-label col-sm-4" for="email" align="left" >Horas teoría:</label>
	<div class="col-sm-2"> 
	
	<div class="input-group ">
	
	
      <input id="horas_teoria_crea" type="text" class="form-control" name="horas_teoria_crea"  required>
    </div>
	
	</div>
	
	<br>
	<br>
	<br>
	
	<label class="control-label col-sm-4" for="email" align="left" >Horas práctica:</label>
	
	<div class="col-sm-2" >
	
	<div class="input-group ">
	
      
      <input id="horas_practica_crea" type="text" class="form-control" name="horas_practica_crea" required pattern="[0-9]"  data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."   required>
	  
    </div>
	
	</div>
	
	
	
	<!-----
	<label class="control-label col-sm-4" for="email" align="left" >Semestre:</label>
	<br>
	<br>
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
	   <select name="semestre_academico_crea" id="semestre_academico_crea" class="form-control" required >
				
				<option>Selecciona semestre</option>
				<option value="I">I</option>
				<option value="II">II</option>
				</select>
    </div>
	<br>
	------------>
	
	
	<!----<p>Tipo</p>---->
	
	
	
	<label class="control-label col-sm-4" for="email" align="left" >Horas laboratorio:</label>
	
	<div class="col-sm-2" >
	
	<div class="input-group ">
      
      <input id="horas_laboratorio_crea" type="text" class="form-control" name="horas_laboratorio_crea"  required>
    </div>
	
	</div>
	<br>
	<br>
	<br>
	<div class="form-group">
	
	<label class="control-label col-sm-4" for="email" align="left" >Sumilla :</label>
  
  <textarea class="form-control" rows="10" id="sumilla_crea"></textarea>
</div>










<!---------------INICIO ZONA DERECHA------------------------->
	</div>

	<!--------------BOTON CREAR DOCENTE---------------------------------->
 
<button type="submit" name="insert_asignatura" class="bouton-contact" >Crear</button> 


</form>

<?php
	include('conexion.php');//CADENA DE CONEXION

      if(isset($_POST['insert_asignatura']))
	  {
        $nomb_asignatura=$_POST["nomb_asignatura_crea"];
		//echo $nomb_asignatura;
        $horas_practica=$_POST["horas_practica_crea"];
		//echo $horas_practica;
        $pre_requisito=$_POST["pre_requisito_crea"];
		//echo $pre_requisito;
        $nro_creditos=$_POST["nro_creditos_crea"];
		//echo $nro_creditos;
        $semestre_academico=$_POST["semestre_academico_crea"];
		//echo $semestre_academico;
        $cod_asignatura=$_POST["cod_asignatura_crea"];
		//echo $cod_asignatura;
        $ciclo_academico=$_POST["ciclo_academico_crea"];
		

		if($ciclo_academico='Primer ciclo' or $ciclo_academico='Tercer ciclo' or $ciclo_academico='Quinto ciclo' or $ciclo_academico='Séptimo ciclo' or $ciclo_academico='Noveno ciclo'  )
		{
			$semestre_academico='I';
		}
		else
		{
			$semestre_academico='II';
		}
		//echo $ciclo_academico;
        $facultad=$_POST["facultad_crea"];
		//echo $facultad;
        $horas_teoria=$_POST["horas_teoria_crea"];
		//echo $horas_teoria;
		$escuela=$_POST["escuela_crea"];
		
		//echo $escuela;
		$horas_laboratorio=$_POST["horas_laboratorio_crea"];
		//echo $horas_laboratorio;
		
		$sumilla=$_POST["sumilla_crea"];
		
        $insertar_asig="INSERT INTO asignatura(nomb_asignatura,horas_practica,pre_requisito,nro_creditos,semestre_academico,cod_asignatura,ciclo_academico,facultad,horas_teoria,escuela,horas_laboratorio,sumilla)
         VALUES('$nomb_asignatura','$horas_practica','$pre_requisito','$nro_creditos','$semestre_academico','$cod_asignatura','$ciclo_academico','$facultad','$horas_teoria','$escuela','$horas_laboratorio','$sumilla')";
        $ejecutar = mysqli_query($con,$insertar_asig);
        if($ejecutar){
          echo "fallo";
        }
      }
     ?>

		
		
		
		
        </div>
        <div class="modal-footer">
          
		  
        </div>
      </div>
	  
      
    </div>
  </div>
  
 
  
</div>






				<BR>
				<BR>
				


<!------Fin del combobox, donde el docente selecciona el semestre academico, donde esta la asignatura que necesita---------->
<!----------INICIO DE VENTANA MODAL EDITAR CURSO---------------------->
<?php
	include('conexion.php');//CADENA DE CONEXION

      if(isset($_POST['ELIMINAR_curso']))
	  {
        
        
		$eliminar_asig="DELETE from asignatura

		WHERE cod_asignatura='$v1'";
		
		$ejecutar_eliminar=mysqli_query($con,$eliminar_asig);
		
        if($ejecutar_eliminar)
		
		{
          echo "fallo";
        }
      }
     ?>
	 

<?


include('conexion.php');//CADENA DE CONEXION

      
		$buscar_asig="select * from asignatura  where cod_asignatura='$v1'";
        $ejecutar_buscar = mysqli_query($con,$buscar_asig);
        $array_curso=mysqli_fetch_array($ejecutar_buscar);
	  

?>

<div class="container">
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  
  <div class="modal fade" id="myModal_editar" role="dialog" style="color:#000;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
	  
	  
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">  ASIGNATURA</h4>
		 <!-------- <h1><center>CREAR ASIGNATURA</center></h1>-------->
        </div>
		
        <div class="modal-body" style="color:#000;"  >
		
		<form action="#" method="post" class="CREACION_PENDIENTE"  >
	   
    <div class="contentform">
    	<div id="sendmessage"> Has creado correctamente al docente </div>
	<label class="control-label col-sm-8" for="email" align="left"> Nombre asignatura:</label>
	
	<br>
	<br>
	
<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="nomb_asignatura_crea" type="text" class="form-control" name="nomb_asignatura_crea" placeholder="Nombre Curso" value="<?php echo $array_curso[0];?>"  required >
	  
    </div>
	
	<br>
	
	
	
	<label class="control-label col-sm-6" for="email" align="left" >Código asignatura:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="cod_asignatura_crea" type="text" class="form-control" name="cod_asignatura_crea" placeholder="codigo asignatura" value="<?php echo $array_curso[5];?>" required>
    </div>
	<br>
	
	
	
	
	<label class="control-label col-sm-4" for="email" align="left" >Semestre:</label>
	<br>
	<br>
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
	   <select name="semestre_academico_crea" id="semestre_academico_crea" class="form-control" required >
				
				<option value="<?php echo $array_curso[4];?>"><?php echo $array_curso[4];?></option>
				<option value="I">I</option>
				<option value="II">II</option>
				</select>
    </div>
	
	<br>
	
	<label class="control-label col-sm-4" for="email" align="left" >Facultad:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
	  <select name="facultad_crea" id="facultad_crea" class="form-control" required >
				
				<option value="<?php echo $array_curso[7];?>"><?php echo $array_curso[7];?></option>
				<option value="FAIN">FAIN</option>
				<option value="FACI">FACI</option>
				<option value="FCJE">FCJE</option>
				<option value="FCAG">FCAG</option>
				<option value="FACS">FACS</option>
				<option value="FECH">FECH</option>
				<option value="FIAG">FIAG</option>
				
				</select>
			
    </div>
	<br>
	
	
	<label class="control-label col-sm-4" for="email" align="left">Escuela :</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="escuela_crea" type="text" class="form-control" name="escuela_crea" placeholder="Escuela" value="<?php echo $array_curso[10];?>" required>
    </div>
	<br>
	
	
	
	
	<label class="control-label col-sm-5" for="email" align="left" >Ciclo académico:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="ciclo_academico_crea" type="text" class="form-control" name="ciclo_academico_crea" placeholder="Ciclo academico" value="<?php echo $array_curso[6];?>" required>
    </div>
	<br>
	
	
	
	<label class="control-label col-sm-4" for="email" align="left" >Pre requisito:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="pre_requisito_crea" type="text" class="form-control" name="pre_requisito_crea" placeholder="Pre requisito" value="<?php echo $array_curso[2];?>"  required>
    </div>
	<br>
	
	
	<label class="control-label col-sm-3" for="email" align="left" >Número de créditos:</label>
	
	<div class="col-sm-3" >
	
	
	<div class="input-group ">
      
      <input id="nro_creditos_crea" type="text" class="form-control" name="nro_creditos_crea" required pattern="[0-9]" placeholder="# creditos" value="<?php echo $array_curso[3];?>"  required>
    </div>
	</div>
	
	
	
	<label class="control-label col-sm-3" for="email" align="left" >Horas teoría:</label>
	
	<div class="col-sm-3" >
	
	<div class="input-group ">
	
      
      <input id="horas_teoria_crea" type="text" class="form-control" name="horas_teoria_crea" placeholder="Horas teoria"  value="<?php echo $array_curso[8];?>" required>
    </div>
	</div>
	<br>
	<br>
	<br>
	
	
	<label class="control-label col-sm-3" for="email" align="left" >Horas práctica:</label>
	
	<div class="col-sm-3" >
	
	<div class="input-group ">
      
      <input id="horas_practica_crea" type="text" class="form-control" name="horas_practica_crea" required pattern="[0-9]"  data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."  placeholder="Horas practica" value="<?php echo $array_curso[1];?>" required>
    </div>
	
	</div>
	
	
	
	<label class="control-label col-sm-3" for="email" align="left" >Horas laboratorio:</label>
	
	<div class="col-sm-3" >
	
	<div class="input-group ">
      
      <input id="horas_laboratorio_crea" type="text" class="form-control" name="horas_laboratorio_crea"  value="<?php echo $array_curso[9];?>" required>
    </div>
	
	</div>
	
	
	
	<!----<p>Tipo</p>---->
	
	
	
	
	

<!---------------INICIO ZONA DERECHA------------------------>
	</div>

	<!--------------BOTON CREAR DOCENTE-------------------------------->
 
<button type="submit" name="update_curso" class="bouton-contact" >GUARDAR CAMBIOS</button> 


</form>

<?php
	include('conexion.php');//CADENA DE CONEXION

      if(isset($_POST['update_curso']))
	  {
        $nomb_asignatura_edita=$_POST["nomb_asignatura_crea"];
		//echo $nomb_asignatura;
        $horas_practica_edita=$_POST["horas_practica_crea"];
		//echo $horas_practica;
        $pre_requisito_edita=$_POST["pre_requisito_crea"];
		//echo $pre_requisito;
        $nro_creditos_edita=$_POST["nro_creditos_crea"];
		//echo $nro_creditos;
        $semestre_academico_edita=$_POST["semestre_academico_crea"];
		//echo $semestre_academico;
        $cod_asignatura_edita=$_POST["cod_asignatura_crea"];
		//echo $cod_asignatura;
        $ciclo_academico_edita=$_POST["ciclo_academico_crea"];
		//echo $ciclo_academico;
        $facultad_edita=$_POST["facultad_crea"];
		//echo $facultad;
        $horas_teoria_edita=$_POST["horas_teoria_crea"];
		//echo $horas_teoria;
		$escuela_edita=$_POST["escuela_crea"];
		//echo $escuela_edita;
		$horas_laboratorio_edita=$_POST["horas_laboratorio_crea"];
		//echo $horas_laboratorio_edita;
		
		$actualizar_asig="UPDATE asignatura set 
		nomb_asignatura='$nomb_asignatura_edita',
		horas_practica='$horas_practica_edita',
		pre_requisito='$pre_requisito_edita',
		nro_creditos='$nro_creditos_edita',
		semestre_academico='$semestre_academico_edita',
		cod_asignatura='$cod_asignatura_edita',
		ciclo_academico='$ciclo_academico_edita',
		facultad='$facultad_edita',
		horas_teoria='$horas_teoria_edita',
		escuela='$escuela_edita',
		horas_laboratorio='$horas_laboratorio_edita'

		WHERE cod_asignatura='$cod_asignatura_edita'";
		
		
		$ejecutar_actualizar=mysqli_query($con,$actualizar_asig);
		
        if($ejecutar_actualizar)
		
		{
          
        }
      }
     ?>

		
		
		
		
        </div>
        <div class="modal-footer">
          
		  
        </div>
      </div>
	  
      
    </div>
  </div>
  
 
  
</div>



<!---FIN DE VENTANA MODAL EDITAR CURSO------>




		
<BR>
<BR>
<!-----aqui-------------->

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
