<!----------------

EN ESTE ARCHIVO SE MOSTRARA  LOS DATOS DE LOS CURSOS Y LA OPCION DE AGREGAR DOCENTES Y MODIFICAR LA SUMILLA

------------------------>



<!-------------ESTE ES UN METODO DE SEGURIDAD, YO HE CREADO EN LOGIN.PHP dos variables de sesion, es decir variables que estaran presentes en todos los archivos, las podemos llamar y utilizar su valor, si estas variables estan vacias significa que no se logeo correctamnete el docente o admin, por lo tanto se redirigire a index.html---------------->


<?php

session_start();
session_name('permiso');

if(!$_SESSION)
{
header("location:index.php");

}
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
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  <script type="text/javascript">
  
  $(document).ready(function() {

    $('.delete').click(function(){
        //Recogemos la id del contenedor padre
        var parent = $(this).parent().attr('id');
        //Recogemos el valor del servicio
        var service = $(this).parent().attr('data');

        var dataString = 'id='+service;

		"dato1="+valor1+"&dato2"+valor2
		
        $.ajax({
            type: "POST",
            url: "delete.php",
            data: dataString,
            success: function() {            
                $('#delete-ok').empty();
                $('#delete-ok').append('<div>Se ha eliminado correctamente el servicio con id='+service+'.</div>').fadeIn("slow");
                $('#'+parent).remove();
            }
        });
    });                 
});    
</script>


  
  
  
  
	
	<link rel="stylesheet" href="css/sumilla.css">
		<script src="js/jquery.js"></script>
		<script type="text/javascript">
		
			
			function openSumilla(){
				$(".sumilla").slideDown("slow");
			}
			function closeSumilla(){
				$(".sumilla").slideUp("fast");
			}
		</script>
		
		
				<link rel="stylesheet" href="css/docente_asignar.css">
		
		<script type="text/javascript">
			function openAD(){
				$(".asigna").slideDown("slow");
			}
			function closeAD(){
				$(".asigna").slideUp("fast");
			}
		</script>
		

    <title>Universidad Nacional -   JORGE BASADRE GROHMANN</title>

    <!-- Bootstrap Core CSS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
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



<script type="text/javascript">


	$(function() {

		$(".delbutton").click(function(){
			var $self = $(this)
			var del_id = $self.data("id");
			var info = 'id=' + del_id;
			if(confirm("Desea borrar esto?")){
				$.ajax({
					type: "POST",
					url: "borra.php",
					data: info,
					success: function(){
						$self.parents(".borrado").parent().animate({ backgroundColor: "#fbc7c7" }, "fast")
							.animate({ opacity: "hide" }, "slow");
					}.bind(this)
				});

			}
			return false;
		});
	});

</script>





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
						<a class="navbar-brand" href="index.php>unjbg</a>
                        
                    
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
                        <a href="about.php">Noticias</a>
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
		
		

<!--------------------MENU MI PERFIL, ASIGNATURAS---------------------------------------->

	
	
<!--------------------FIN DE MENU MI PERFIL, ASIGNATURAS---------------------------------------->
	
	<br>
	<br>
	
<!------------------------------MENU LATERAL DOCENTES, crear docente  ------------------------------------------------>

	
	
<!------------------------------FIN DE MENU LATERAL DOCENTES,crear docente  ------------------------------------------------>


<!---------funcion para mostrar la lista de  los docentes actualizados ---------------------------------------->

    

<!--------- fin de funcion para mostrar la lista de  los docentes actualizados ---------------------------------------->  

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

<div class="pull-left">
<a href="asignaturas.php" class="btn btn-info btn-lg" >ATRÁS</a>

</div>

<style>
.alert-danger{

width:60%;
position:relative;
right:-100px;
margin:0px;
padding:0px;
text-align: justify
}
</style>
<div class="alert alert-danger">
  <strong>Alerta!</strong> En caso quiera retroceder recomendamos usar el botón ATRÁS para evitar problemas de envío de formulario
</div>	  




<?php




$v1 = $_GET['nombre_curso_enviado']; 

// session_start();
// session_name('permiso');

