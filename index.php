
<?
session_start();
$_SESSION["permiso_s"];
$_SESSION=array();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ssitema de gestion de silabos de la Universidad Nacional Jorge Basadre Grohmann , Tacna">
    <meta name="author" content="">
    <title>Sistema de gestión de sílabos - Universidad Nacional JORGE BASADRE GROHMANN</title>
 
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/business-casual.css" rel="stylesheet">
    <link type="text/css" href="./css/style20_index.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css"> -->

    <style type="text/css">
        
        .carousel-inner,
        .carousel-inner .item,
        .carousel-inner .item img{
            height: 100%;
        }

        .carousel{
            height: 100%;
        }

    </style>
</head>

<body>
<!--------------------TITULO Y SUBTITULO PRINCIPAL  DE LA PAGINA-------------------->

   <div class="brand"><img class="img-rounded" src="img/logo-unjbg.png" alt="UNJBG" width="10%" height="10%" align="left">UNIVERSIDAD NACIONAL JORGE BASADRE GROHMANN</div>
    <div class="address-bar">Sistema de acceso para editar sílabos</div>
	


	<!--------------------PANEL DE NAVEGACION, ZONA DONDE SE ENCUENTRA EL MENU HORIZONTAL BLANCO---------------------------------------->
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
                
                <a class="navbar-brand" href="index.php">UNJBG</a>
            </div>
           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php" >Inicio</a> 
                    </li>
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
                        <a href="silabo.php">Sílabos</a> 
                    </li>
                </ul>
            </div>
            
        </div>
    
    </nav>


    <div class="container">

        <div class="row">
            <div class="box">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-lg-12 text-center" style="height: 370px;">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators hidden-xs">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="img-responsive img-full" src="img/esis1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive img-full" src="img/esis2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive img-full" src="img/esis3.jpg" alt="">
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="icon-prev"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="icon-next"></span>
                            </a>
                        </div>
                    </div>	
                </div> 
            </div>  
 
            <div class="col-md-5">                    
                <div class="wrapper123">

                    <form action="login.php" method="post" class="login" onsubmit="return validar()">
                        <h2>Iniciar Sesión</h2>
                        
                        <!-- Contenedor del Formulario -->
                        <div class="login-container">
                            <label>Usuario</label>
                            <input name="usu_form" id="usu_form" type="text" placeholder="Ingresar Usuario" required>
                            
                            <label>Contraseña</label>
                            <input name="pass_form" id="pass_form" type="password" placeholder="Ingresar Contraseña" required > 

                            <input type="submit" id="submit" name="submit"  value="Ingresar" class="primary_action">
                        </div>
                    </form>
                </div>
            </div>
            
            </div>
        </div> 

    </div> 

	
    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
            
                <div class="col-md-12">
                    <div >
                    <h2 class="brand-before">
                        <small><center> BIENVENIDOS</center></small>
                    </h2>
                    <h1 class="brand-name"> <center> UNJBG</center></h1>
                    <hr class="tagline-divider">
                    <h2>
                    
                    <small>
                        <strong></strong>
                    </small>
                    </h2>
        

                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
