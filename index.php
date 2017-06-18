
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
    <meta name="description" content="">
    <meta name="author" content="">
<!--------------titulo de la pagina------------->
    <title>Universidad Nacional - JORGE BASADRE GROHMANN</title>

<!----------------Aqui llamamos a la funcion de boostrap que nos ayudara a que nuestr pagina se acomode a un celular,tablet,etc---------->
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	
<!----------------Aqui llamamos a la hoja de estilo que modifica las carcteristicas de la pagina como color, tamaño,etc---------->
    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
	
	<link type="text/css" href="./css/style20_index.css" rel="stylesheet" />

	

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">UNJBG</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Inicio</a> <!----OPCION DE HOME- MENU HORIZONTAL , CON SU RESPECTIVO LINK , ES DECIR ,A QUE PAGINA SE TRASLADA SI HACES CLIC AHI----->
                    </li>
                    <li>
                        <a href="about.php">Noticias</a> <!-------------------->
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>  <!-------------------->
                    </li>
                    <li>
                        <a href="contact.php">Contáctanos</a> <!-------------------->
                    </li>
					<li>
                        <a href="silabos.php">Sílabos</a> <!-------------------->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!-----------------------FIN PANEL DE NAVEGACION-------------------------------------------------------------------------------------->



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
                                    <img class="img-responsive img-full" src="img/oasa.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive img-full" src="img/oasa.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive img-full" src="img/oasa.jpg" alt="">
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

                            <input type="submit" id="submit" name="submit"  value="Login" class="primary_action">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                    <div >
                    <h2 class="brand-before">
                        <small><center> BIENVENIDOS</center></small>
                    </h2>
                    <h1 class="brand-name"> <center> UNJBG</center></h1>
                    <hr class="tagline-divider">
                    <h2>
					<h6><center>Esta página fue creada por los estudiantes de la escuela de ESIS</center></h6>
            <small>
                <strong></strong>
            </small>
        </h2>
		

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
                <div class="col-lg-12 text-center">
                    <p>version 1.0 &copy;  2017</p>
                </div>
            </div>
        </div>
    </footer>
<!---------------------------------------Referenciamos el Javascript que estamos usando para los sliders,
la mayoria de veces usamos js para darle movimiento a elementos de nuestra pagina
 --------------------->
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
