<?php  
 include('../conexion/conexion.php');
 session_start();
 $id_docente=$_SESSION['id'];
 $query ="SELECT * from docente inner join dicta on docente.id=dicta.interno_docente inner join asignatura on dicta.cod_asignatura=asignatura.cod_asignatura where docente.id='$id_docente'";  
 $result = mysqli_query($con, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Mis cursos</title>  
           <?php  include 'partes/links.php'; ?>               
      </head>  
      <body>  
      <?php include 'partes/navbar.php';?>
           <div class="container mt-5">  
                <h3 align="center">Mis cursos</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="miscursos" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Nombre</td>  
                                    <td>Escuela</td>  
                                    <td>Ciclo</td>  
                                    <td width="15%"><span class="glyphicon glyphicon-pencil"></span>Editar silabo</td> 
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
                                    <td>'.$row["nomb_asignatura"].'</td>  
                                    <td>'.$row["escuela"].'</td>  
                                    <td>'.$row["ciclo_academico"].'</td>  
                                    <td><a href="mis_estrategias.php?id_curso='.$row["cod_asignatura"].'" name="edit"  id="'.$row["cod_asignatura"].'" class="btn btn-warning btn-xs"/>Estrategia silabo</a></td>
                                    <td><a href="mis_competencias.php?id_curso='.$row["cod_asignatura"].'" name="edit"  id="'.$row["cod_asignatura"].'" class="btn btn-warning btn-xs"/>Competencia silabo</a></td>
                                    <td><a href="mis_competencias.php?id_curso='.$row["cod_asignatura"].'" name="edit"  id="'.$row["cod_asignatura"].'" class="btn btn-warning btn-xs"/>Editar silabo</a></td>
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  



      </body>  
 </html>  

<script>
$(document).ready(function(){  
      $('#miscursos').DataTable({
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