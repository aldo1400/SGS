<?php  
 include('../conexion/conexion.php');
 $query ="SELECT * FROM asignatura";  
 $result = mysqli_query($con, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Mis asignaturas</title>  
           <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  
   -->
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>           
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>      
    
    
    <!-- https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js
    https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js -->

    
   


      </head>  
      <body>  
          
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
				<a class="nav-link" href="asignatura_lista.php">Asignaturas</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="mis_cursos.php">Mis cursos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="docente_listar.php">Docente</a>
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



                <h3 align="center">Asignaturas</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Nombre</td>  
                                    <td>Escuela</td>  
                                    <td>Ciclo</td>  
                                    <td width="15%"><span class="glyphicon glyphicon-pencil"></span>Acción</td> 
                                    <td width="15%"><span class="glyphicon glyphicon-pencil"></span>Acción</td>
      <td width="15%">Visualizar </td>
      <td width="15%"><span class="glyphicon glyphicon-trash"></span>Eliminar </td>
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["nomb_asignatura"].'</td>  
                                    <td>'.$row["escuela"].'</td>  
                                    <td>'.$row["ciclo_academico"].'</td>  
                                    <td><input type="button" name="edit" value="Asignar docente" id="'.$row["cod_asignatura"].'" class="btn btn-warning btn-xs define_teacher"/></td>
                                    <td><input type="button" name="edit" value="Editar" id="'.$row["cod_asignatura"].'" class="btn btn-warning btn-xs edit_data"/></td>
          <td><input type="button" name="view" value="Visualizar" id="'.$row["cod_asignatura"].'"class="btn btn-info btn-xs view_data"/></td>
          <td><input type="button" name="delete" value="Eliminar" id="'.$row["cod_asignatura"].'"  class="btn btn-danger btn-xs delete_data"/></td>
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  



      </body>  
 </html>  


 <div id="seeModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog  modal-lg">
  <div class="modal-content">

    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar datos personales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <div class="modal-body" id="plato_detalle">

    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
    </div>

</div>

</div>

</div>


 <div id="edit_asig_Modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog  modal-lg">
  <div class="modal-content">

    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar datos asignatura</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  method="POST" id="actualizar_asignatura">
    <div class="modal-body" id="plato_detalle">
    <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationCustom01">Código de asignatura</label>
            <input type="text" class="form-control" name="cod_asignatura" id="cod_asignatura" placeholder="First name" required>
           
          </div>
          <div class="col-md-4 mb-3">
            <label for="nombre_edita">Nombre de asignatura</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Last name" >
            
          </div>
          <div class="col-md-4 mb-3">
            <label for="apellido_edita">Pre requisito</label>
            <input type="text" class="form-control" name="pre_requisito" id="pre_requisito" placeholder="Last name" required>
            
          </div>
        </div>
      <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="grado_edita">Numero de creditos</label>
            <input type="text" class="form-control" name="nro_creditos" id="nro_creditos" placeholder="First name"  required >
            
          </div>
          <div class="col-md-4 mb-3">
            <label for="titulo_edita">Semestre academico</label>
            <input type="text" class="form-control" name="semestre_academico" id="semestre_academico" placeholder="Last name"  required>
            
          </div>
          <div class="col-md-4 mb-3">
            <label for="DNI_edita">Facultad</label>
            <input type="text" class="form-control" name="facultad" id="facultad" placeholder="Last name"  required>
            
          </div>
        </div>
      <div class="form-row">

      <div class="col-md-4 mb-3">
            <label for="tipo_edita">Escuela</label>
            <input type="text" class="form-control" name="escuela" id="escuela" placeholder="First name" required>
          
              
          </div>
          <div class="col-md-4 mb-3">
            <label for="tipo_edita">Ciclo academico</label>
            <input type="text" class="form-control" name="ciclo_academico" id="ciclo_academico" placeholder="First name" required>
          
              
          </div>
          
          <div class="col-md-4 mb-3">
            <label for="email_edita">Horas de laboratorio</label>
            <input type="text" class="form-control" name="horas_laboratorio" id="horas_laboratorio" placeholder="Last name" required >
            
          </div>
          
        </div>
        <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="fnacimiento_edita">Horas de practica</label>
            <input type="text" class="form-control" id="horas_practica" name="horas_practica" placeholder="Last name" required>
            
          </div>

          <div class="col-md-4 mb-3">
            <label for="tipo_edita">Horas de teoria</label>
            <input type="text" class="form-control" name="horas_teoria" id="horas_teoria" placeholder="First name"  required >
          
              
          </div>

        </div>

    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
      <input type="submit" class="btn btn-primary" value="guardar datos">
    </div>
                          </form>
</div>

</div>

</div>



 

 <div id="seleccionar_docente" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
   <br />
   <h3>Docente asignado</h3>
   <table id="docentes_asignados" class="table table-striped table-bordered">  
    </table>
    <hr>
   <h2 align="center">Buscar docente</h2>
   <input id="test_test" />
   <div class="form-group mb-2">
    <label for="staticEmail2" class="sr-only">Nombre docente</label>
    <input type="text" class="form-control" name="search_text" id="search_text" placeholder="Nombre">
  </div>
   <br />
   <div id="result"></div>
   <input type="hidden" id="codigo_asignatura" name="codigo_asignatura" style="visibility: hidden;" />
    </div>
  </div>
</div>

 <script>  
 $(document).ready(function(){  

     function obtener(id_asignatura){
       $('#test_test').val(id_asignatura);
       console.log(id_asignatura);
       console.log('cdcdcdc')
		$.ajax({
      url:"obtener_docente.php",
	  method:"post",
    data:{id_asignatura:id_asignatura},
      success:function(data){
		
          $('#docentes_asignados').html(data);
      }
    	});
	}

   $(document).on('click','.view_data',function(){
          console.log('xd');
              var asignatura_id=$(this).attr("id");
    $.ajax({
      url:"ver_detalle_asignatura.php",
      method:"post",
      data:{asignatura_id:asignatura_id},
      success:function(data){
          $('#plato_detalle').html(data);
          $('#seeModal').modal("show");
      }
    });

  }); 

$(document).on('click','.edit_data',function()
  {
      var id_asignatura=$(this).attr("id");

      $.ajax({
          url:"listar_asignatura.php",
          method:"POST",
          data:{id_asignatura:id_asignatura},
          dataType:"json",
          success:function(data)
          {

            $('#edit_asig_Modal').modal('show');
            $('#cod_asignatura').val(data.cod_asignatura);
            $('#nombre').val(data.nomb_asignatura);
            $('#pre_requisito').val(data.pre_requisito);
            $('#nro_creditos').val(data.nro_creditos);
            $('#semestre_academico').val(data.semestre_academico);
            $('#facultad').val(data.facultad);
			$('#horas_teoria').val(data.horas_teoria);
			$('#horas_laboratorio').val(data.horas_laboratorio);
			$('#horas_practica').val(data.horas_practica);
      $('#escuela').val(data.escuela);
      $('#ciclo_academico').val(data.ciclo_academico);
          }

      });


  });

$(document).on('click','.add_docente_curso',function()
  {
      var id_docente=$(this).attr("id");
      console.log('obtener datos xd');
      console.log(id_docente);
      var id_asignatura=$('#test_test').val();
      console.log(id_asignatura)
      console.log('da faq')
      $.ajax({
          url:"add_docente_curso.php",
          method:"POST",
          data:{id_asignatura:id_asignatura,
          id_docente:id_docente},
          success:function(data)
          {
            console.log('jaskdjaskdj');
            console.log(data);
            // var id_asignatura=$('.define_teacher').attr("id");
            // console.log('asdasdas');
              obtener(data);
          }
      });
  });

$(document).on('click','.eliminar_docente_curso',function()
  {
      var id_docente=$(this).attr("id");
      console.log(id_docente);
      // console.log(id_docente);
      // var id_asignatura=$('#test_test').val();
      // console.log(id_asignatura)
      // console.log('da faq')
      // $.ajax({
      //     url:"add_docente_curso.php",
      //     method:"POST",
      //     data:{id_asignatura:id_asignatura,
      //     id_docente:id_docente},
      //     success:function(data)
      //     {
      //       console.log('jaskdjaskdj');
      //       console.log(data);
      //       // var id_asignatura=$('.define_teacher').attr("id");
      //       // console.log('asdasdas');
      //         obtener(data);
      //     }
      // });
  });


$(document).on('click','.define_teacher',function()
  {
      var id_asignatura=$(this).attr("id");

      obtener(id_asignatura);
      $('#seleccionar_docente').modal('show');

      // load_data();

function load_data(query)
{
 $.ajax({
  url:"buscar_docente.php",
  method:"POST",
  data:{query:query},
  success:function(data)
  {
   $('#result').html(data);
  //  $('codigo_docente').val(data.);
   
  }
 });
}

$('#search_text').keyup(function(){
 var search = $(this).val();
 if(search != '')
 {
  load_data(search);
 }
 else
 {
  // load_data();
 }
});
  });

 $('#actualizar_asignatura').on("submit",function(event){

event.preventDefault();
console.log('xdxdxd');

  // var datos = $('#actualizar_asignatura').serialize(); //datos serializados
  // console.log(datos);
  $.ajax({
    url:"editar_asignatura.php",
    method:"POST",
    data:$('#actualizar_asignatura').serialize(), //enviamos imagen
    success:function(data)
    {
      console.log(data);
      $('#actualizar_asignatura')[0].reset();
      $('#edit_asig_Modal').modal('hide');
      $('#employee_data').html(data);

    }

  });

});



      $('#employee_data').DataTable({
  "language": {
    "search": "Buscar:",
    "emptyTable":     "No hay cursos",
    "zeroRecords":    "No se encontrado el curso",
    "paginate": {
        "first":      "Primero",
        "last":       "Último",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },
    "info":           "Mostrando _START_ to _END_ de _TOTAL_ cursos",
    "infoEmpty":      "Mostrando 0 to 0 of 0 cursos",
    "lengthMenu":     "Mostrando _MENU_ cursos",
  }
});


      
 });  
 </script>  