<?php
session_start();
if((!isset($_SESSION['codigo_docente'])) && $_SESSION['tipo']!='admin' ){
	header("Location:index.php");
}
$nombre_admin=$_SESSION['nombre'];
include('../conexion/conexion.php');
?>

<!DOCTYPE html>
<html charset="utf-8">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Universidad Nacional -   JORGE BASADRE GROHMANN</title>

    <!-- <link type="text/css" href="../css/admin.css" rel="stylesheet" /> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos_finales.css">

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

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>
 
 
 <!--------------título de la pagina------------------->
 
 <div class="container-fluid fixed-top" style="background:#560000">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark" style="background:#560000">
		<a class="navbar-brand" href="index.php"><img class="img-fluid" style="width:50px" src="../imagenes/logo-unjbg.png" />Sistema de silabos</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent" >
			<div class="mr-auto">
			</div>
		<ul class="navbar-nav">
			<li class="nav-item active">
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about.php">Noticias</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="blog.php">Blog</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../docente_listado/index.php">Docente</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Silabos</a>
			</li>
			<?php

if(!isset($_SESSION))
{
	?>
	<li class="nav-item active">
		<a class="nav-link" href="index.php">Inicio 3<span class="sr-only">(current)</span></a>
	</li>
<?php }
else{
	?>
	<li class="nav-item dropdown">
<?php
if($_SESSION['tipo']=='docente'){
	?>
	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<?php echo $_SESSION['nombre']?>
			</a> 
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="docente.php">Mi perfil</a>
	<?php
}
else{
	?>
	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<?php echo $_SESSION['nombre']?>
			</a> 
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="administrador.php">Mi perfil</a>
	<?php
}
?>
<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Cerrar sesión</a>
				</div>
<?php
}
?>					
				
			</li>
			</ul>
			
		</div>
		</nav>


    </div>
    </div>


<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-4 bg-primary mt-5 pt-5">
				<div class="contenedor-menu1">
					<li class="btn-menu1">Docente<i class="icono fa fa-bars"></i></li>
					<ul class="menu1">
					<li><a href="administrador.php"><i class="icono izquierda fa fa-user"></i>Mi perfil</a></li>
					<li><a href="#"><i class="icono izquierda fa fa-book"></i>Mis cursos<i class="icono derecha fa fa-chevron-down"></i></a>
				<ul>
		<?php
		$id_docente=$_SESSION['id'];
		//En esta zona haremos que se creen tantos submenus como cursos tenga el docente seleecionado, por ejemplo si el docnete tiene 6 cursos asignados , aparecen 6 submenus con los nombre de los cursos, de maner dinamica.
		$q_CONSULTAR_CURSOS_ASIGNADOS_MENU="select * from docente inner join dicta on docente.interno_docente=dicta.interno_docente inner join asignatura on dicta.cod_asignatura=asignatura.cod_asignatura where docente.interno_docente='$id_docente'";
		$e_EJECUCION_CURSOS=mysqli_query($con,$q_CONSULTAR_CURSOS_ASIGNADOS_MENU);
		$i=0;
		while($CURSOS = mysqli_fetch_array($e_EJECUCION_CURSOS))
		{
			$nombre=$CURSOS['nomb_asignatura'];
			$id_asignatura=$CURSOS['cod_asignatura'];	
			$dt_fecha=$CURSOS['fecha_dicta'];
			$parte = explode("-", $dt_fecha);
			$fecha_sistema=getdate();
			$i++;
			if($fecha_sistema['year']==$parte[0])
			{
			?>
	  <!--------------EN ESTA PARTE SE ESTAN CREANDO LOS LINKS DE CADA PROFESOR, Y ACTUALIZANDO AUTOMATICAMENTE SI SE CREA UN DOCENTE--->
        <li style="text-align:left;" ><a href="../curso_docente.php?id_asig=<?php echo $id_asignatura ?>"><img src="img/flecha.png" width="30" height="30" name="flecha"><?php echo $nombre; ?></a></li>
		<?php }} ?>				
				</ul>
			</li>
			
		</ul>
	</div>

	<div class="contenedor-menu">
		<li class="btn-menu">Administración<i class="icono fa fa-bars"></i></li>
			<ul class="menu">	
					<li><a href="asignaturas.php"><i class="icono izquierda fa fa-folder-open"></i>Plan de estudios</a></li>
					<li><a href="administrador.php?nombre_admin=<?php echo $nombre_admin ?>"><i class="icono izquierda fa fa-user-plus"></i>Crear docente</a></li>
					<li><a href="#"><i class="icono izquierda fa fa-users"></i>Docentes<i class="icono derecha fa fa-chevron-down"></i></a>
						<ul>
			<?php
			  $q_lista_total_docentes ="SELECT * FROM docente where interno_docente!=$id_docente";
			  $e_lista_total_docentes= mysqli_query($con,$q_lista_total_docentes);
			  while($a_lista_total_docentes = mysqli_fetch_array($e_lista_total_docentes))
			  {
				?>			
				<li style="text-align:left;"><a href="revisa_docente.php?nombre_profesor=<?php echo $a_lista_total_docentes['interno_docente'] ?>"><img src="img/flecha.png"  width="30" height="30" name="flecha">Ing.<?php echo $a_lista_total_docentes['nombre']; ?></a></li>
				<?php } ?>						
					</ul>
					</li>
				</ul>
	</div>

			</div>
				
			<div class="col-md-8 bg-secondary">
				
		
			
	  <div class="container-fluid bg-primary mt-5 pt-5">
	  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="administrador.php">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="mi perfil">Mi perfil</li>
  </ol>
