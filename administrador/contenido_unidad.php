<?php  
 include('../conexion/conexion.php');
 session_start();
    $id_unidad=$_GET['id_unidad'];
 $query ="SELECT * from unidades inner join contenido_unidad on unidades.id=contenido_unidad.id_unidad where contenido_unidad.id_unidad='$id_unidad'";  
 $result = mysqli_query($con, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Competencias</title>  
           <?php  include 'partes/links.php'; ?>   
      </head>  
      <body>  
         
         <?php include 'partes/navbar.php' ?>
         <input type="hidden" value="<?php echo $_GET['id_unidad']; ?>" id="codigo_final_asignatura">
           <div class="container mt-5 pt-5">  
                <h3 align="center">Contenido de la unidad</h3>  
                <button class="btn btn-primary agregar_competencia" id="">Añadir competencia</button>
                <br />  
                <div class="table-responsive">  
                     <table id="contenido_unidad" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Numero de semana</td>  
                                    <td>Procedimientos</td>  
                                    <td>Conceptos</td>  
                                    <td>Metodo recursos</td> 
                                    <td width="15%"><span class="glyphicon glyphicon-pencil"></span>Editar</td> 
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
                                    <td>'.$row["numero_semana"].'</td>  
                                    <td>'.$row["procedimientos"].'</td>  
                                    <td>'.$row["conceptos"].'</td> 
                                    <td>'.$row["metodo_recursos"].'</td> 
                                    <td><input type="button" name="edit" value="Editar" id="'.$row["id"].'" class="btn btn-warning btn-xs editar_competencia"/></td>
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  



      </body>  
 </html>  




<?php include 'modal/crear_contenido.php' ?>
<?php include 'modal/editar_competencia.php' ?>



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
  
  $(document).on('click','.agregar_competencia',function(){
    var asignatura=$('#codigo_final_asignatura').val();
    $('#asignatura').val(asignatura);
    $('#crear_competencia_modal').modal("show");
    
  });

  $(document).on('click','.editar_competencia',function(e){
    e.preventDefault();
    var competencia_id=$(this).attr("id");
    // var asignatura_id=$('#codigo_final_asignatura').val();
    console.log(`${competencia_id}`);

    $.ajax({
          url:"listar_competencia.php",
          method:"POST",
          data:{competencia_id:competencia_id},
          dataType:"json",
          success:function(data)
          {
              console.log(data);
            $('#editar_competencia_modal').modal('show');
            $('#competencia_id_editar').val(data.cod_competencia);
            $('#tipo').val(data.tipo_competencia);
            $('#descripcion').val(data.competencia);
          }

      });


  });

  $( "#crear_competencia" ).submit(function( e ) {
    e.preventDefault();
    var datos = $(this).serializeArray();
    $.ajax({
          url:"add_competencia.php",
          method:"POST",
          data:datos,
          success:function(data)
          {
            // console.log(data);
            // console.log('asdsadas')
            $('#crear_competencia_modal').modal("hide");
            swal(
  'Competencia creada',
  '',
  'success'
)    
hola();
          }
      });
    
  });
  $( "#editar_competencia" ).submit(function( e ) {
    e.preventDefault();
    console.log('aprestasre')
    var datos = $(this).serializeArray();
    $.ajax({
          url:"actualizar_competencia.php",
          method:"POST",
          data:datos,
          success:function(data)
          {
            console.log(data);
            // console.log('asdsadas')
            $('#editar_competencia_modal').modal('hide');
            swal(
                'Competencia actualizada',
                '',
                'success' 
            )
            hola();
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


      $('#contenido_unidad').DataTable({
  "language": {
    "search": "Buscar:",
    "emptyTable":     "No hay competencias",
    "zeroRecords":    "No se ha encontrado la competencia",
    "paginate": {
        "first":      "Primero",
        "last":       "Último",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },
    "info":           "Mostrando _START_ to _END_ de _TOTAL_ competencias",
    "infoEmpty":      "Mostrando 0 to 0 of 0 competencias",
    "lengthMenu":     "Mostrando _MENU_ competencias",
  }
});
      
 });  
 </script>  