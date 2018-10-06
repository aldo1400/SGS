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
	
	<script src="js/myscript.js"></script>
	
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


				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?> ">Mi perfil</a>
					</li>
					
					 <li>
                        <a class="activo" href="asignaturas.php">Asignatura</a>
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
		
		
		

 <script language="javascript">
 
function agregarOpciones(form)
{
var selec = form.facultad_crea.options;
var combo = form.escuela_crea.options;
combo.length = null;

    if (selec[0].selected == true)
    {
    var seleccionar = new Option("<-- esperando selección","","","");
    combo[0] = seleccionar;
    }

    if (selec[1].selected == true)
    {
    var Facultad1 = new Option("Ingenieria de Minas","ESMI","","");
    var Facultad2 = new Option("Ingenieria Metalurgica y Materiales","ESME","","");
	var Facultad3 = new Option("Ingenieria Mecanica","ESMC","","");
	var Facultad4 = new Option(" Ingeniería Informática y Sistemas","ESIS","","");
	var Facultad5 = new Option(" Ingeniería Química","ESIQ","","");
	
    combo[0] = Facultad1;
    combo[1] = Facultad2;
	combo[2] = Facultad3;
	combo[3] = Facultad4;
	combo[4] = Facultad5;
	
    }

    if (selec[2].selected == true)
    {
	
    var Facultad21 = new Option("Biología Microbiología","ESBI","","");
	
    var Facultad22 = new Option("Física Aplicada","ESFI","","");
	
    var Facultad23 = new Option("Matemáticas","ESMA","","");
	
    combo[0] = Facultad21;
    combo[1] = Facultad22;
    combo[2] = Facultad23;
	
    }
	
	if (selec[3].selected == true)
    {
	
    var Facultad31 = new Option(" Ciencias Contables y Financieras","ESCF","","");
	
    var Facultad32 = new Option("Ciencias Administrativas","ESAD","","");
	
    var Facultad33 = new Option("Derecho y Ciencias Políticas","ESDE","","");
	
	var Facultad34 = new Option("Ingeniería Comercial","ESCO","","");
	 
    combo[0] = Facultad31;
    combo[1] = Facultad32;
    combo[2] = Facultad33;
	combo[3] = Facultad34;
	
    }
	
	
	if (selec[4].selected == true)
    {
	
    var Facultad41 = new Option("Agronomía","ESAG","","");
	
    var Facultad42 = new Option("Medicina Veterinaria y Zootecnia ","ESVZ","","");
	
    var Facultad43 = new Option("Ingeniería en Economía Agraria","ESEA","","");
	
	var Facultad44 = new Option("Ingeniería en Industrias Alimentarias","ESIA","","");
	 
	var Facultad45 = new Option("Ingeniería Pesquera","ESIP","","");
	
	var Facultad46 = new Option("Ingeniería Ambiental","ESAM","","");
	
    combo[0] = Facultad41;
    combo[1] = Facultad42;
    combo[2] = Facultad43;
	combo[3] = Facultad44;
	combo[4] = Facultad45;
	combo[5] = Facultad46;
	
    }
	
	
	if (selec[5].selected == true)
    {
	
    var Facultad51 = new Option("Obstetricia","ESOB","","");
	
    var Facultad52 = new Option("Enfermería","ESEN","","");
	
    var Facultad53 = new Option("Medicina Humana","ESMH","","");
	
	var Facultad54 = new Option("Odontología","ESOD","","");
	 
	var Facultad55 = new Option("Farmacia y Bioquímica","ESFB","","");
	
    combo[0] = Facultad51;
    combo[1] = Facultad52;
    combo[2] = Facultad53;
	combo[3] = Facultad54;
	combo[4] = Facultad55;
	
    }
	
	if (selec[6].selected == true)
    {
	
    var Facultad61 = new Option("Educación","ESED","","");
	
    var Facultad62 = new Option(" Ciencias de la Comunicación","ESCC","","");
	
    var Facultad63 = new Option("Historia","ESHI","","");

    combo[0] = Facultad61;
    combo[1] = Facultad62;
    combo[2] = Facultad63;

    }
	
	if (selec[7].selected == true)
    {
	
    var Facultad71 = new Option("Ingeniería Civil","ESIC","","");
	
    var Facultad72 = new Option("Ingeniería Geológica-Geotecnia","ESGE","","");
	
    var Facultad73 = new Option("Arquitectura","ESAQ","","");
	
	var Facultad74 = new Option("Artes","ESAR","","");

    combo[0] = Facultad71;
    combo[1] = Facultad72;
    combo[2] = Facultad73;
	combo[3] = Facultad74;

    }
	
	
	
}
</script>

<script>
$(document).on('ready',constructor);
 function constructor()
  {
	sumarentradas();
  }
  
  function sumarentradas()
 {
	$('#contenido2').on('change','#horas_laboratorio_crea,#horas_teoria_crea,#horas_practica_crea',function()
	{
	var num1=parseInt($('#horas_laboratorio_crea').val());
	var num2=parseInt($('#horas_teoria_crea').val());
	var num3=parseInt($('#horas_practica_crea').val());
	
	$('#nro_creditos_crea').val(num1+num2+num3);
	
	}
	)
 
 }
  
  </script>


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


