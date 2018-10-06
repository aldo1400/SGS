<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Universidad Nacional -   JORGE BASADRE GROHMANN</title>

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
            </div>
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
                        <a class="activo"href="blog.php">Blog</a>
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
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">UNJBG
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
				
				<?php
include("conexion.php");
$q_datos="SELECT * from noticias order by fecha_publicacion DESC ";
$e_datos= mysqli_query($con,$q_datos);
$a_datos= mysqli_fetch_array($e_datos);			
$ruta_imagen=$a_datos['noticia_imagen'];


?>


<?php		
// session_start();
// session_name('permiso');

if(!$_SESSION)
{
?>

<?php
}
else
{

if(!$_SESSION['nombre_docente'])
{

?>
				
<?php					
}
else
{
$nombre_admin=$_SESSION['nombre_docente'];
?>


<form action="" method="post" enctype="multipart/form-data" class="form-inline" role="form">

				<div class="fileinputs">
	<input name="foto1" type="file" class="file" id="foto1" style="width: 500px;"/>
	<div style="width: 400px;">
		<div class="fakefile">
			<!--<input />-->
			<img src="imagenes/upload.png" width="45" height="45"/>
		</div>
		<input name="guardar2" type="submit" class="btn btn-success btn-lg" value="subir foto" style="width: 100px;"/>

	</div>
</div>

</form>

<?php
				  			  			  
if(isset($_POST['guardar2'])){

$nombrefoto1=$_FILES['foto1']['name'];
$ruta1=$_FILES['foto1']['tmp_name'];
if(is_uploaded_file($ruta1))
{ 
if($_FILES['foto1']['type'] == 'image/png' OR $_FILES['foto1']['type'] == 'image/gif' OR $_FILES['foto1']['type'] == 'image/jpeg')
		{
$tips = 'jpg';
$type = array('image/jpeg' => 'jpg');
$name = $nombre_admin.'Foto-noticia'.'.'.$tips;
$destino1 =  "noticias/".$name;
copy($ruta1,$destino1);

$ruta_imagen = $destino1;

$miniatura_ancho_maximo = 700;
$miniatura_alto_maximo = 500;

$info_imagen = getimagesize($ruta_imagen);
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( $ruta_imagen );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( $ruta_imagen );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( $ruta_imagen );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, $destino1, 80);
}
}
$fecha_sistema=getdate();
$fecha=strftime( "%Y-%m-%d-%H-%M-%S", time() );
$act="insert into noticias(noticia_imagen,fecha_publicacion) values ('$destino1','$fecha')";


if(@mysqli_query($con,$act)){

?>
		<script language="JavaScript">
	var page='blog.php';
		location.href=page;
		
	</script>
		<?php
		
}
}

?>
	

<?php
}

}
?>

				
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="<?php echo $ruta_imagen; ?>" alt="">
                    <h2>
                        <br>
                        <small>mayo 14, 2017</small>
                    </h2>
                    <p>FELIZ DIA MAMA</p>
                    
                    <hr>
                </div>
                
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
