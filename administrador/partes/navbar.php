
<div class="container-fluid fixed-top" style="background:#560000">
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
        </div>
    </div>