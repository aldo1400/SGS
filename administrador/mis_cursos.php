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
           <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>           
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>      
    
    
            
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



                <h3 align="center">Mis cursos</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="miscursos" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Nimbre</td>  
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
                                    <td><input type="button" name="edit" value="Editar silabo" id="'.$row["cod_asignatura"].'" class="btn btn-warning btn-xs define_teacher"/></td>
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