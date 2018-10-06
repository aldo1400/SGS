<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Universidad Nacional - JORGE BASADRE GROHMANN</title>

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

</head>

<body>

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
                        
                    
<?php
}
else
{

if(!$_SESSION['nombre_docente'])
{
$nombre_docente_verificado=$_SESSION['nombre_doc'];
?>
						<a class="navbar-brand" href="docente.php?nombre_doc=<?php echo $nombre_docente_verificado ?>"><?php echo $nombre_docente_verificado ?></a>
                       
                    
<?php	
}
else
{
$nombre_admin=$_SESSION['nombre_docente'];
?>

					<a class="navbar-brand" href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?>"><?php echo $nombre_admin ?></a>
                        
						
                    

<?php
}

}
?>
			
				
            </div>
			<script>

$('#bs-example-navbar-collapse-1 li a').on('click', function(){
    $('li a.activo').removeClass('activo');
    $(this).addClass('activo');
});

</script>

<style>
.activo {
    text-decoration: underline;
    background-color: rgba(123, 129, 129,0.6);
}
</style>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
				
				<?php

// session_start();
// session_name('permiso');

if(!$_SESSION)
{
?>
<li>
                        <a href="index.php">Inicio</a>
                    </li>
<?php
}
else
{

// if(!$_SESSION['nombre_docente'])
if(!isset($_SESSION['nombre_docente']))
{
$nombre_docente_verificado=$_SESSION['nombre_doc'];
?>
					<li>
                        <a href="docente.php?nombre_doc=<?php echo $nombre_docente_verificado ?>">Mi perfil</a>
                    </li>
<?php					
}
else
{
$nombre_admin=$_SESSION['nombre_docente'];
?>

					<li>
                        <a href="administrador0.php?nombre_admin=<?php echo $nombre_admin ?>">Mi perfil</a>
                    </li>

<?php
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
                        <a class="activo" href="silabo.php">Sílabo</a>
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
					<a href="#1" class="list-group-item active" data-toggle="collapse">Facultad de Ingeniería</a>
					<div class="collapse" id="1">
						<a href="#" class="list-group-item">Ingeniería de Minas</a>
						<a href="#ESIS" class="list-group-item">Ingeniería en Informática y Sistemas</a>
						<a href="#" class="list-group-item">Ingeniería de Metalúrgica</a>
						<a href="#" class="list-group-item">Ingeniería de Química</a>
						<a href="#" class="list-group-item">Ingeniería de Mecánica</a>
					</div>
					<br />
					
					<a href="#7" class="list-group-item active" data-toggle="collapse">Facultad de Ingeniería Civil, Arquitectura y Geotecnia</a>
					<div class="collapse" id="7">
						<a href="#" class="list-group-item">Arquitectura</a>
						<a href="#" class="list-group-item">Ingeniería Civil</a>
						<a href="#" class="list-group-item">Ingeniería Geológica - Geotecnia</a>
						<a href="#" class="list-group-item">Artes</a>
					</div>
					<br />
					
					<a href="#2" class="list-group-item active" data-toggle="collapse">Facultad de Ciencias Jurídicas y Empresariales</a>
					<div class="collapse" id="2">
						<a href="#" class="list-group-item">Ciencias Contables y Financieras</a>
						<a href="#" class="list-group-item">Ciencias Administrativas</a>
						<a href="#" class="list-group-item">Derecho y Ciencias Políticas</a>
						<a href="#" class="list-group-item">Ingeniería Comercial</a>
					</div>
					<br />
					
					<a href="#3" class="list-group-item active" data-toggle="collapse">Facultad de Ciencias Agropecuarias</a>
					<div class="collapse" id="3">
						<a href="#" class="list-group-item">Agronomía</a>
						<a href="#" class="list-group-item">Economía Agraria</a>
						<a href="#" class="list-group-item">Medicina Veterinaria y Zootecnia</a>
						<a href="#" class="list-group-item">Ingeniería Pesquera</a>
						<a href="#" class="list-group-item">Ingeniería en Industrias Alimentarias</a>
						<a href="#" class="list-group-item">Ingeniería Ambiental</a>
					</div>
					<br />
					
					<a href="#4" class="list-group-item active" data-toggle="collapse">Facultad de Ciencias de la Salud</a>
					<div class="collapse" id="4">
						<a href="#" class="list-group-item">Medicina Humana</a>
						<a href="#" class="list-group-item">Obstetricia</a>
						<a href="#" class="list-group-item">Enfermería</a>
						<a href="#" class="list-group-item">Odontología</a>
						<a href="#" class="list-group-item">Farmacia y Bioquímica</a>
					</div>
					<br />
					
					<a href="#5" class="list-group-item active" data-toggle="collapse">Facultad de Educación, Comunicación y Humanidades</a>
					<div class="collapse" id="5">
						<a href="#" class="list-group-item">Educación</a>
						<a href="#" class="list-group-item">Ciencias de la comunicación</a>
						<a href="#" class="list-group-item">Historia</a>
					</div>
					<br />
					
					<a href="#6" class="list-group-item active" data-toggle="collapse">Facultad de Ciencias</a>
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
										
					<a href="#1c_esis" data-toggle="collapse"><h4>Primer ciclo</h4></a>
					<hr />
					
					
					<table cellspacing="1000" class="collapse in " id="1c_esis">
						<br>
						
						<tr>
							<td class="col-md-9">Seminario de ética y sociedad</td>
							<td class="col-md-3"><a class="btn btn-primary"  href="Silabos/2016/Seminariodeetica16.pdf" download="Silabo Seminario de Etica 2016">Descargar</a></td>
						</tr>
						
						<tr>
							<td class="col-md-9">Física general</td>

							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Fisicageneral16.pdf" download="Silabo de Física general 2016">Descargar</a></td>
						</tr>
						
						<tr>
							<td class="col-md-9">Fundamentos de programación</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Fundamentosdeprogramacion16.pdf" download="Silabo de Fundamentos de programación 2016">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Matemática discreta I</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/MatematicadiscretaI16.pdf" download="Silabo de Matemática discreta I 2016">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Matemática I</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/MatematicaI16.pdf" download="Silabo de Matemática I 2016">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Lenguaje y comunicación</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Lenguaje16.pdf" download="Silabo de Lenguaje y comunicación 2016">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Metodología del estudio</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Metodologiadeestudio16.pdf" download="Silabo de Metodología del estudio 2016">Descargar</a></td>
						</tr>
						
					</table>
					<br />
					
					
					<a href="#2c_esis" data-toggle="collapse"><h4>Segundo ciclo</h4></a>
					<hr />
					<br>
					<table class="collapse" id="2c_esis">
					
						<tr>
							<td class="col-md-9">Metodología de investigación para ingeniería</td>
							<td class="col-md-3"><a class="btn btn-primary"  href="Silabos/2016/Metodologiadeestudio216.pdf" download="Silabo de Metodología de investigación para ingeniería 2016">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Electromagnetismo y óptica</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Electromagnetismoyoptica16.pdf" download="Silabo de Electromagnetismo y óptica 2016">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Programación avanzada</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Programacionavanzada16.pdf" download="Silabo de Programación avanzada 2016">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Matemática discreta II</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/MatematicadiscretaII16.pdf" download="Silabo de Matemática discreta II 2016">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Matemática II</td>
							<td class="col-md-3"><a class="btn btn-primary"  href="Silabos/2016/MatematicaI216.pdf" download="Silabo de Matemática II 2016">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Programación gráfica</td>
							<td class="col-md-3"><a class="btn btn-primary"  href="Silabos/2016/Programaciongrafica16.pdf" download="Silabo de Programación gráfica 2016">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Realidad y defensa nacional</td>
							<td class="col-md-3"><a class="btn btn-primary"  href="Silabos/2014/Realidadnacional.pdf" download="Silabo de Realidad Nacional 2014">Descargar</a></td>
						</tr>
						
					</table>
					<br />
					<a href="#3c_esis" data-toggle="collapse"><h4>Tercer ciclo</h4></a>
					<hr />
					<table class="collapse" id="3c_esis">
						<br>
						<tr>
							<td class="col-md-9">Teoría general de sistemas</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Teoriageneraldesistemas16.pdf.pdf" download="Silabo de Teoría general de sistemas">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Física moderna</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Fisicamoderna16.pdf" download="Silabo de Física moderna">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Estructura de datos</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Estructuradedatos16.pdf" download="Silabo de Estructura de datos">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Métodos numéricos para ingeniería</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Metodosnumericos16.pdf" download="Silabo de Métodos numéricos para ingeniería">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Matemática III</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2014/MatematicaIII14.pdf" download="Silabo de Matemática III">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Estadística y probabilidades</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Estadistica16.pdf" download="Silabo de Estadística y probabilidades">Descargar</a></td>
						</tr>
					</table>
					<br />
					<a href="#4c_esis" data-toggle="collapse"><h4>Cuarto ciclo</h4></a>
					<hr />
					<table class="collapse" id="4c_esis">
						<br>
						<tr>
							<td class="col-md-9">Análisis de sistemas I</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/" download="Silabo de Análisis de sistemas I">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Sistemas electrónicos digitales</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Sistemasdigitales16.pdf" download="Silabo de Sistemas electrónicos digitales">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Algoritmos y programación paralela</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2014/Algoritmosyprogramacionparalela14.pdf" download="Silabo de Algoritmos y programación paralela">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Contabilidad, costos y presupuestos</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Contabilidad16.pdf" download="Silabo de Contabilidad, costos y presupuestos">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Matemática IV</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/MatematicaIV16.pdf" download="Silabo de Matemática IV">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Economía y desarrollo</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/" download="Silabo de Economía y desarrollo">Descargar</a></td>
						</tr>
					</table>
					<br />
					<a href="#5c_esis" data-toggle="collapse"><h4>Quinto ciclo</h4></a>
					<hr />
					<table class="collapse" id="5c_esis">
						<br>
						<tr>
							<td class="col-md-9">Análisis de sistemas II</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2014/AnalisisdesistemasII14.pdf" download="Silabo de Análisis de sistemas II">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Arquitectura de computadoras</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Arquitecturadecomputadoras16.pdf" download="Silabo de Arquitectura de computadoras">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Sistemas operativos</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Sistemasoperativos16.pdf" download="Silabo de Sistemas operativos">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Base de datos I</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Basededatos16.pdf" download="Silabo de Base de datos I">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Investigación operativa I</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Investigacionoperativa16.pdf" download="Silabo de Investigación operativa I">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Ingeniería económica</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Ingenieriaeconomica16.pdf" download="Silabo de Ingeniería económica">Descargar</a></td>
						</tr>
					</table>
					<br />
					<a href="#6c_esis" data-toggle="collapse"><h4>Sexto ciclo</h4></a>
					<hr />
					<table class="collapse" id="6c_esis">
						<br>
						<tr>
							<td class="col-md-9">Ingeniería de software I</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2014/Ingenieriadesoftware14.pdf" download="Silabo de Ingeniería de software I">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Comunicación de datos</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Comunicaciondedatos16.pdf" download="Silabo de Comunicación de datos">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Compiladores y teoría de lenguaje</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Compiladores16.pdf" download="Silabo de Compiladores y teoría de lenguaje">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Base de datos II</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/BasededatosII16.pdf" download="Silabo de Base de datos II">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Investigación operativa II</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/InvestigacionoperativaII16.pdf" download="Silabo de Investigación operativa II">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Formulación y evaluación de proyectos informáticos</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2014/Formulaciondeproyectos14.pdf" download="Silabo de Formulación y evaluación de proyectos informáticos">Descargar</a></td>
						</tr>
					</table>
					<br />
					<a href="#7c_esis" data-toggle="collapse"><h4>Séptimo ciclo</h4></a>
					<hr />
					<table class="collapse" id="7c_esis">
						<br>
						<tr>
							<td class="col-md-9">Ingeniería de software II</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/" download="Silabo de Ingeniería de software II">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Telemática</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Telematica16.pdf" download="Silabo de Telemática">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Sistemas de información</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Sistemasdeinformacion16.pdf" download="Silabo de Sistemas de información">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Gestión empresarial</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/" download="Silabo de Gestión empresaria">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Dinámica de sistemas</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Dinamicadesistemas16.pdf" download="Silabo de Dinámica de sistemas">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Legislación industrial e informática</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/" download="Silabo de Legislación industrial e informática">Descargar</a></td>
						</tr>
					</table>
					<br />
					<a href="#8c_esis" data-toggle="collapse"><h4>Octavo ciclo</h4></a>
					<hr />
					<table class="collapse" id="8c_esis">
						<br>
						<tr>
							<td class="col-md-9">Ingeniería web</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Ingenieriaweb16.pdf" download="Silabo de Ingeniería web">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Métodos cuantitativos para investigación</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/" download="Silabo de Métodos cuantitativos para investigación">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Taller de emprendimiento e innovación</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/" download="Silabo de Taller de emprendimiento e innovació">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Simulación de sistemas</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Simulaciondesistemas16.pdf" download="Silabo de Simulación de sistemas">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Seguridad informática</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/" download="Silabo de Seguridad informática">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">[Electivo]:Diseño asistido por computador</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Diseñoasistidoporcomputadora16.pdf" download="Silabo de Diseño asistido por computador">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">[Electivo]:Gestión de ecoeficiencia en la empresa</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/" download="Silabo de Gestión de ecoeficiencia en la empresa">Descargar</a></td>
						</tr>
					</table>
					<br />
					<a href="#9c_esis" data-toggle="collapse"><h4>Noveno ciclo</h4></a>
					<hr />
					<table class="collapse" id="9c_esis">
						<br>
						<tr>
							<td class="col-md-9">Taller de tesis I</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/TesisI16.pdf" download="Silabo de Taller de tesis I">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Práctica profesional I</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/" download="Silabo de Práctica profesional I">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Realidad virtual</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/" download="Silabo de Realidad virtual">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Sistemas expertos</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Sistemasexpertos16.pdf" download="Silabo de Sistemas expertos">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">[Electivo]:Computación en la nube</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/" download="Silabo de Coomputación en la nube">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">[Electivo]:Programación de dispositivos móviles</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Programacionmovil16.pdf" download="Silabo de Programación de dispositivos móviles">Descargar</a></td>
						</tr>
					</table>
					<br />
						<a href="#10c_esis" data-toggle="collapse"><h4>Décimo ciclo</h4></a>
					<hr />
					<table class="collapse" id="10c_esis">
						<br>
						<tr>
							<td class="col-md-9">Taller de tesis II</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/TesisII16.pdf" download="Silabo de Taller de tesis II">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Práctica pre profesional II</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/" download="Silabo de Práctica pre profesional II">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">Auditoría de sistemas</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Auditoriainformatica16.pdf" download="Silabo de Auditoría de sistemas">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">[Electivo]:Robótica</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/Robotica16.pdf" download="Silabo de Robótica">Descargar</a></td>
						</tr>
						<tr>
							<td class="col-md-9">[Electivo]:Minería de datos</td>
							<td class="col-md-3"><a class="btn btn-primary" href="Silabos/2016/" download="Silabo de Teoría general de sistemas">Descargar</a></td>
						</tr>
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
