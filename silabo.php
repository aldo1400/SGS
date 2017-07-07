<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog - Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<style>
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
	width: 20%;
	float: left;
	
   } 
	</style>
	
    <div class="brand">UNJBG</div>
    <div class="address-bar">Ciudad Universitaria - Av. Miraflores S/N - Central Telefónica: 052-583000</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                
				<?php

session_start();
session_name('permiso');

if(!$_SESSION)
{
?>
						<a class="navbar-brand" href="index.php">unjbg</a>
                        
                    
<?
}
else
{

if(!$_SESSION['nombre_docente'])
{
$nombre_docente_verificado=$_SESSION['nombre_doc'];
?>
						<a class="navbar-brand" href="docente.php?nombre_doc=<?php echo $nombre_docente_verificado ?>"><?php echo $nombre_docente_verificado ?></a>
                       
                    
<?					
}
else
{
$nombre_admin=$_SESSION['nombre_docente'];
?>

					<a class="navbar-brand" href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?>"><?php echo $nombre_admin ?></a>
                        
						
                    

<?
}

}
?>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
				
				<?php

session_start();
session_name('permiso');

if(!$_SESSION)
{
?>
<li>
                        <a href="index.php">Inicio</a>
                    </li>
<?
}
else
{

if(!$_SESSION['nombre_docente'])
{
$nombre_docente_verificado=$_SESSION['nombre_doc'];
?>
					<li>
                        <a href="docente.php?nombre_doc=<?php echo $nombre_docente_verificado ?>">Mi perfil</a>
                    </li>
<?					
}
else
{
$nombre_admin=$_SESSION['nombre_docente'];
?>

					<li>
                        <a href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?>">Mi perfil</a>
                    </li>

<?
}

}
?>

                    
                    <li>
                        <a href="about.php">Noticias</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="contact.php">Contáctanos</a>
                    </li>
					<li>
                        <a href="silabo.php">Sílabo</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
               
