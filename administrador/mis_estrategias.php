<?php  
 include('../conexion/conexion.php');
 session_start();
    $id_asignatura=$_GET['id_curso'];
 $query ="SELECT * from banco_estrategia inner join estrategia_asignatura on banco_estrategia.codigo_estrategia=estrategia_asignatura.cod_estrategia inner join asignatura on estrategia_asignatura.cod_asignatura=asignatura.cod_asignatura where asignatura.cod_asignatura='$id_asignatura'";  
 $result = mysqli_query($con, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Estrategias</title>  
          <?php  include 'partes/links.php'; ?>        
      </head>  

      <body >  
  
            <?php  include 'partes/navbar.php' ?>
            <input type="hidden" value="<?php echo $_GET['id_curso']; ?>" id="codigo_final_asignatura">
           <div class="container mt-5 pt-5" >  
                <h3 align="center">Estrategias del silabo</h3>  
                <br /> 
                <hr>
                <?php  include 'agregar_estrategia.php' ?>
                <hr>
                <br>
                <div class="table-responsive">  
                     <table id="misestrategias" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>   
                                    <td width="75%">Estrategia</td>  
                                    <!-- <td>Ciclo</td>   -->
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
                                    <td>'.$row["estrategia"].'</td>    
                                    <td><input type="button" name="edit" value="Editar" id="'.$row["codigo_estrategia"].'" class="btn btn-warning btn-xs editar_estrategia"/></td>
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  



      </body>  
 </html>  



<?php include 'modal/editar_estrategia.php' ?>


<script>
$(document).ready(function(){

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
	

  $( "#nueva_estrategia" ).submit(function( e ) {
    e.preventDefault();
    var datos = $(this).serializeArray();
    // console.log('apretaste');
    $.ajax({
          url:"add_estrategia.php",
          method:"POST",
          data:datos,
          success:function(data)
          {
            console.log(data);
            swal(
  'Estrategia creada',
  '',
  'success'
)
hola();
            console.log('asdsadas')
            
          }
      });
    
  });

   $(document).on('click','.editar_estrategia',function(e){
    e.preventDefault();
    var estrategia_id=$(this).attr("id");
    var asignatura_id=$('#codigo_final_asignatura').val();
    // console.log(`${competencia_id}`);

    $.ajax({
          url:"listar_estrategia.php",
          method:"POST",
          data:{estrategia_id:estrategia_id},
          dataType:"json",
          success:function(data)
          {
              console.log(data);
              
            $('#editar_estrategia_modal').modal('show');
            // $('#competencia_id_editar').val(data.cod_competencia);
            $('#codigo_estrategia').val(data.codigo_estrategia);
            $('#estrategia_contenido').val(data.estrategia);
            $('#asignatura').val(asignatura_id);
            // $('#descripcion').val(data.competencia);
          }

      });


  });

  $( "#editar_estrategia" ).submit(function( e ) {
    e.preventDefault();
    var datos = $(this).serializeArray();
    // console.log('apretaste');
    $.ajax({
          url:"edit_estrategia.php",
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
        title: "Estrategia actualizada", 
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


      $('#misestrategias').DataTable({
  "language": {
    "search": "Buscar:",
    "emptyTable":     "No hay estrategias",
    "zeroRecords":    "No se encontrado la estrategia",
    "paginate": {
        "first":      "Primero",
        "last":       "Último",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },
    "info":           "Mostrando _START_ to _END_ de _TOTAL_ cursos",
    "infoEmpty":      "Mostrando 0 to 0 of 0 cursos",
    "lengthMenu":     "Mostrando _MENU_ estrategias",
  }
});
      
 });  
 </script>  