<!----Aqui se encuentra el combobox, donde el docente selecciona el semestre academico, donde esta la asignatura que necesita---------->

<div class="pull-left">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_crear"><span class="glyphicon glyphicon-plus"></span>  Crear asignatura </button>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_crea_estra"><span class="glyphicon glyphicon-plus"></span>  Crear estrategia </button>
</div>
<div class="pull-right">
<a href="logout.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a>
</div>

<br>
<br>

	<form action="" method="post" class="form-inline" role="form" >
	<br>
	
			<label class="control-label col-sm-5" for="email" align="left" >Seleccione Semestre académico</label>
		
		<div class="input-group col-sm-3 " >
			<select name="curso">
					<option value="" ></option>		
					<!------option 2017 I-------->
					<option value="I">2018-I</option>
					<!------option 2017 II-------->
					<option value="II">2018-II</option>
				</select>
			
		
		</div>
<button style="position: relative; bottom: 8px" type="submit" name="SEMESTRE" class="btn btn-success btn-lg">BUSCAR</button>

</form>



<?php //con esto indicas que empiezas a insertar codigo php

if(isset($_POST['curso'])){
	$link_valor=$_POST['curso'];
}
else{
	$link_valor='';
}
 //recibo la variable que escogio el docente


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
                               
							   
							   <td width="60%"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn btn-info btn-xs " style="width: 72px; height: 24px;">Detalles</td>

						 
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
                               
							   
							   <td width="60%"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn btn-info btn-xs" style="width: 72px; height: 24px;">Detalles</td>

						 
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
                               
							   
							   <td width="60%"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn btn-info btn-xs" style="width: 72px; height: 24px;">Detalles</td>

						 
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
                               
							   
							   <td width="60%"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn btn-info btn-xs" style="width: 72px; height: 24px;" >Detalles</td>

						 
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
                               
							   
							   <td width="60%"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn btn-info btn-xs" style="width: 72px; height: 24px;" >Detalles</td>

						 
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
	  
	  <!-------------MUESTRO EN PANTALLA LOS CURSOS DEL PRIMER SEMESTRE COMO LINKS--------------------------->
	  


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
                               
							   
							   <td width="60%"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn btn-info btn-xs" style="width: 72px; height: 24px;">Detalles</td>

						 
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
                               
							   
							   <td width="60%"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn btn-info btn-xs" style="width: 72px; height: 24px;">Detalles</td>

						 
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
                               
							   
							   <td width="60%"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn btn-info btn-xs" style="width: 72px; height: 24px;" >Detalles</td>

						 
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
                               
							   
							   <td width="60%"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn btn-info btn-xs" style="width: 72px; height: 24px;" >Detalles</td>

						 
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
                               
							   
							   <td width="60%"><?php echo $fila["nomb_asignatura"]; ?></td> 

							  
								<td width="20%" ><a href="curso.php?nombre_curso_enviado=<?php echo $cod_asig ?>" class="btn btn-info btn-xs" style="width: 72px; height: 24px;" >Detalles</a></td>

						 
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
	  
	  <!-------------MUESTRO EN PANTALLA LOS CURSOS DEL PRIMER SEMESTRE COMO LINKS--------------------------->
	  


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

<div class="modal fade" id="myModal_crea_estra" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.history.go(0);" >&times;</button>
          <h4 class="modal-title" style="font-family: Roboto;">Estrategia académica</h4>
        </div>
        <div class="modal-body">
		
          <form method="post" action="#" >
		  <center>
					<textarea name="nueva_estrategia" class="size" style="margin-left:12%; padding: 10px; border-radius: 5px; border: 1px solid #666666; font-size:10pt;color:#000;" rows="20" cols="40" >
					</textarea>
					
				</center>
				<button type="submit" name="estrategia_crea" class="bouton-contact"  >Guardar cambios</button>
	
			</form>
				
		  
        </div>
        
      </div>
	  
      
    </div>
</div>

<?php
if(isset($_POST['estrategia_crea']))
	  {	  
		include('conexion.php');
		$nueva_estrategia=$_POST['nueva_estrategia'];  
		
		$e_nueva_estrategica="INSERT INTO banco_estrategia(codigo_estrategia,estrategia) VALUES(NULL,'$nueva_estrategia')";
		
		  $ejecutar3=mysqli_query($con,$e_nueva_estrategica);
		  
	  }
?>
  
<BR>



<div class="container" id="contenido">
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  
  <div class="modal fade" id="myModal_crear" role="dialog" style="color:#000;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
	  
	  
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"style="text-transform:none;font-family: Roboto;">Creación de asignatura</h3>

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
	

		<br>
	<label style="right: 35px" class="control-label col-sm-8" for="email" align="left"> Nombre asignatura:</label>
	
	<br>
	<br>
	