$_SESSION['id_curso']=$v1;
/*Para saber de que curso voy a mostrar los datos necesito el nombre, por eso desde el archivo asiganturas.php he enviado el nombre del curso en la variable nombre_curso_enviado por eso voy a recibirla en la variable $v1*/

?>



<br>



<div class="contenedor_presenta">



<?php 


//esta zona de codigo es para saber si el curso seleecionado tiene una sumilla	

include('conexion.php');


/*consulta si en silabo esta sumilla

$muestra="SELECT sumilla, silabo.cod_silabo FROM silabo inner join usa on silabo.cod_silabo=usa.cod_silabo inner join asignatura on 
	usa.cod_asignatura=asignatura.cod_asignatura WHERE asignatura.nomb_asignatura='$v1'";         
	
	*/
	
	
	$muestra="SELECT sumilla,cod_asignatura from asignatura where cod_asignatura='$v1'";
	
	
	
	$sum1=$con->query($muestra);
	$row1=mysqli_fetch_array($sum1);
?>


<?php
	  
	  //esta zona es para mostrar los datos del curso seleccionado y ademas mostrar los profesores que ya fueron asignados a ese curso
	  
	  include('conexion.php');
	  
	  $q_datos_asignatura ="SELECT * FROM asignatura where cod_asignatura='$v1'";
	 
	  $q_profesores_asignados ="SELECT * FROM dicta inner join asignatura on dicta.cod_asignatura=asignatura.cod_asignatura where asignatura.cod_asignatura='$v1'";//Consulta para que se muestre los profesores asignados al curso
	    $e_profesores_asignados= mysqli_query($con,$q_profesores_asignados);
	   $fila2 = mysqli_fetch_array($e_profesores_asignados);
	   
	   
	   
      $e_datos_asignatura= mysqli_query($con,$q_datos_asignatura);
	  
	 
	  
      $i=0;
      while($a_datos_asignatura = mysqli_fetch_array($e_datos_asignatura))
      {
		$nombre=$a_datos_asignatura['nomb_asignatura'];
		 $horas_practica=$a_datos_asignatura['horas_practica'];
		 $pre_requisito=$a_datos_asignatura['pre_requisito'];
		 $nro_creditos=$a_datos_asignatura['nro_creditos'];
		 $semestre_academico=$a_datos_asignatura['semestre_academico'];
		 $cod_asignatura=$a_datos_asignatura['cod_asignatura'];
		 $facultad=$a_datos_asignatura['facultad'];
		 $horas_teoria=$a_datos_asignatura['horas_teoria'];
		 $horas_laboratorio=$a_datos_asignatura['horas_laboratorio'];
		 if($i=0 )
		 {
		 $Cod_docente=$fila2['Cod_docente'];
			}
			else
			{
				$consulta4="SELECT * FROM dicta inner join docente on docente.interno_docente=dicta.interno_docente where cod_asignatura='$cod_asignatura'";
				$ejecutar4= mysqli_query($con,$consulta4);
				/*fila4 = mysqli_fetch_array($ejecutar4);*/
				//tema de año,deberia aparecer solo los profesores de este año 2017/
				/*$Cod_docente=$fila4['Cod_docente'];*/
			}
	   $i++;

      ?>
	  <!---------SE MUESTRAN DATOS DEL CURSO------------>
	  
	  <!--<div class="pull-right">
		<a href="javascript:window.history.go(0);" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-refresh"></span> Actualizar información</a>
	</div>-->
		<br>
		
		
	  <TABLE style="text-align: left; position: relative; left: 150px" >
	<TR><TH>CÓDIGO ASIGNATURA :</TH>
		<TD><?php echo $cod_asignatura; ?></TD> </TR>
	<TR><TH>NOMBRE DEL CURSO :</TH>
		<TD><?php echo  $nombre; /*echo $i;*/ ?></TD> </TR>
	<TR><TH>PRE-REQUISITO      :</TH>
		<TD><?php echo $pre_requisito; ?></TD> </TR>
	<TR><TH>SEMESTRE ACADÉMICO :</TH>
		<TD><?php echo $semestre_academico; ?></TD> </TR>
	<TR><TH>FACULTAD      :</TH>
		<TD><?php echo  $facultad; ?></TD> </TR>
	<TR><TH>NÚMERO DE CRÉDITOS           :</TH>
		<TD><?php echo $nro_creditos; ?></TD> </TR>
	<TR><TH>HORAS TEORÍA         :</TH>
		<TD><?php echo $horas_teoria; ?></TD> </TR>
	<TR><TH>HORAS DE PRACTICA     :</TH>
		<TD><?php echo $horas_practica; ?></TD> </TR>
	<TR><TH>HORAS LABORATORIO       :</TH>
		<TD><?php echo $horas_laboratorio; ?></TD> </TR>
	
	<TR>
		<TH>DOCENTES:</TH>
		<TD>
			<?php while ($fila4 = mysqli_fetch_array($ejecutar4) ) { ?>
			&nbsp;
				<div class="profesor">
					<?php
					echo $fila4['nombre']; 
					?>	  
					<div class="borrado">
						<a href="#" class="delbutton" data-id="<?php echo $fila4['interno_docente']?>"><u>[Eliminar]</u></a>
					</div>
				</div>
			<?php
				}	  
			?>
	</TR>
	<TR>
		<TH font size="30">ACCIONES:</TH>
		<TD>
		<br>
		
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_editar"><span class="glyphicon glyphicon-pencil" style="position: relative; width: 70px"></span>EDITAR CURSO</button>
		<br>
	  
	  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_asignacion_docente"><span class="glyphicon glyphicon-plus" style="position: relative; width: 30px"></span>AGREGAR DOCENTE</button>
	  <br>
	 
	  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-pencil" style="position: relative; width: 20px"></span>MODIFICAR SUMILLA</button>
	  <STYLE>
	  .hola
	  {
	  max-width:170px;
	  }
	  </STYLE>
	  <form href="asignaturas.php" method="post" class="hola"  >
	  <button style="position: absolute; left:195px; " type="submit" name="ELIMINAR_curso" class="btn btn-danger btn-lg" onclick="return confirm('Estás seguro que deseas eliminar el registro?');">ELIMINAR CURSO</button>
	  </form></TD> </TR>
	</TABLE>
	  <br>
	  
	 
	  <br>
	  
      <?php } ?>
	  
	
	<!--------------->
	
	
	


	
	
	
	
