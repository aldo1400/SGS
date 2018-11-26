<?php  
 include('../conexion/conexion.php');
 session_start();
    $id_asignatura=$_GET['id_curso'];
    $query ="SELECT * from unidades inner join asignatura on unidades.id_asignatura=asignatura.cod_asignatura where asignatura.cod_asignatura='$id_asignatura'"; 
 
 $result = mysqli_query($con, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Unidades</title>  
           <?php  include 'partes/links.php'; ?>   
      </head>  
      <body>  
         
         <?php include 'partes/navbar.php' ?>
         <input type="hidden" value="<?php echo $_GET['id_curso']; ?>" id="codigo_final_asignatura">
           <div class="container mt-5 pt-5">  
                <h3 align="center">Unidades del silabo</h3>  
                <button class="btn btn-primary agregar_unidad mb-5" id=""><i class="fas fa-plus-circle"></i> Añadir unidad</button>
                <br />  
                <div class="table-responsive">  
                     <table id="misunidades" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                               <td>Numero</td>  
                                    <td>Nombre</td>  
                                    <td>Logro</td>  
                                    <td>Actitudes</td> 
                                    <td>..</td>  
                                    <td width="15%">Editar</td> 
                                    <!-- <td width="15%"><span class="glyphicon glyphicon-pencil"></span>Editar</td>
      <td width="15%">Visualizar </td>
      <td width="15%"><span class="glyphicon glyphicon-trash"></span>Eliminar </td> -->
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                               <td>'.$row["numero"].'</td>  
                                    <td>'.$row["nombre"].'</td>  
                                    <td>'.$row["logro"].'</td> 
                                    <td>'.$row["actitudes"].'</td> 
                                    <td><a href="contenido_unidad.php?id_unidad='.$row["id"].'" name="edit"  id="'.$row["cod_asignatura"].'" class="btn btn-warning btn-xs "/><i class="far fa-edit"></i> Unidad del silabo</a></td>  
                                    <td><a name="edit" id="'.$row["id"].'" class="btn btn-warning btn-xs editar_unidad text-white" ><i class="fas fa-pen"></i</a></td>
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  



      </body>  
 </html>  




<?php include 'modal/crear_unidad.php' ?>
<?php include 'modal/editar_unidad.php' ?>



<script>
$(document).ready(function(){  
  
//   function hola(){
//   var id_curso=$('#codigo_final_asignatura').val();
// 		$.ajax({
//       url:"listar_all_competencias.php",
// 	  method:"post",
//     data:{id_curso:id_curso},
//       success:function(data){
		
//           $('#miscompetencias').html(data);
//       }
//     	});
// 	}
  
  $(document).on('click','.agregar_unidad',function(){
    var asignatura=$('#codigo_final_asignatura').val();
    $('#asignatura').val(asignatura);
    $('#crear_unidad_modal').modal("show");
    
  });

  $(document).on('click','.editar_unidad',function(e){
    e.preventDefault();
    var unidad_id=$(this).attr("id");
    // var asignatura_id=$('#codigo_final_asignatura').val();
    // console.log(`${competencia_id}`);
    console.log('holaaaaaaa')

    $.ajax({
          url:"listar_unidades.php",
          method:"POST",
          data:{unidad_id:unidad_id},
          dataType:"json",
          success:function(data)
          {
              console.log(data);
              console.log(data.nombre)
            $('#editar_unidad_modal').modal('show');
            $('#logro_editar').val(data.logro);
            $('#titulo_editar').val(data.nombre);
            $('#numero_editar').val(data.numero);
            $('#actitudes_editar').val(data.actitudes);
              $('#unidad_id_editar').val(data.id);
          }

      });


  });

  $( "#crear_unidad" ).submit(function( e ) {
    e.preventDefault();
    console.log('holaaaaaaaaaaa');
    var datos = $(this).serializeArray();
    $.ajax({
          url:"add_unidad.php",
          method:"POST",
          data:datos,
          success:function(data)
          {
            console.log(data);
            // console.log('asdsadas')
            $('#crear_unidad_modal').modal("hide");
//             swal(
//   'Unidad creada',
//   '',
//   'success'
// )    

swal({
        title: "Unidad creada", 
        type: "success"
    }).then(function () {
      location.reload();
    })


// hola();
          }
      });
    
  });
  $( "#editar_unidad" ).submit(function( e ) {
    e.preventDefault();
    console.log('aprestasre1');
    var datos = $(this).serializeArray();
    $.ajax({
          url:"actualizar_unidad.php",
          method:"POST",
          data:datos,
          success:function(data)
          {
            console.log(data);
            // console.log('asdsadas')
            $('#editar_unidad_modal').modal('hide');
            swal({
        title: "Unidad actualizada", 
        type: "success"
    }).then(function () {
      location.reload();
    })
            // swal(
            //     'Competencia actualizada',
            //     '',
            //     'success' 
            // )
            // hola();
          }
      });
    
  });
         

    //  $(document).on('click','.show_asignatura',function(){
        
     $(document).on('click','.show_asignatura',function(){
          console.log('xd11');
              var asignatura_id=$(this).attr("id");
    // $.ajax({
    //   url:"ver_detalle_asignatura.php",
    //   method:"post",
    //   data:{asignatura_id:asignatura_id},
    //   success:function(data){
    //       // $('#').html(data);
    //       $('#editar_competencia').modal("show");
    //   }
    // });

  }); 


      $('#misunidades').DataTable({
  "language": {
    "search": "Buscar:",
    "emptyTable":     "No hay unidades",
    "zeroRecords":    "No se ha encontrado la unidad",
    "paginate": {
        "first":      "Primero",
        "last":       "Último",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },
    "info":           "Mostrando _START_ to _END_ de _TOTAL_ unidades",
    "infoEmpty":      "Mostrando 0 to 0 of 0 unidades",
    "lengthMenu":     "Mostrando _MENU_ unidades",
  }
});
      
 });  
 </script>  