<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="nomb_asignatura_crea" type="text" class="form-control" name="nomb_asignatura_crea" placeholder="Nombre Curso"   required >
    </div>
	
	<br>
	<label style="right: 100px" class="control-label col-sm-8" for="email" >Código asignatura:</label> <label style="right: 20px" class="control-label col-sm-4" for="email" align="left" >Ciclo académico:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input style="width: 180px" id="cod_asignatura_crea" type="text" class="form-control" name="cod_asignatura_crea" placeholder="codigo asignatura" required>

      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
	  <select name="ciclo_academico_crea" id="ciclo_academico_crea" class="form-control"  required >
				
				<option>Elige ciclo</option>
				<option value="Primer ciclo">Primer ciclo</option>
				<option value="Segundo ciclo">Segundo ciclo</option>
				<option value="Tercer ciclo">Tercer ciclo</option>
				<option value="Cuarto ciclo">Cuarto ciclo</option>
				<option value="Quinto ciclo">Quinto ciclo</option>
				<option value="Sexto ciclo">Sexto ciclo</option>
				<option value="Séptimo ciclo">Séptimo ciclo</option>
				<option value="Octavo ciclo">Octavo ciclo</option>
				<option value="Noveno ciclo">Noveno ciclo</option>
				<option value="Décimo ciclo">Décimo ciclo</option>
				
				</select>
    </div>
	
	
	
	
	
	<br>
			<label class="control-label col-sm-4" for="email" align="left" >Facultad:</label>
		<br>
		<br>
		
		<div class="input-group ">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
			<select name="facultad_crea" id="facultad_crea" class="form-control" onChange="agregarOpciones(this.form)" required >
				
				<option>Elige facultad</option>
				<option value="FAIN">Facultad de Ingeniera (FAIN) </option>
				<option value="FACI">Facultad de Ciencias (FACI) </option>
				<option value="FCJE">Facultad de Ciencias Juridicas y Empresariales (FCJE) </option>
				<option value="FCAG">Facultad de Ciencias Agropecuarias (FCAG)</option>
				<option value="FACS">Facultad de Ciencias de la Salud (FACS) </option>
				<option value="FECH">Facultad de Educación,Comunicación y Humanidades (FECH) </option>
				<option value="FIAG">Facultad de Ingenieria Civil, Arquitectura y Geotecnia (FIAG) </option>
				</select>
			
    </div>
	<br>
	

 

	<label class="control-label col-sm-4" for="email" align="left">Escuela :</label>
	<br>
	<br>
	
	
	<div class="input-group ">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
			<select name="escuela_crea" id="escuela_crea" class="form-control"  required >
				
				<option value="">esperando selección</option>
			
			</select>
			
    </div>
	

	
	<br>
	
	<label style="left: 20px" class="control-label col-sm-4" for="email" align="left" >Pre requisito:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="pre_requisito_crea" type="text" class="form-control" name="pre_requisito_crea" placeholder="Pre requisito"  required>
    </div>
	<br>
	<br>
	
	<div class="row" id="contenido2">
	
		<label class="control-label col-sm-4" for="email" align="left" >Horas laboratorio:</label>
	
	<div class="col-sm-2" >
      <input id="horas_laboratorio_crea" type="text" class="form-control" name="horas_laboratorio_crea"  required>
    
	</div>
	

	<label class="control-label col-sm-4" for="email" align="left" >Horas teoría:</label>
	<div class="col-sm-2"> 
	
      <input id="horas_teoria_crea" type="text" class="form-control" name="horas_teoria_crea"  required>
    
	</div>
	
	<br>
	<br>
	<br>
	
	<label class="control-label col-sm-4" for="email" align="left" >Horas práctica:</label>
	
	<div class="col-sm-2" >

      <input id="horas_practica_crea" type="text" class="form-control" name="horas_practica_crea" required pattern="[0-9]"  data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."   required>
	  
   
	
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
	------------->
	
	
	<!----<p>Tipo</p>----->
	
	
	
	<label class="control-label col-sm-4" for="email" align="left" >Número de créditos:</label>
	
	<div class="col-sm-2">
	
      <input id="nro_creditos_crea" type="text" class="form-control" name="nro_creditos_crea"  required>
    
	
	</div>
	
	</div>
	
	<div class="form-group">
	<br>
	<label class="control-label col-sm-4" for="email" align="left" >Sumilla :</label>
  
  <textarea class="form-control" rows="10" id="sumilla_crea"></textarea>
</div>

<!---------------INICIO ZONA DERECHA------------------------->
	</div>

	<!--------------BOTON CREAR DOCENTE---------------------------------->
 
<button style="position: relative; width: 180px; bottom: 30px" type="submit" name="insert_asignatura" class="bouton-contact" >Crear</button> 


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
		
          ?>
		
		<script language="JavaScript">
	var page='asignaturas.php';
		location.href=page;
		
	</script>
	<?php
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
				


<!------Fin del combobox, donde el docente selecciona el semestre academico, donde esta la asignatura que necesita----------->





		
<BR>
<BR>
<!--------aqui--------------->

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
