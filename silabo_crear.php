<!----------------
EN ESTE ARCHIVO SE MOSTRARA LOS DATOS DEL DOCENTE
------------------------>



<!-------------ESTE ES UN METODO DE SEGURIDAD, YO HE CREADO EN LOGIN.PHP dos variables de sesion, es decir variables que estarna presentes en todos los archivos, las podemos llamar y utilizar su valor, si estas variables estan vacias significa que no se logeo correctamnete el docente o admin, por lo tanto se redirigire a index.html----------------->


<?php

session_start();
session_name('permiso');

if(!$_SESSION)
{
header("location:index.php");


}

$nombre_docente_verificado=$_SESSION['nombre_doc'];


?>
<!------------------fin de metodo de seguridad-------------------------------------->




<!DOCTYPE html>
<html charset="utf-8">


<!------recibo la variable nombre_admin, donde esta el nombre del administrador------------->

<?php

include('conexion.php');//en este archivo se encuentra la cadena de conexion
$id_asig=$_GET["nombre_asig"];


		
		
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
 
 
 <!--------------título de la pagina------------------->
 
    <div class="brand"><img src="img/logounjbg.png" width="200" height="200">UNJBG</div>
    <div class="address-bar">Sistema de acceso para editar sílabos</div>

	
	<!-----------------MENU DE NAVEGACION HOME, NOTICIAS BLOG CONTACTANOS--------------------------------->
	
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
                    
					
					<?php

session_start();
session_name('permiso');

if(!$_SESSION)
{
?>
<li>
                        <a href="index.php">Inicio</a>
                    </li>
<?
}
else
{

if(!$_SESSION['nombre_docente'])
{
$nombre_docente_verificado=$_SESSION['nombre_doc'];
?>
					<li>
                        <a href="docente.php?nombre_doc=<?php echo $nombre_docente_verificado ?>">Mi perfil</a>
                    </li>
<?					
}
else
{
$nombre_admin=$_SESSION['nombre_docente'];
?>

					<li>
                        <a href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?>">Mi perfil</a>
                    </li>

<?
}

}
?>

					
					
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
	
	
<!-----------------FIN DE NAVEGACION HOME, NOTICIAS BLOG CONTACTANOS--------------------------------->




    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>




<br>

<!----------------------EN ESTA PARTE MUESTRO LOS DATOS DEL ADMINISTRADOR QUE ES EXTRAIDO DE LA BASE DE DATOS ---------------------------->


