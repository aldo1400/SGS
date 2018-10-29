<?php
include('../conexion/conexion.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Lista de docentes</title>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 



<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.10/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.10/sweetalert2.min.css"></script>

  </head>

  <body>

    <?php  include 'partes/navbar.php';?>
    <div class="container mt-5">
    

    <div class="col-md-10 content">
    <div class="panel panel-default">
  	<div class="panel-heading">
  	</div>
  	<div class="panel-body">


      <div class="table-responsive">

        <div align="right">

        <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"><span class="glyphicon glyphicon-plus-sign"></span>Añadir docente</button>

        </div>


        <br/>
      <div id="plato_tabla">
      </div>
      </div>


  	</div>
  </div>
    		</div>
    		
    	</div>

  </body>

</html>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="edit_data_Modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar datos personales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form enctype="multipart/form-data" method="POST" id="actualizar_docente">
	  <input type="hidden" id="id_docente" name="id_docente" />
      <div class="modal-body">

<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Código docente</label>
      <input type="text" class="form-control" name="cod_docente" id="cod_docente" placeholder="First name"  required disabled="true">
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="nombre_edita">Nombres</label>
      <input type="text" class="form-control" name="nombre_edita" id="nombre_edita" placeholder="Last name"  required >
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="apellido_edita">Apellidos</label>
      <input type="text" class="form-control" name="apellido_edita" id="apellido_edita" placeholder="Last name"  required >
      
    </div>
  </div>
<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="grado_edita">Grado academico</label>
      <input type="text" class="form-control" name="grado_edita" id="grado_edita" placeholder="First name"  required>
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="titulo_edita">Titulo</label>
      <input type="text" class="form-control" name="titulo_edita" id="titulo_edita" placeholder="Last name"  required>
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="DNI_edita">Dni</label>
      <input type="text" class="form-control" name="DNI_edita" id="DNI_edita" placeholder="Last name"  required>
      
    </div>
	</div>
<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="tipo_edita">Tipo</label>
      
	  <select name="tipo_edita" id="tipo_edita" class="form-control" required />
					<option value="docente">docente</option>
					<option value="admin">admin</option>
		</select>
				
    </div>
    <div class="col-md-4 mb-3">
      <label for="email_edita">Email</label>
      <input type="text" class="form-control" name="email_edita" id="email_edita" placeholder="Last name"  required>
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="fnacimiento_edita">Fecha de nacimiento</label>
      <input type="text" class="form-control" id="fnacimiento_edita" name="fnacimiento_edita" placeholder="Last name" required>
      
    </div>
  </div>


  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="telefono_edita">Telefono</label>
      <input type="text" class="form-control" id="telefono_edita" name="telefono_edita" placeholder="First name"  required>
      
    </div>
    <div class="col-md-8 mb-3">
      <label for="foto_edita">Foto de perfil</label>
      <input type="file" class="form-control" id="foto_edita" name="foto_edita" placeholder="Last name" value="" />
     
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
</div>

<?php include('modal_view_docente.php');?>
<?php include('modal_add_docente.php');?>
<?php include('modal_edit_docente.php');?>

<script>

$(document).ready(function(){
  $(document).on('click','.delete_data',function(){
    var id_delete=$(this).attr("id");
    console.log(id_delete);
    if(confirm('¿Estas seguro de visitar esta url?')){
      $.ajax({
        url:"eliminar_docente.php",
        method:"POST",
        data:{id_delete:id_delete},
        dataType:"json",
        success:function(data)
        {
          console.log(data);
          $('#plato_tabla').html(data);
         
        }
    });
    }
   

    });

  function hola(){
		$.ajax({
      url:"test.php",
	  method:"post",
      success:function(data){
		
          $('#plato_tabla').html(data);
      }
    	});
	}
	hola();

  $(document).on('click','.edit_data',function()
  {
      var id_docente=$(this).attr("id");

      $.ajax({
          url:"fetch.php",
          method:"POST",
          data:{id_docente:id_docente},
          dataType:"json",
          success:function(data)
          {

            $('#edit_data_Modal').modal('show');
            console.log(data);
            $('#cod_docente').val(data.Cod_docente);
            $('#nombre_edita').val(data.nombre);
            $('#apellido_edita').val(data.apellido);
            $('#grado_edita').val(data.grado_academico);
            $('#titulo_edita').val(data.titulo);
            $('#email_edita').val(data.email);
			$('#DNI_edita').val(data.dni);
			$('#fnacimiento_edita').val(data.fnacimiento);
			$('#telefono_edita').val(data.telefono_docente);
			$('#tipo_edita').val(data.tipo);
            $('#id_docente').val(data.id);


          }

      });


  });



  $('#add_docente').on("submit",function(event){

    event.preventDefault();
    console.log('object');
      var datos = $(this).serializeArray(); //datos serializados
            var imagen = new FormData($("#add_docente")[0]);

            //agergaremos los datos serializados al objecto imagen
            $.each(datos,function(key,input){
              imagen.append(input.name,input.value);
            });

      $.ajax({
        url:"insertar_docente.php",
        method:"POST",
        data:imagen, //enviamos imagen
       contentType:false,
       processData:false,
        success:function(data)
        {

          $('#add_docente')[0].reset();
          $('#add_data_Modal').modal('hide');
          swal(
            'Docente creado',
            '',
            'success'
          )
          $('#plato_tabla').html(data);


        }

      });
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
        url:"editar_docentefinal.php",
        method:"POST",
        data:imagen, //enviamos imagen
       contentType:false,
       processData:false,
        success:function(data)
        {

          $('#actualizar_docente')[0].reset();
          $('#edit_data_Modal').modal('hide');
          swal(
            'Docente actualizado',
            '',
            'success'
          )
          $('#plato_tabla').html(data);

        }

      });

  });




$(document).on('click','.view_data',function(){
    var docente_id=$(this).attr("id");
    $.ajax({
      url:"ver_detalle_docente.php",
      method:"post",
      data:{docente_id:docente_id},
      success:function(data){
          $('#plato_detalle').html(data);
          $('#dataModal').modal("show");
      }
    });

  });


});

</script>
