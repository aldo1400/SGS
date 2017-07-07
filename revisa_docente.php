<!----------------

EN ESTE ARCHIVO SE MOSTRARAN LOS DATOS DE UN PROFESOR PARA QUE PUEDA SER EDITADO , TAMBIEN MUESTRA LOS CURSOS DEL PROFESOR

------------------------>



<!-------------ESTE ES UN METODO DE SEGURIDAD, YO HE CREADO EN LOGIN.PHP dos variables de sesion, es decir variables que estaran presentes en todos los archivos, las podemos llamar y utilizar su valor, si estas variables estan vacias significa que no se logeo correctamnete el docente o admin, por lo tanto se redirigire a index.html----------------->




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
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>
	
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

<script>
 $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '< Ant',
 nextText: 'Sig >',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 dateFormat: 'yy/mm/dd',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
$(function () 
{
$("#fecha").datepicker();
});
</script>

	
	
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
		
			<li><a href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?> "><i class="icono izquierda fa fa-home"></i>Mi perfil</a></li>
			
			
			<li><a href="#"><i class="icono izquierda fa fa-user"></i>Mis cursos<i class="icono derecha fa fa-chevron-down"></i></a>
				<ul>
		<?php
		
		
include('conexion.php');

$extraer_interno_docente="select interno_docente from docente  where Cod_docente='$nombre_admin'";
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
     <TABLE cellpadding=5 >
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CÓDIGO DOCENTE :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Cod_docente; ?></TD> </TR>
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOMBRE         :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $nombre; ?></TD> </TR>
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APELLIDO       :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $apellido; ?></TD> </TR>
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DNI            :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dni; ?></TD> </TR>
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DIRECCIÓN      :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $direccion; ?></TD> </TR>
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TIPO           :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tipo; ?></TD> </TR>
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-MAIL         :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $email; ?></TD> </TR>
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FECHA NAC.     :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fnacimiento; ?></TD> </TR>
	<TR><TH>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TELÉFONO       :</TH>
		<TD ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $telefono; ?></TD> </TR>
	</TABLE>
	
	  <br>
	  
	  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_editar_admin">EDITAR DATOS</button>
	  
	  <!---------------------ventana modal editar docente--------------------------------------------->
	  <div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <style>
  
  .modal-content
  {
  color:#000;
  }
  
  
  </style>
  <div class="modal fade" id="myModal_editar_admin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edita docente</h4>
        </div>
		
		
        <div class="modal-body">
		
		<form action="#" method="post" class="EDITAR_ADMIN"  >
	   
    <div class="contentform">
    	<div id="sendmessage"> Has creado correctamente al docente </div>
		
		<div class="form-group">
      <label class="control-label col-sm-4" for="CODIGO_DOCENTE">Código docente:</label>
      <div class="col-sm-4">
        <p class="form-control-static" style="color:#000;"><?php echo $Cod_docente; ?></p>
      </div>
    </div>
	
	
	<label class="control-label col-sm-8" for="email" align="left" >Nombre docente:</label>
	<br>
	<br>
	
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="nombre_docente_edita" type="text" class="form-control" name="nombre_docente_edita"   data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."  placeholder="Nombre" value="<?php echo $nombre;?>" required />
    </div>
	
	<br>
	
	<label class="control-label col-sm-4" for="email" align="left" >Apellidos:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="apellido_edita" type="text" class="form-control" name="apellido_edita" placeholder="Apellido" value="<?php echo $apellido;?>"  required />
    </div>
	<br>
	
	
	<label class="control-label col-sm-8" for="email" align="left" >DNI:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="DNI_edita" type="text" class="form-control" name="DNI_edita"  data-rule="maxlen:8" required pattern="[0-9]{8}" placeholder="DNI" value="<?php echo $dni;?>"  required />
    </div>
	<br>
	
	<label class="control-label col-sm-4" for="email" align="left" >Dirección:</label>
	<br>
	<br>
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
	   <input id="direccion_edita" type="text" class="form-control" name="direccion_edita"  placeholder="Direccion" value="<?php echo $direccion;?>"  required />
	   
	   
    </div>
	<br>
	
	<label class="control-label col-sm-6" for="email" align="left" >Tipo:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
	  <select name="tipo_edita" id="tipo_edita" class="form-control" required />
				
				<option value="<?php echo $tipo;?>"><?php echo $tipo;?></option>
				
				<option value="docente">docente</option>
				<option value="admin">admin</option>
				
				</select>
    </div>
	<br>
	
	<label class="control-label col-sm-4" for="email" align="left" >Email:</label>
	<br>
	<br>
	
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email_edita" type="email" class="form-control" name="email_edita" placeholder="Email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire." value="<?php echo $email;?>" required/>
    </div>
	<br>
	
	
	<!----<p>Tipo</p>----->
	
	<label class="control-label col-sm-4" for="email" align="left" >Fecha nacimiento:</label>
	<br>
	<br>
	
	<div class="input-group ">
	
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="f_nacimiento_edita" type="text" class="form-control" name="f_nacimiento_edita" placeholder="Fecha nacimiento"  value="<?php echo $fnacimiento;?>" required />
    </div>
	<br>
	
	
	
	<!----<p>Tipo</p>----->
	
	<label class="control-label col-sm-4" for="email" align="left" >Contraseña</label>
	<br>
	<br>
	
	<div class="input-group ">
	
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="password_edita" type="text" class="form-control" name="password_edita" placeholder="Contraseña"  value="<?php echo $password;?>" required />
    </div>
	<br>
	
	
	
	
	<label class="control-label col-sm-4" for="email" align="left" >Teléfono:</label>
	<br>
	<br>
	<div class="input-group ">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  
	   <input id="telefono_edita" type="text" class="form-control" name="telefono_edita"  placeholder="telefono" value="<?php echo $telefono;?>"  required />
	   
	   
    </div>
	<br>
	
	
	

	</div>

	<!--------------BOTON CREAR DOCENTE---------------------------------->
 
