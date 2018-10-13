<?php
include('../conexion/conexion.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Carta</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  </head>

  <body>
    <div class="container-fluid main-container">
    <div class="col-md-10 content">
    <div class="panel panel-default">
  	<div class="panel-heading">
  	Lista de platos
  	</div>
  	<div class="panel-body">


      <div class="table-responsive">

        <div align="right">

        <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"><span class="glyphicon glyphicon-plus-sign"></span>Añadir plato</button>

        </div>


        <br/>
      <div id="plato_tabla">


          <table class="table table-bordered">
            <tr>
              <th width="35%">Nombre </th>
              <th width="25%">Apellido </th>
              <th width="25%">DNI</th>
              <th width="35%">Imagen del docente </th>
              <th width="15%"><span class="glyphicon glyphicon-pencil"></span>Editar</th>
              <th width="15%">Visualizar </th>
              <th width="15%"><span class="glyphicon glyphicon-trash"></span>Eliminar </th>
            </tr>

            <?php
session_start();
            $id=$_SESSION['id'];
            $query="SELECT * FROM docente where id!=$id";

            $result=mysqli_query($con,$query);


              while($row=mysqli_fetch_array($result))
              {
                ?>

                <tr>  <td><?php echo $row["apellido"];?></td>
                  <td><?php echo $row["nombre"];?></td>
                  <td><?php echo $row["dni"];?></td>
                  <td><img src="<?php echo $row["ruta_imagen"]; ?>" width="50" height="50" alt="" align="RIGHT" /></td>
                  <td><input type="button" name="edit" value="Editar" id="<?php echo $row["id"];?>" class="btn btn-warning btn-xs edit_data" data-toggle="modal" data-target="#edit_data_Modal"> </td>
                  <td><input type="button" name="view" value="visualizar" id="<?php echo $row["id"];?>" class="btn btn-info btn-xs view_data"></td>
                  <td><input type="button" name="delete" value="eliminar" id="<?php echo $row["id"];?>" class="btn btn-danger btn-xs delete_data" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"></td>
                </tr>
                <?php
              }

             ?>
           </table>
         </div>
      </div>


  	</div>
  </div>
    		</div>
    		
    	</div>

  </body>

</html>





<div id="dataModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="editar_doc">

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


<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Crear plato</h4>
        </div>
        <div class="modal-body">
          <form method="post" id="insertar_formulario" enctype="multipart/form-data" >
            <label>Ingresa el nombre del plato</label>
            <input type="text" name="nombre_plato" id="nombre_plato" class="form-control" />
            <br/>

            <label>Ingresa el precio</label>
            <input type="text" name="precio" id="precio" class="form-control"/>
            <br/>


           <br/>

           <label>Ingresar descripción</label>
           <textarea name="descripcion" id="descripcion" rows="8" cols="80" class="form-control" style="resize:none;"></textarea>
           <br/>

           <label>Selecciona la foto del plato</label>
           <input name="foto1" type="file" class="file" id="foto1" />
           <br/>
           <label>Disponible</label>
           <div class="panel panel-default">
  <div class="panel-body">

    <input type="radio" name="disponible" value="si">SI
    <input type="radio" name="disponible" value="no">no
  </div>
</div>


           <label>Oferta</label>

           <div class="panel panel-default">
  <div class="panel-body">

    <input type="radio" name="oferta" value="si">SI
    <input type="radio" name="oferta" value="no">no
  </div>
</div>




           <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success">
         </form>
       </div>

       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

       </div>

        </div>
      </div>

    </div>



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

<script>

$(document).ready(function(){
  $(document).on('click','.delete_data',function(){
    var id_delete=$(this).attr("id");

    $.ajax({
        url:"delete.php",
        method:"POST",
        data:{id_delete:id_delete},
        dataType:"json",
        success:function(data)
        {
            $('#plato_tabla').html(data);

        }
    });

    });

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



  $('#insertar_formulario').on("submit",function(event){

    event.preventDefault();

    var nombre=$('#nombre_plato').val();
    var precio=$('#precio').val();
var RE=/^\d{1,3}(\.\d{1,2})?$/;

    if($('#nombre_plato').val()=="")
    {
      alert("Se requiere nombre de plato");
    }

    else if($('#precio').val()=="")
    {
        alert("precio es requerido");
    }

    else if(!(RE.test(precio)))
    {
        alert(" no fomato no party");
    }
    else if($('#descripcion').val()=="")
    {
        alert("La descripcion del plato es necesaria");
    }

    else if($('#foto1').val()=="")
    {
        alert("La foto no esta subida");
    }

    else{


      var datos = $(this).serializeArray(); //datos serializados
            var imagen = new FormData($("#insertar_formulario")[0]);

            //agergaremos los datos serializados al objecto imagen
            $.each(datos,function(key,input){
              imagen.append(input.name,input.value);
            });

      $.ajax({
        url:"insert.php",
        method:"POST",
        data:imagen, //enviamos imagen
       contentType:false,
       processData:false,
        success:function(data)
        {


          $('#insertar_formulario')[0].reset();
          $('#add_data_Modal').modal('hide');
          $('#plato_tabla').html(data);


        }

      });



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
        url:"editar_docentefinal.php",
        method:"POST",
        data:imagen, //enviamos imagen
       contentType:false,
       processData:false,
        success:function(data)
        {

          $('#actualizar_docente')[0].reset();
          $('#edit_data_Modal').modal('hide');
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
