<?php
include('../conexion/conexion.php');
$id=$_POST['id_docente'];
$q_datos_docente ="SELECT * FROM docente where id='$id'";
      $e_datos_docente= mysqli_query($con,$q_datos_docente);
      $i=0;
      $output='';
      while($a_datos_docente = mysqli_fetch_array($e_datos_docente))
      {
		 $Cod_docente=$a_datos_docente['Cod_docente'];
		 $nombre=$a_datos_docente['nombre'];
		 $apellido=$a_datos_docente['apellido'];
		 $dni=$a_datos_docente['dni'];
		 $direccion=$a_datos_docente['direccion'];
		 $tipo=$a_datos_docente['tipo'];
		 $email=$a_datos_docente['email'];
		 $fnacimiento=$a_datos_docente['fnacimiento'];
		 $telefono=$a_datos_docente['telefono_docente'];
		 $password=$a_datos_docente['password'];
		 $ruta_imagen=$a_datos_docente['ruta_imagen'];
		 $grado_academico=$a_datos_docente['grado_academico'];
         $titulo=$a_datos_docente['titulo'];
         
        $i++;
      }

      $output.='<div class="col-md-4 col-12 my-auto">
		<img class="img-fluid" src="'.$ruta_imagen.'"  />
		</div>
		<div class="col-md-4 col-6 text-bold">
			<div>Codigo docente</div>
			<div>Nombre</div>
			<div>Apellido</div>
			<div>Grado academico</div>
			<div>Titulo</div>
			<div>DNI</div>
			<div>Tipo</div>
			<div>Email</div>
			<div>Fecha de nacimiento</div>
			<div>Telefono</div>
		</div>
        <div class="col-md-4 col-6">
        <div>'.$Cod_docente.'</div>
      <div>'.$nombre.'</div>
      <div>'.$apellido.'</div>
      <div>'.$grado_academico.'</div>
      <div>'.$titulo.'</div>
      <div>'.$dni.'</div>
      <div>'.$tipo.'</div>
      <div>'.$email.'</div>
      <div>'.$fnacimiento.'</div>
      <div>'.$telefono.'</div>
        </div>';
        
      echo $output;
?>