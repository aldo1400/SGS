<?php  
 include('../conexion/conexion.php');
 $query ="SELECT * FROM asignatura";  
 $result = mysqli_query($con, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>  
           <script src=""></script>  
            <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>     
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
                 
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Datatables Jquery Plugin with Php MySql and Bootstrap</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Nimbre</td>  
                                    <td>Escuela</td>  
                                    <td>Ciclo</td>  
                                     
                                    <td width="15%"><span class="glyphicon glyphicon-pencil"></span>Editar</td>
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

      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();


      $(document).on('click','.view_data',function(){
          console.log('xd');
              var docente_id=$(this).attr("id");
    $.ajax({
      url:"ver_detalle_asignatura.php",
      method:"post",
      data:{docente_id:docente_id},
      success:function(data){
          console.log('hjhjh');
          $('#plato_detalle').html(data);
          $('#seeModal').modal("show");
      }
    });

  }); 
 });  
 </script>  