<!--------------INICIO DE VENTANA MODAL EDITAR CURSO--------------------------------->
<?php
	include('conexion.php');//CADENA DE CONEXION

      if(isset($_POST['ELIMINAR_curso']))
	  {
        
        
		$eliminar_asig="DELETE from asignatura

		WHERE cod_asignatura='$v1'";
		
		$ejecutar_eliminar=mysqli_query($con,$eliminar_asig);
		
        if($ejecutar_eliminar)
		
		{
          ?>
		<script language="JavaScript">
	var page='asignaturas.php';
		location.href=page;
		
	</script>
		<?php
        }
      }
     ?>
	 

<?php


include('conexion.php');//CADENA DE CONEXION

      
		$q_buscar_datos_asignatura="select * from asignatura  where cod_asignatura='$v1'";
        $e_buscar_datos_asignatura = mysqli_query($con,$q_buscar_datos_asignatura);
        $a_buscar_datos_asignatura=mysqli_fetch_array($e_buscar_datos_asignatura);
	  
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
		
        </div>
		
        <div class="modal-body" style="color:#000;"  >
		
		<form action="#" method="post" class="CREACION_PENDIENTE"  >
	   
    <div class="contentform">
    	<div id="sendmessage"> Has creado correctamente al docente </div>
	<label style="right: 30px" class="control-label col-sm-8" for="email" align="left"> Nombre asignatura:</label>
	
	<br>
	<br>
	
