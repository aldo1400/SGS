<?php  
 include('../conexion/conexion.php');
 session_start();
    $id_asignatura=$_GET['id_curso'];
 $query ="SELECT * from bibliografia inner join bibliografia_asignatura on bibliografia.id=bibliografia_asignatura.id_libro inner join asignatura on bibliografia_asignatura.id_asignatura=asignatura.cod_asignatura where asignatura.cod_asignatura='$id_asignatura'";  
 $result = mysqli_query($con, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Mis libros</title>  
          <?php  include 'partes/links.php'; ?>        
      </head>  

      <body >  
  
            <?php  include 'partes/navbar.php' ?>
            
            <input type="hidden" value="<?php echo $_GET['id_curso']; ?>" id="codigo_final_asignatura">
           <div class="container mt-5 pt-5" >  
                <h3 align="center">Bibliografia del silabo</h3>  
                <button class="btn btn-primary agregar_libro mb-5" id=""><i class="fas fa-plus-circle"></i> Añadir bibliografia</button>
                <br />  
                <br >
                <br>
                <div class="table-responsive">  
                     <table id="mislibros" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>   
                               <td width="5%">Id</td>
                               <td>Tipo</td> 
                                    <td>Ubicación</td>  
                                    <td>Autor</td>  
                                    <td>Titulo</td> 
                                    <td>Año</td>  
                                    <td>Link</td>   
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
                               <td>'.$row["id"].'</td> 
                               <td>'.$row["tipo"].'</td>
                               <td>'.$row["ubicación"].'</td>      
                               <td>'.$row["autor"].'</td>
                               <td>'.$row["titulo"].'</td> 
                               <td>'.$row["año"].'</td>  
                               <td>'.$row["link"].'</td>  
                                    <td><a name="edit" id="'.$row["id"].'" class="btn btn-warning btn-xs editar_libro text-white"><i class="fas fa-pen"></i></a></td>
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  



      </body>  
 </html>  



<?php include 'modal/editar_libro.php' ?>
<?php  include 'modal/crear_libro.php' ?>

<script>
$(document).ready(function(){

 $(document).on('click','.agregar_libro',function(){
    var asignatura=$('#codigo_final_asignatura').val();
    console.log(asignatura);
    
    $('#crear_libro_modal').modal("show");
    // $('#asignatura').val(asignatura);
    $("input[id=asignatura]").val(asignatura);
  });


function hola(){
  var id_curso=$('#codigo_final_asignatura').val();
		$.ajax({
      url:"listar_all_estrategias.php",
	  method:"post",
    data:{id_curso:id_curso},
      success:function(data){
		
          $('#misestrategias').html(data);
      }
    	});
	}
	

  $( "#crear_libro" ).submit(function( e ) {
    e.preventDefault();
    // console.log('apretaste pereo');
    var datos = $(this).serializeArray();
    // console.log('apretaste');
    $.ajax({
          url:"add_bibliografia.php",
          method:"POST",
          data:datos,
          success:function(data)
          {
            console.log(data);
//             swal(
//   'Estrategia creada',
//   '',
//   'success'
// )
// hola();

swal({
        title: "Libro añadido", 
        type: "success"
    }).then(function () {
      location.reload();
    })

            console.log('asdsadas')
            
          }
      });
    
  });

   $(document).on('click','.editar_libro',function(e){
    e.preventDefault();
    console.log('asa')
    var libro_id=$(this).attr("id");
    var asignatura_id=$('#codigo_final_asignatura').val();
    // console.log(`${competencia_id}`);

    $.ajax({
          url:"listar_libro.php",
          method:"POST",
          data:{libro_id:libro_id},
          dataType:"json",
          success:function(data)
          {
              console.log(data);
              
            $('#editar_libro_modal').modal('show');
            // $('#competencia_id_editar').val(data.cod_competencia);
            $('#libro_id').val(data.id);
            $('#tipo').val(data.tipo);
            $('#ubicacion').val(data.ubicación);
            $('#autor').val(data.autor);
            $('#titulo').val(data.titulo);
            $('#year').val(data.año);
            $('#link').val(data.link);
            $('#asignatura').val(asignatura_id);
            
          }

      });


  });

  $( "#editar_libro" ).submit(function( e ) {
    e.preventDefault();
    var datos = $(this).serializeArray();
    // console.log('apretaste');
    $.ajax({
          url:"edit_libro.php",
          method:"POST",
          data:datos,
          success:function(data)
          {
            console.log(data);
//             swal(
//   'Estrategia actualizada',
//   '',
//   'success'
// )

 swal({
        title: "Bibliografia actualizada", 
        type: "success"
    }).then(function () {
      location.reload();
    })
$('#editar_estrategia_modal').modal('hide');
// hola();
// $('misestrategias').DataTable().ajax.reload(null,false); - 


            
          }
      });
    
  });


      $('#mislibros').DataTable({
        "stateSave": "true",
        "autoWidth": false,
        "columnDefs":[
   {
    "targets":[1],
    "orderable":false,
   },
  ],
  "language": {
    "search": "Buscar:",
    "emptyTable":     "No hay libros",
    "zeroRecords":    "No se ha encontrado el libro",
    "paginate": {
        "first":      "Primero",
        "last":       "Último",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },
    "info":           "Mostrando _START_ to _END_ de _TOTAL_ libros",
    "infoEmpty":      "Mostrando 0 to 0 of 0 libros",
    "lengthMenu":     "Mostrando _MENU_ libros",
  }
});
      
 });  
 </script>  