<style>
body{font: 14px "Open Sans", serif; background-color: #fdfdfd; float: left; height: 100%; position: relative; width: 100%;}

*{margin: 0; padding: 0; box-sizing: border-box;}
a{text-decoration: none;}
li{list-style: none;}
h2{font-size: 24px; font-weight: 600; margin-bottom: 20px;}

.container{margin: 0 auto; max-width: 900px;}

.row{float: left; width: 100%;}
/* accordion css */
.accordions{padding: 20px 0;}
.accordions li{padding: 6px 0 6px 22px;}
.accordion-Heading {font-size: 18px; text-transform: uppercase; color: #333; position: relative; padding: 0 10px; font-weight: 600; cursor: pointer;}
.accordion-Heading span{position: absolute; width: 22px; text-align: center; height: 22px; border: 1px solid #333; border-radius: 50%; left: -22px; top: 1px;}
.accordion-Heading i.acc-minus{background-color: #333; height: 3px; transition: 0.3s; left: 5px; margin-top: 8px; position: absolute; vertical-align: top; width: 11px;}
.accordion-Heading i.acc-minus.close{transition: 0.3s; margin-top: 5px; top: 3px; z-index: -1; transform: rotate(90deg); -webkit-transform: rotate(90deg); -moz-transform: rotate(90deg); -ms-transform: rotate(90deg);}
.acc-description{display: none; padding: 0 10px;}
.acc-description p{font-size: 13px; line-height: 22px; margin-top: 15px;}
.acc-description p:first-child{margin-top: 0;}
/* accordion css */

</style>

<?

include('conexion.php');
$sql_primero="select * from asignatura where cod_asignatura='$id_asig'";
$consulta=mysqli_query($con,$sql_primero);
$DATOS_ASIGNA=mysqli_fetch_array($consulta);

?>

<div class="container">    
    <ul class="accordions on-clicks row">
    	<h2>SEMESTRE ACADéMICO</h2>
		<select name="tipo" id="tipo">
    <option>2017-I</option>
    <option>2017-II</option>
</select>
<BR>
<BR>
    	<li>
        	<h3 class="accordion-Heading" href="javascript: void(0);"><span><i class="acc-minus close"></i><i class="acc-minus"></i></span>I. DATOS GENERALES</h3>
			
            <div class="acc-description">
            	<div class="form-group">
      <label for="facultad">1.1 Facultad:</label>
      <input type="text" class="form-control" id="facultad" name="facultad" value="<?echo $DATOS_ASIGNA['facultad'];?>">
    </div>
	
	   <div class="form-group">
      <label for="escuela">1.2 Escuela:</label>
      <input type="text" class="form-control" id="escuela" name="escuela" value="<?echo $DATOS_ASIGNA['escuela'];?>">
    </div>
	
	   <div class="form-group">
      <label for="asig">1.3 Asignatura:</label>
      <input type="text" class="form-control" id="asig" name="asig" value="<?echo $DATOS_ASIGNA['nomb_asignatura'];?>">
    </div>
	
	   <div class="form-group">
      <label for="codigo">1.4 Código:</label>
      <input type="text" class="form-control" id="codigo" name="codigo" value="<?echo $DATOS_ASIGNA['cod_asignatura'];?>">
    </div>
	
	   <div class="form-group">
      <label for="pre_re">1.5 Pre-requisito:</label>
      <input type="text" class="form-control" id="pre_re" name="pre_re" value="<?echo $DATOS_ASIGNA['pre_requisito'];?>">
    </div>
	
	   <div class="form-group">
      <label for="c_acad">1.6 Ciclo académico:</label>
      <input type="text" class="form-control" id="c_acad" name="c_acad" value="<?echo $DATOS_ASIGNA['ciclo_academico'];?>">
    </div>
	
	   <div class="form-group">
      <label for="s_acad">1.7 Semestre Académico:</label>
      <input type="text" class="form-control" id="s_acad" name="s_acad" value="<?echo $DATOS_ASIGNA['semestre_academico'];?>">
    </div>
	
	   <div class="form-group">
      <label>1.8 Horas semanales : 
            <ul>
              <li>Teoría:</li>
              <li>Práctica:</li>
              <li>Laboratorio:</li>
            </ul> 
        </label>
       </div>
	
	   <div class="form-group">
      <label for="creditos">1.9 Créditos</label>
      <input type="text" class="form-control" id="creditos" name="creditos" value="<?echo $DATOS_ASIGNA['nro_creditos'];?>">
    </div>
	
	   <div class="form-group">
      <label for="t_asig">1.10 Tipo de asignatura:</label>
      <input type="text" class="form-control" id="t_asig" name="t_asig">
    </div>
	
	   <div class="form-group">
      <label for="docente">1.11 Docente:</label>
      <input type="text" class="form-control" id="docente" name="docente">
    </div>
	
	    <div class="form-group">
    <label for="email">1.12 Email :</label>
    <input type="email" class="form-control" id="email">
  </div>
            </div>
        </li>
        <li>
        	<h3 class="accordion-Heading" href="javascript: void(0);"><span><i class="acc-minus close"></i><i class="acc-minus"></i></span>II. SUMILLA</h3>
            <div class="acc-description">
  <div class="form-group">
      <textarea id="Field4" name="Field4" spellcheck="true" rows="10" cols="50" tabindex="4" class="form-control"></textarea>
    </div>
            </div>
        </li>
        <li>
        	<h3 class="accordion-Heading" href="javascript: void(0);"><span><i class="acc-minus close"></i><i class="acc-minus"></i></span>III. COMPETENCIAS DE LA ASIGNATURA</h3>
            <div class="acc-description">
            	<div class="form-group">
		<label for="compe">3.1 COMPETENCIA :</label>
		<input type="text" class="form-control" id="compe">
        
    </div >
    
     <div>
        <label>3.2 Evidencia: </label>
        <select name="tipo" id="">
            <option>Prueba de entrada</option>
            <option>Examenes escritos</option>
            <option>Informes de Laboratorio</option>
            <option value="">Evaluacion de proyecto</option>
            <option value="">otro...</option>
        </select>
    </div>
            </div>
        </li>
        <li>
        	<h3 class="accordion-Heading" href="javascript: void(0);"><span><i class="acc-minus close"></i><i class="acc-minus"></i></span>IV. UNIDADES DIDÁCTICAS</h3>
            <div class="acc-description">
            <div>
        <label>Número de Unidades: <input type="" id="credi" name="credi" /></label>
    </div>

            </div>
        </li>
      
    </ul>
    
  
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(window).load(function(){
	
	var clk = 0;
	
	/* on click accordion jquery */
	$(".on-clicks .accordion-Heading").click(function(){
		if(clk == 0){
			$(".on-clicks .acc-description").slideUp(300);
			$(this).next(".acc-description").slideDown(300);
			$(this).children("span").children(".acc-minus").eq(0).removeClass("close");
			$(this).addClass("active");
			clk++;
		}
		else{
			if($(this).hasClass("active")){
				$(this).next(".acc-description").slideUp(300);
				$(this).children("span").children(".acc-minus").eq(0).addClass("close");
				$(this).removeClass("active");
				clk--;
			} else {
				$(".on-clicks .acc-description").slideUp(300);
				$(".on-clicks .accordion-Heading.active").children("span").children(".acc-minus").eq(0).addClass("close");
				$(".on-clicks .accordion-Heading ").removeClass("active");
				$(this).next(".acc-description").slideDown(300);
				$(this).children("span").children(".acc-minus").eq(0).removeClass("close");
				$(this).addClass("active");
				clk++;
			}
		}
	});
	/* on click accordion jquery end */
	
	/* on mouseover accordion jquery */
	$(".on-mouseover .accordion-Heading").mouseover(function(){
		if(clk == 0){
			$(".on-mouseover .acc-description").slideUp(300);
			$(this).next(".acc-description").slideDown(300);
			$(this).children("span").children(".acc-minus").eq(0).removeClass("close");
			$(this).addClass("active");
			clk++;
		}
		else{
			if($(this).hasClass("active")){
				$(this).next(".acc-description").slideUp(300);
				$(this).children("span").children(".acc-minus").eq(0).addClass("close");
				$(this).removeClass("active");
				clk--;
			} else {
				$(".on-mouseover .acc-description").slideUp(300);
				$(".on-mouseover .accordion-Heading.active").children("span").children(".acc-minus").eq(0).addClass("close");
				$(".on-mouseover .accordion-Heading ").removeClass("active");
				$(this).next(".acc-description").slideDown(300);
				$(this).children("span").children(".acc-minus").eq(0).removeClass("close");
				$(this).addClass("active");
				clk++;
			}
		}
	});
	/* on mouseover accordion jquery end */
});
</script>



<!-----menu de cursos--------------------->

<div class="container demo">
<style>
.panel-group
{
width:60%;
height:100%;

}
</style>
    
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

		<?php
		
		$ID_ADMIN = $_GET['nombre_admin'];

$extraer_interno_admin="select interno_docente from docente  where Cod_docente='$ID_ADMIN'";
		$EJECUCION_ID=mysqli_query($con,$extraer_interno_admin);
		$interno_docente= mysqli_fetch_array($EJECUCION_ID);
		
		
		//En esta zona haremos que se creen tantos submenus como cursos tenga el docente seleecionado, por ejemplo si el docnete tiene 6 cursos asignados , aparecen 6 submenus con los nombre de los cursos, de maner dinamica.
		include('conexion.php');
		$CONSULTAR_CURSOS="select * from docente inner join dicta on docente.interno_docente=dicta.interno_docente inner join asignatura on dicta.cod_asignatura=asignatura.cod_asignatura where dicta.interno_docente='$interno_docente'";
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
				<br>
<br>
<br>
<br>
            </div>
			<br>
<br>
<br>
<br>
        </div>
		<?php } ?>
		
		<!----------fin de submenus de cursos--------------------->
		
		

    </div><!-- panel-group -->
    
    
</div><!-- container -->



	</div>
	
	
	
	<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModal_editar_admin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
		
		
        <div class="modal-body">
		
		<form action="#" method="post" class="EDITAR_ADMIN"  >
	   
    <div class="contentform">
    	<div id="sendmessage"> Has creado correctamente al docente </div>
		
		<div class="form-group">
      <label class="control-label col-sm-4" for="CODIGO_DOCENTE">Codigo docente:</label>
      <div class="col-sm-4">
        <p class="form-control-static"><?php echo $Cod_docente; ?></p>
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
	
	<label class="control-label col-sm-4" for="email" align="left" >Apellido:</label>
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
	
	<br>
	
	
	
	<label class="control-label col-sm-4" for="email" align="left" >Telefono:</label>
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
		
		
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>


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
		
		
		$telefono_edita=$_POST["telefono_edita"];
		
		$password_edita=$_POST["password_edita"];

		$actualizar="UPDATE docente set nombre='$nombre_docente_edita',apellido='$apellido_edita',dni='$dni_edita',direccion='$direccion_edita',
		tipo='$tipo_edita',email='$email_edita',fnacimiento='$fnacimiento_edita',password='$password_edita',telefono_docente='$telefono_edita'

		WHERE Cod_docente='$Cod_docente'";
		
		
		$ejecutar_actu_admin=mysqli_query($con,$actualizar);

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

<link type="text/css" href="./css/style_admin_creacion.css" rel="stylesheet" />



	<!---aqui pegar--->





    </div>
    <!-- /.container -->

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