<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="nomb_asignatura_crea" type="text" class="form-control" name="nomb_asignatura_crea" placeholder="Nombre Curso" value="<?php echo $a_buscar_datos_asignatura[0];?>"  required >
	  
    </div>
	
	<br>
	
	
	
	<label class="control-label col-sm-6" for="email" align="left" >Código asignatura:</label> <label style="left: 20px" class="control-label col-sm-4" for="email" align="right" >Semestre:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input style="width: 120px; float: left" id="cod_asignatura_crea" type="text" class="form-control" name="cod_asignatura_crea" placeholder="codigo asignatura" value="<?php echo $a_buscar_datos_asignatura[5];?>" required>
      <span style="position: relative;left: 50px " class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
	   <select style="width: 120px;position: relative;left: 50px" name="semestre_academico_crea" id="semestre_academico_crea" class="form-control" required >
				
				<option value="<?php echo $a_buscar_datos_asignatura[4];?>"><?php echo $a_buscar_datos_asignatura[4];?></option>
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
				
				<option value="<?php echo $a_buscar_datos_asignatura[7];?>"><?php echo $a_buscar_datos_asignatura[7];?></option>
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
      <input id="escuela_crea" type="text" class="form-control" name="escuela_crea" placeholder="Escuela" value="<?php echo $a_buscar_datos_asignatura[10];?>" required>
    </div>
	<br>
	
	
	
	
	<label style="left: 15px" class="control-label col-sm-5" for="email" align="left" >Ciclo académico:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
   <select name="ciclo_academico_crea" id="ciclo_academico_crea" class="form-control"  required >
				
				<option value="<?php echo $a_buscar_datos_asignatura[6];?>"><?php echo $a_buscar_datos_asignatura[6];?></option>

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
	
	
	
	<label style="left: 15px" class="control-label col-sm-4" for="email" align="left" >Pre requisito:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="pre_requisito_crea" type="text" class="form-control" name="pre_requisito_crea" placeholder="Pre requisito" value="<?php echo $a_buscar_datos_asignatura[2];?>"  required>
    </div>
	<br>
	
	<label class="control-label col-sm-3" for="email" align="left" >Número de créditos:</label>
	
	<div class="col-sm-3" >
	
	
	<div class="input-group ">
      
      <input id="nro_creditos_crea" type="text" class="form-control" name="nro_creditos_crea" required pattern="[0-9]*" placeholder="# creditos" value="<?php echo $a_buscar_datos_asignatura[3];?>"  required>
    </div>
	</div>
	
	
	
	<label class="control-label col-sm-3" for="email" align="left" >Horas teoría:</label>
	
	<div class="col-sm-3" >
	
	<div class="input-group ">
	
      
      <input id="horas_teoria_crea" type="text" class="form-control" name="horas_teoria_crea" placeholder="Horas teoria"  value="<?php echo $a_buscar_datos_asignatura[8];?>" required>
    </div>
	</div>
	<br>
	<br>
	<br>
	
	
	<label class="control-label col-sm-3" for="email" align="left" >Horas práctica:</label>
	
	<div class="col-sm-3" >
	
	<div class="input-group ">
      
      <input id="horas_practica_crea" type="text" class="form-control" name="horas_practica_crea" required pattern="[0-9]"  data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."  placeholder="Horas practica" value="<?php echo $a_buscar_datos_asignatura[1];?>" required>
    </div>
	
	</div>
	
	
	
	<label class="control-label col-sm-3" for="email" align="left" >Horas laboratorio:</label>
	
	<div class="col-sm-3" >
	
	<div class="input-group ">
      
      <input id="horas_laboratorio_crea" type="text" class="form-control" name="horas_laboratorio_crea"  value="<?php echo $a_buscar_datos_asignatura[9];?>" required>
    </div>
	
	</div>
	
	</div>
	
	
	
	<!----<p>Tipo</p>----->
	
	
	
	
	

<!---------------INICIO ZONA DERECHA------------------------->
	</div>

	<!--------------BOTON CREAR DOCENTE---------------------------------->
 
<button style="width: 220px; margin:0px;right: 60px;top: 0px; position: relative; border-radius: 5px" type="submit" name="update_curso" class="bouton-contact" >GUARDAR CAMBIOS</button> 


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
		
          ?>
		<script language="JavaScript">
	var page='curso.php?nombre_curso_enviado=<?php echo $cod_asignatura_edita ?>';
		location.href=page;
		
	</script>
		<?php
		
        }
      }
     ?>

		
		
		
		
        </div>
        
      </div>
	  
      
    </div>
  </div>
  
 
  