<button type="submit" name="update_admin" class="bouton-contact" >GUARDAR CAMBIOS</button> 


</form>
		
		
		  
        </div>
		
		
        
      </div>
      
    </div>
  </div>
  
</div>

<?php

//esta funcion nos ayudara a guardar los cambios de los datos del docente en la base de datos al momento de editarlo
if(isset($_POST['update_admin']))
{
        include('conexion.php');
		
		$nombre_docente_edita=$_POST["nombre_docente_edita"];
		
        $apellido_edita=$_POST["apellido_edita"];
		
        $dni_edita=$_POST["DNI_edita"];
		
        $direccion_edita=$_POST["direccion_edita"];
		
		$tipo_edita=$_POST["tipo_edita"];
		
        $email_edita=$_POST["email_edita"];
		
        $fnacimiento_edita=$_POST["f_nacimiento_edita"];
		
		$password_edita=$_POST["password_edita"];
		
		$telefono_edita=$_POST["telefono_edita"];

		$actualizar="UPDATE docente set nombre='$nombre_docente_edita',apellido='$apellido_edita',dni='$dni_edita',direccion='$direccion_edita',
		tipo='$tipo_edita',email='$email_edita',fnacimiento='$fnacimiento_edita',password='$password_edita',telefono_docente='$telefono_edita'

		WHERE Cod_docente='$Cod_docente'";
		
		
		$ejecutar_actu_admin=mysqli_query($con,$actualizar);
		
		if($ejecutar_actu_admin)
		{
		?>
		
		<script language="JavaScript">
	var page='revisa_docente.php?nombre_profesor=<?php echo $id_profesor ?>';
		location.href=page;
		
	</script>
		
		<?
		}
      }?>
		
  
		
	
	  <!---------------------ventana modal editar docente--------------------------------------------->
	  
	  
	  
	  
	  
	  
	  <center>
	  <BUTTON  type="button"   name="boton_recargar" onclick="document.location.reload();" class="btn btn-warning btn-lg " >Recargar datos</button>
	  <!-------boton recargar pagina---------------->
	  
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
		
		
		
		?>
		
		
	<?
	

      }?>
		
	
	  
	  <?php
	  
	  ?>
	  
	 
<br><br>
	
	
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
	<div class="panel panel-default">
	<div class="panel-heading">Cursos asignados
	<br>
	</div>
	<br>
	
	<div class="container demo">

    
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        
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
				  
				  <!-----<p>Fecha limite <span>*</span></p>
			<span class="icon-case"><span class="glyphicon glyphicon-calendar"></span></span>
				<input type="text" name="fecha_limite" id="fecha_limite" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."  />-------------->
				<br>
			<style>
			.observaciones1{
			resize:none;
			}
			</style>		
		
        <form action="" method="post" class="form-inline" role="form">
        		<p><label class="control-label col-sm-3" for="fecha limite">Fecha límite:</label></p>
		
		<div class="input-group col-sm-4" >
		
		<input type="hidden" value="<?echo  $CURSOS['cod_asignatura'] ?>" id="cod_asig" name="cod_asig" >
		<input type="hidden" value="<?echo  $id_profesor ?>" id="interno_docente1" name="interno_docente1" >
		<input type="text" id="fecha" value="<?echo  $CURSOS['fecha_limite'] ?>" name="fecha" />
		
		</div>
 
		
	
				<br>
				<br>
				<br>
			<p>OBSERVACIONES <span>*</span></p>
			
			<span class="icon-case"><span class="glyphicon glyphicon-exclamation-sign"></span></span>
				<textarea type="text" CLASS="observaciones1" name="observaciones_nueva" id="observaciones_nueva"  data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné." /><?echo  $CURSOS['observaciones'] ?></textarea>
               
							
<button type="submit" name="fecha_limite_asignación" class="btn btn-success btn-lg" >GUARDAR CAMBIOS</button>
</form>
                </div>
            </div>
        </div>
		<?php } ?>
		
		<!----------fin de submenus de cursos--------------------->
		
		

    </div><!-- panel-group -->
    
    
</div><!-- container -->
	
	</div>

		</div>
  
  <?php
  if(isset($_POST['fecha_limite_asignación']))
{
        
		include('conexion.php');
        $cod_asig=$_POST["cod_asig"];
		//echo $cod_asig;
		$fecha=$_POST["fecha"];
		//echo $fecha;
		$int_docente=$_POST["interno_docente1"];
        //echo $int_docente;
		$nueva_observacion=$_POST["observaciones_nueva"];
		echo $nueva_observacion;
		$CONSULTAR_ID_ASIG="update dicta set fecha_limite='$fecha',observaciones='$nueva_observacion' where interno_docente='$int_docente' and cod_asignatura='$cod_asig'";
		
		
		$execute=mysqli_query($con,$CONSULTAR_ID_ASIG);
		

      }?>
	  
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
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
                    <p>version 1.0 &copy;  2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    

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