<section class="main container">
		<div class="main row">
			<aside class="col-xs-3 col-sm-3 col-md-3">
		
				<div class="list-group">
					<a href="#1" class="list-group-item active" data-toggle="collapse">FACULTAD DE INGENIERÍA</a>
					<div class="collapse" id="1">
						<a href="#" class="list-group-item">Ingeniería de Minas</a>
						<a href="#ESIS" class="list-group-item">Ingeniería de de Informática</a>
						<a href="#" class="list-group-item">Ingeniería de Metalúrgica</a>
						<a href="#" class="list-group-item">Ingeniería de Química</a>
						<a href="#" class="list-group-item">Ingeniería de Mecánica</a>
					</div>
					<br />
					
					<a href="#7" class="list-group-item active" data-toggle="collapse">FACULTAD DE INGENIERÍA CIVIL, ARQUITECTURA Y GEOTECNIA</a>
					<div class="collapse" id="7">
						<a href="#" class="list-group-item">Arquitectura</a>
						<a href="#" class="list-group-item">Ingeniería Civil</a>
						<a href="#" class="list-group-item">Ingeniería Geológica - Geotecnia</a>
						<a href="#" class="list-group-item">Artes</a>
					</div>
					<br />
					
					<a href="#2" class="list-group-item active" data-toggle="collapse">FACULTAD DE CIENCIAS JURÍDICAS Y EMPRESARIALES</a>
					<div class="collapse" id="2">
						<a href="#" class="list-group-item">Ciencias Contables y Financieras</a>
						<a href="#" class="list-group-item">Ciencias Administrativas</a>
						<a href="#" class="list-group-item">Derecho y Ciencias Políticas</a>
						<a href="#" class="list-group-item">Ingeniería Comercial</a>
					</div>
					<br />
					
					<a href="#3" class="list-group-item active" data-toggle="collapse">FACULTAD DE CIENCIAS AGROPECUARIAS</a>
					<div class="collapse" id="3">
						<a href="#" class="list-group-item">Agronomía</a>
						<a href="#" class="list-group-item">Economía Agraria</a>
						<a href="#" class="list-group-item">Medicina Veterinaria y Zootecnia</a>
						<a href="#" class="list-group-item">Ingeniería Pesquera</a>
						<a href="#" class="list-group-item">Ingeniería en Industrias Alimentarias</a>
						<a href="#" class="list-group-item">Ingeniería Ambiental</a>
					</div>
					<br />
					
					<a href="#4" class="list-group-item active" data-toggle="collapse">FACULTAD DE CIENCIAS DE LA SALUD</a>
					<div class="collapse" id="4">
						<a href="#" class="list-group-item">Medicina Humana</a>
						<a href="#" class="list-group-item">Obstetricia</a>
						<a href="#" class="list-group-item">Enfermería</a>
						<a href="#" class="list-group-item">Odontología</a>
						<a href="#" class="list-group-item">Farmacia y Bioquímica</a>
					</div>
					<br />
					
					<a href="#5" class="list-group-item active" data-toggle="collapse">FACULTAD DE EDUCACIÓN, COMUNICACIÓN Y HUMANIDADES</a>
					<div class="collapse" id="5">
						<a href="#" class="list-group-item">Educación</a>
						<a href="#" class="list-group-item">Ciencias de la comunicación</a>
						<a href="#" class="list-group-item">Historia</a>
					</div>
					<br />
					
					<a href="#6" class="list-group-item active" data-toggle="collapse">FACULTAD DE CIENCIAS</a>
					<div class="collapse" id="6">
						<a href="#" class="list-group-item">Biología - Microbiología</a>
						<a href="#" class="list-group-item">Física Aplicada</a>
						<a href="#" class="list-group-item">Matemáticas</a>
					</div>
					<br />
					
				</div>
			</aside>
			
			<div id="ESIS">
				<div class="col-md-9">
					
					<?php
					
					include('conexion.php');
					$consulta ="SELECT * FROM asignatura order by cod_asignatura ASC ";
					$ejecutar= mysqli_query($con,$consulta);
					$repeticion=1;
					
					while($fila = mysqli_fetch_array($ejecutar))
                          {


	   if($fila['ciclo_academico']=='Primer ciclo' and $repeticion==1)
	  {
			?> <a href="#1c_esis" data-toggle="collapse"><h4><?php echo  'Primer ciclo';?></h4></a>
					<hr />
					
					<table cellspacing="1000" class="collapse" id="1c_esis">
			<?php
			$repeticion++;
		
					
	  }
	  else

	  {
		if($fila['ciclo_academico']=='Segundo ciclo' and $repeticion==2)
			{
				?> <a href="#2c_esis" data-toggle="collapse"><h4><?php echo  'Segundo ciclo';?></h4></a>
					<hr /> 
					
					<table cellspacing="1000" class="collapse" id="2c_esis">
					
					<?php
				$repeticion++;
			}
		else
		{
			if($fila['ciclo_academico']=='Tercer ciclo' and $repeticion==3)
			{
				?> <a href="#3c_esis" data-toggle="collapse"><h4><?php echo  'Tercer ciclo';?></h4></a>
					<hr />
					
					<table cellspacing="1000" class="collapse" id="3c_esis">

					<?php
				$repeticion++;
			}
			else
			{
				if($fila['ciclo_academico']=='Cuarto ciclo' and $repeticion==4)
				{
					?> <a href="#4c_esis" data-toggle="collapse"><h4><?php echo  'Cuarto ciclo';?></h4></a>
					<hr />
					
					<table cellspacing="1000" class="collapse" id="4c_esis">
					
					<?php
					$repeticion++;
				}
				else
				{
					if($fila['ciclo_academico']=='Quinto ciclo' and $repeticion==5)
					{
						?> <a href="#5c_esis" data-toggle="collapse"><h4><?php echo  'Quinto ciclo';?></h4></a>
					<hr /> 
					
					<table cellspacing="1000" class="collapse" id="5c_esis">
					
					<?php
						$repeticion++;
					}
					else
					{
							if($fila['ciclo_academico']=='Sexto ciclo' and $repeticion==6)
							{
							?> <a href="#6c_esis" data-toggle="collapse"><h4><?php echo  'Sexto ciclo';?></h4></a>
							<hr />
								<table cellspacing="1000" class="collapse" id="6c_esis">
							<?php
							
							$repeticion++;
							}
							else
							{
								if($fila['ciclo_academico']=='Séptimo ciclo' and $repeticion==7)
								{
								?> <a href="#7c_esis" data-toggle="collapse"><h4><?php echo  'Séptimo ciclo';?></h4></a>
									<hr />
									
									<table cellspacing="1000" class="collapse" id="7c_esis">
									
									<?php
							
								$repeticion++;
								}
								else
								{
									
										if($fila['ciclo_academico']=='Octavo ciclo' and $repeticion==8)
										{
										?> <a href="#8c_esis" data-toggle="collapse"><h4><?php echo  'Octavo ciclo';?></h4></a>
										<hr />
										<table cellspacing="1000" class="collapse" id="8c_esis">
										
										<?php
							
										$repeticion++;
										}
										else
										{
													if($fila['ciclo_academico']=='Noveno ciclo' and $repeticion==9)
													{
													?> <a href="#9c_esis" data-toggle="collapse"><h4><?php echo  'Noveno ciclo';?></h4></a>
													<hr />
													
													<table cellspacing="1000" class="collapse" id="9c_esis">
													
													<?php
							
													$repeticion++;
													}
													else
													{
															?>
															<a href="#10c_esis" data-toggle="collapse"><h4>Décimo ciclo</h4></a>
															<hr />
															
															<table cellspacing="1000" class="collapse" id="10c_esis">
															<?
															$repeticion++;
													}
										
													
								
										}
									
								
								}
								
								
							}
							
							
					}
				}
			}
		}
	  }

		$nombre2=$fila['nomb_asignatura'];
		
					?>
					
						<tr>
							<td class="col-md-9"><?php echo $nombre2; ?></td>
							<td><a href="archivo.php?id=<?php echo $fila['cod_asignatura']?>" class="btn btn-info btn-xs"><?php echo $fila['nombre_archivo']; ?></a></td>
							<td class="col-md-3"><a class="btn btn-primary" href="#">Descargar</a></td>
						</tr>
						
						<?php
                          }
                          ?>
                     </table>
						
					<br />
				</div>
				<br />
				
				
				
			</div>
		</div>
	
		
	
	</section>			   
				
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>version 1.0 &copy; 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