</div>



<!--------------FIN DE VENTANA MODAL EDITAR CURSO--------------------------------->


	
	  
	  <?php 


	include('conexion.php');//CADENA DE CONEXION
	$lista_profesores="SELECT * from docente";
	$lista_curso="SELECT * from asignatura where cod_asignatura='$v1'";
	
	$lista_profesores2=mysqli_query($con,$lista_profesores);
	
	$lista_curso2=mysqli_query($con,$lista_curso);
	$array_lista_curso2=mysqli_fetch_array($lista_curso2);
?>
	  <div class="container">
  
  
  <div class="modal fade" id="myModal_asignacion_docente" role="dialog" style="color:#000;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
	  
	  
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  
          <h4 class="modal-title">ASIGNACIÓN DE DOCENTES</h4>
        </div>
		
		
		
		
        <div class="modal-body" style="color:#000;" >
		 <div class="alert alert-info">
    <strong>Recuerde!</strong> Solo puede asignar a dos docentes a un curso.
  </div>
		<form action="#" method="post" name="ASIGNACIÓN">
		<?php 
				
				include('conexion.php');
				
				$consulta_docente_asignado="SELECT * FROM dicta inner join docente on docente.interno_docente=dicta.interno_docente where cod_asignatura='$v1'";
					
				$ejecutar_docente_asignado= mysqli_query($con,$consulta_docente_asignado);
				$i_docente_asignado=0;
				WHILE($fila_docente_asignado= mysqli_fetch_array($ejecutar_docente_asignado))
				{
					
					$nombre_asignado[$i_docente_asignado]=$fila_docente_asignado['nombre'];
				
				$i_docente_asignado++;	
				}
				
					
					
				while($row57=mysqli_fetch_array($lista_profesores2))
					{	
					$name=$row57["nombre"];
					?>
						<input type="checkbox" name="valores[]" value="<?php echo $name?>" class="checks"  >
					<?php
				
						echo "$name<br><br><br>";
					
					}
				?>
				
				
				<style>
				.checks
				{
				width:30%;
				}
				.modal-content
				{
				
				width:90%;
				}
				</style>
			<button type="submit" name="ASIGNAR_DOCENTE" class="bouton-contact"  onclick="alert('ASIGNACIÓN CORRECTA')"  >Guardar cambios</button>	
          
		  
		   </form>
        </div>
        <div class="modal-footer">
          
		  
        </div>
      </div>
	  
      
    </div>
  </div>
  
 
  
</div>


	  
				
	<?php
      //En esta zona se asigna al profesor un curso y se guarda esa asignacion en la tabla dicta
	  if(isset($_POST['ASIGNAR_DOCENTE']))
	  {
        $name=$_POST['valores'];
		//echo $name[0];//el array solo esta lleno con la cantidad que haya seleccionado, en mi caso yo solo selecciono uno por eso pongo el[0]
		//echo $name[1];
		include('conexion.php');//CADENA DE CONEXION
		
		
		
		$nombre_profesor="SELECT * from docente where nombre='$name[0]'";
		
		$nombre_profesor2=mysqli_query($con,$nombre_profesor);
		$array_codigo_profesor=mysqli_fetch_array($nombre_profesor2);
	
		$codigo_profesor=$array_codigo_profesor['interno_docente'];
		//echo $codigo_profesor;
		$fecha=strftime( "%Y-%m-%d-%H-%M-%S", time() );
        $codigo_curso=$array_lista_curso2['cod_asignatura'];
        //echo $codigo_curso;
		
        $insertar_dicta="INSERT INTO dicta(cod_asignatura,interno_docente,fecha_limite,fecha_dicta,observaciones)
         VALUES('$codigo_curso','$codigo_profesor','$fecha','$fecha','ninguna')";
		 
        $ejecutar_insertar = mysqli_query($con,$insertar_dicta);
		
		
		if(isset($name[1]))
		{
		include('conexion.php');
		
		$nombre_profesor_2AS="SELECT * from docente where nombre='$name[1]'";
		
		$nombre_profesorX=mysqli_query($con,$nombre_profesor_2AS);
		
		$array_codigo_profesor2=mysqli_fetch_array($nombre_profesorX);
	
		$codigo_profesor22222=$array_codigo_profesor2['interno_docente'];
		
		$fecha2=strftime( "%Y-%m-%d-%H-%M-%S", time() );
        $codigo_curso22=$array_lista_curso2['cod_asignatura'];
        //echo $codigo_curso;
		
        $insertar_dicta2="INSERT INTO dicta(cod_asignatura,interno_docente,fecha_limite,fecha_dicta,observaciones)
         VALUES('$codigo_curso22','$codigo_profesor22222','$fecha2','$fecha2','ninguna')";
		 
        $ejecutar_insertar22 = mysqli_query($con,$insertar_dicta2);
		
		
		
		}
		
		
		?>
		<script language="JavaScript">
	var page='curso.php?nombre_curso_enviado=<?php echo $codigo_curso ?>';
		location.href=page;
		
	</script>
		<?php
		
		
		}