</nav>
	  <div class="container bg-success">
	  
	  <h2>Datos personales</h2>

	  <input type="hidden" id="id_docente" value="<?php echo $_SESSION['id'];?>"/>
	  <hr>
	  <div class="row">
	  <div class="col-12">
		
		<div class="pull-right">
			<a href="logout.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a>
		</div>
<button type="button" id="editar-modal-docente" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Editar datos</button>

		</div>
			  </div>

	  <div class="row " id="test">
		  
	  </div>
	 

	  </div>
	  </div>
			
			</div>
		</div>
	</div>
</div>	 
      

<?php
  if(isset($_POST['fecha_limite_asignación']))
{
        $cod_asig=$_POST["cod_asig"];
		echo $cod_asig;
		
		$fecha=$_POST["fecha"];
		
		echo $fecha;
		
		$int_docente=$_POST["interno_docente1"];
        echo $int_docente;
		
		$CONSULTAR_ID_ASIG="update dicta set fecha_limite='$fecha' where interno_docente='$int_docente' and cod_asignatura='$cod_asig'";
		
		$execute=mysqli_query($con,$CONSULTAR_ID_ASIG);
		if($execute)
		
		{
		
		?>
		<script language="JavaScript">
	var page='administrador0.php?nombre_admin=<?php echo $nombre_admin ?>';
		location.href=page;
		
	</script>
	<?php
		
		}

      }?>
	</div>
	
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="editar_doc">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar datos personales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form enctype="multipart/form-data" method="POST" id="actualizar_docente">
	  <input type="hidden" id="id_docente" name="id_docente" value="<?php echo $_SESSION['id'];?>"/>
      <div class="modal-body">

<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Código docente</label>
      <input type="text" class="form-control" name="" id="validationCustom01" placeholder="First name" value="<?php echo  $id_docente; ?>" required disabled="true">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="nombre_edita">Nombres</label>
      <input type="text" class="form-control" name="nombre_edita" id="nombre_edita" placeholder="Last name" value="<?php echo  $nombre; ?>" required >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="apellido_edita">Apellidos</label>
      <input type="text" class="form-control" name="apellido_edita" id="apellido_edita" placeholder="Last name" value="<?php echo  $apellido; ?>" required >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="grado_edita">Grado academico</label>
      <input type="text" class="form-control" name="grado_edita" id="grado_edita" placeholder="First name" value="<?php echo  $grado_academico; ?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="titulo_edita">Titulo</label>
      <input type="text" class="form-control" name="titulo_edita" id="titulo_edita" placeholder="Last name" value="<?php echo  $titulo; ?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="DNI_edita">Dni</label>
      <input type="text" class="form-control" name="DNI_edita" id="DNI_edita" placeholder="Last name" value="<?php echo  $dni; ?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
	</div>
<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="tipo_edita">Tipo</label>
      <!-- <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="<?php echo  $tipo; ?>" required> -->
	  <select name="tipo_edita" id="tipo_edita" class="form-control" required />
	  			<option value="<?php echo $tipo;?>"><?php echo $tipo;?></option>
				  <?php if($tipo=='admin'){
					  ?>
					<option value="docente">docente</option>
					<?php
				  }else{?>
					<option value="admin">admin</option>
					<?php
				  } ?>
				</select>
				<div class="valid-feedback was-validated">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="email_edita">Email</label>
      <input type="text" class="form-control" name="email_edita" id="email_edita" placeholder="Last name" value="<?php echo  $email; ?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="fnacimiento_edita">Fecha de nacimiento</label>
      <input type="text" class="form-control" id="fnacimiento_edita" name="fnacimiento_edita" placeholder="Last name" value="<?php echo  $fnacimiento; ?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>


  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="telefono_edita">Telefono</label>
      <input type="text" class="form-control" id="telefono_edita" name="telefono_edita" placeholder="First name" value="<?php echo  $telefono; ?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-8 mb-3">
      <label for="foto_edita">Foto de perfil</label>
      <input type="file" class="form-control" id="foto_edita" name="foto_edita" placeholder="Last name" value="" />
      <div class="valid-feedback">
        Looks good!
      </div>
    </div> 
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="guardar datos">
      </div>
	  </form>
    </div>
  </div>