?>


			</div> 
			



		</div>
		
	</div>
	
	
	
				
				<!----------------------------------FIN DE VENTANA EMERGENTE DOCENTE ASIGNAR--------------------------------------->
				
				<div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.history.go(0);" >&times;</button>
          <h4 class="modal-title">Actualización de sumilla</h4>
        </div>
        <div class="modal-body">
		
          <form method="post" action="#" >
		  <center>
					<textarea name="sumG" class="size" style="margin-left:12%; padding: 10px; border-radius: 5px; border: 1px solid #666666; font-size:10pt;color:#000;" rows="20" cols="40" ><?php echo $row1["sumilla"]?>
					</textarea>
					
				</center>
				<button type="submit" name="sumilla_enviar" class="bouton-contact"  >Guardar cambios</button>
	
				</form>
				
		  
        </div>
        
      </div>
	  
      
    </div>
	
	 <br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>


	<h2 class="brand-before" >
<center>
                        <small>BIENVENIDOS</small>
						</center>
                    </h2>
                    <h1 class="brand-name">UNJBG</h1>
                    <hr class="tagline-divider">
                    <h2>
					
					
  </div>
  
  
  
</div>
				
	  
	  <!-----VENTANA EMERGENTE DE SUMILLA-------------------------->
	  
	
	<?php	

//ESTA FUNCION REEMPLAZA LA ANTERIOR SUMILLA POR LA NUEVA
if(isset($_POST['sumilla_enviar']))
{
        include('conexion.php');
		$nueva_sumilla=$_POST["sumG"];
		//echo $nueva_sumilla;
		$codigo_asignatura=$row1["cod_asignatura"];
		$actualizar="UPDATE asignatura set sumilla='$nueva_sumilla'
          where cod_asignatura='$codigo_asignatura'";
		/*
		
		$cod_silabo=$row1["cod_silabo"];
		echo $cod_silabo;
		$actualizar="UPDATE silabo set sumilla='$nueva_sumilla'
          where cod_silabo='$cod_silabo'";
		
		*/
		
		$ejecutar3=mysqli_query($con,$actualizar);
		
		?>
		<script language="JavaScript">
	var page='curso.php?nombre_curso_enviado=<?php echo $codigo_asignatura ?>';
		location.href=page;
		
	</script>
		<?php
		
  
      }
	  
	  ?>
	 



                        <small>
                            <strong></strong>
                        </small>
                    </h2>	
  

	<br>
	<br>
</div> 

		</div>
		</div>
		
		
		
		 <!-----FIN  DE VENTANA EMERGENTE DE SUMILLA-------------------------->
		
	
					
		
</div> 

	</div>

	</div>


                    
                </div>
            </div>
        </div>

<link type="text/css" href="./css/style_admin_creacion_asignatura.css" rel="stylesheet" />



	<!---aqui pegar--->





    </div>
    <!-- /.container -->


	<style>		
	$(document).on("click","#eliminar",function()
	{
	if(confirm("Estas seguro de que desea eliminar este registro"))
	{
		alert("eliminado... ")
	
	};
	})
	
	</style>
	
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