</div>


<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="../js/main.js"></script>
<script src="../js/jquery.validate.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


<script>
$(document).ready(function(){
	
	function hola(){
	var id_docente=$('#id_docente').val();
		$.ajax({
      url:"obtener_datos.php",
	  method:"post",
	  data:{id_docente:id_docente},
      success:function(data){
		
          $('#test').html(data);
      }
    	});
	}
	hola();
	$(document).on('click','#editar-modal-docente',function()
  {
	var id_docente=$('#id_docente').val();

      $.ajax({
          url:"modal_docente.php",
          method:"POST",
          data:{id_docente:id_docente},
          dataType:"json",
          success:function(data)
          {
            $('.bd-example-modal-lg').modal('show');
            $('#nombre_edita').val(data.nombre);
            $('#apellido_edita').val(data.apellido);
            $('#grado_edita').val(data.grado_academico);
            $('#titulo_edita').val(data.titulo);
            $('#email_edita').val(data.email);
			$('#DNI_edita').val(data.dni);
			$('#fnacimiento_edita').val(data.fnacimiento);
			$('#telefono_edita').val(data.telefono_docente);
			$('#tipo_edita').val(data.tipo);
          }

      });


  });

	jQuery.validator.addMethod("solo_letras", function(value, element) { 
          return this.optional(element) || /^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/.test(value)
	},"Alpha only");
	jQuery.validator.addMethod("dni_valor", function(value, element) { 
          return this.optional(element) || /[0-9]{8}$/.test(value)
	},"Alpha only");
	
	$('#actualizar_docente').validate({
		rules:{
			nombre_edita:{
				required:true,
				solo_letras:true,
				string:true
			},
			apellido_edita:{
				required:true,
				solo_letras:true
			},
			grado_edita:{
				required:true,
				solo_letras:true
			},
			titulo_edita:{
				required:true,
				solo_letras:true
			},
			email_edita:{
				required:true,
				email:true
			},
			DNI_edita:{
				required:true,
				dni_valor:true
			},
			fnacimiento_edita:"required",
			telefono_edita:{
				required:true,
				number:true
			}
		},
		messages:{
			nombre_edita:{
				required:"Ingresa tu nombre",
				solo_letras:"El nombre solo contiene letras",
				string:"El nomsdbre solo contiene letras"
			},
			apellido_edita:{
				required:"Ingresa tu apellido",
				solo_letras:"El apellido solo contiene letras"
			},
			grado_edita:{
				required:"Ingresa tu grado",
				solo_letras:"El grado solo contiene letras"
			},
			DNI_edita:{
				required:"Ingresa tu DNI",
				dni_valor:"El dni no tiene 8 numeros"
			},
			telefono_edita:{
				required:"Ingrese su telefono",
				number:"El celular esta formado por numeros"
			},
		}
	});

$('#actualizar_docente').on("submit",function(event){
event.preventDefault();

var nombre=$('#nombre_edita').val();
var apellido=$('#apellido_edita').val();
var grado=$('#grado_edita').val();
var titulo=$('#titulo_edita').val();
var email=$('#email_edita').val();
var dni=$('#DNI_edita').val();
var fnacimiento=$('#fnacimiento_edita').val();
var telefono=$('#telefono_edita').val();
var tipo=$('#tipo_edita').val();

  var datos = $(this).serializeArray(); //datos serializados
		var imagen = new FormData($("#actualizar_docente")[0]);
		//agergaremos los datos serializados al objecto imagen
		$.each(datos,function(key,input){
		  imagen.append(input.name,input.value);
		});

  $.ajax({
	url:"editar_docente.php",
	method:"POST",
	data:imagen, //enviamos imagen
   contentType:false,
   processData:false,
	success:function(data)
	{
		swal("Éxito", "Los datos han sido actualizados", "success");
		$('#actualizar_docente')[0].reset();
	  $('.bd-example-modal-lg').modal('hide');
	//   $('#test').html(data);
	  hola();

	}

  });


});

});

</script>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>version 1.0 &copy;  2017</p>
                </div>
            </div>
        </div>
    </footer>

   
</body>

</html>
