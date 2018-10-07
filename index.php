
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
    <link type="text/css" href="./css/estilos_finales.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css"> -->
</head>

<body>
<div class="container-fluid fixed-top" style="background:#560000">
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark" style="background:#560000">
  <a class="navbar-brand" href="index.php"><img class="img-fluid" style="width:50px" src="./imagenes/logo-unjbg.png" />Sistema de silabos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
  <!-- <form class="form-inline my-2 my-lg-0 mr-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>   -->
    <div class="mr-auto">
    </div>
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contáctenos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Silabos</a>
    </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
          
        </div>
      </li>
    </ul>
    
  </div>
</nav>


    </div>
    </div>
   <!-- <div class="brand"><img class="img-rounded" src="img/logo-unjbg.png" alt="UNJBG" width="10%" height="10%" align="left">UNIVERSIDAD NACIONAL JORGE BASADRE GROHMANN</div>
    <div class="address-bar">Sistema de acceso para editar sílabos</div>
	 -->
    
<div class="container-fluid mt-5 py-5 fondo-unjbg d-flex align-items-center" > 
    <div class="container">
        <div class="row">
        <div class="col-md-6 col-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" src="img/esis3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="img/esis3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="img/esis3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="col-md-6 col-12 my-md-auto p-0 m-0 p-md-3" style="background:rgba(86, 0, 0, 0.9)">
        <div id="info"></div>
        <form  class="text-white" method="post" id="myform" >
                        <h3 class="text-center">Iniciar Sesión</h3>
                        
                        <div class="form-group col-md-6 mx-auto py-3">
    <label for="usu_form">Usuario</label>
    <input type="text" class="form-control"  name="usu_form" id="usu_form" aria-describedby="emailHelp" placeholder="Ingresar Usuario">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group col-md-6 mx-auto py-3">
    <label for="pass_form">Contraseña</label>
    <input type="password"  name="pass_form" id="pass_form"  class="form-control"  placeholder="Ingresar contraseña">
  </div>
  <input type="submit" id="login" name="login" class="btn btn-outline-primary d-flex mx-auto"  value="Login"  class="primary_action">
        </form>
        </div>        
    </div>
    </div>
    </div>

    <footer >
        <div class="container-fluid" style="background:#560000">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-inline-block">
                    <h6 class="text-white py-3">UNJBG-Ciudad Universitaria - Av. Miraflores S/N - Central Telefónica: 052-583000 </h3>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
  
  $( "#myform" ).submit(function( e ) {
    e.preventDefault();
    
  console.log('xd');
  var data=$("#myform").serialize();
  $.ajax({
    type:'POST',
    url:'data.php',
    data:data,
    beforeSend:function(){
      $("#info").fadeOut();
     
    },
    success:function(resp){
      console.log(resp);
      if(resp=="admin"){
        console.log('XDS')
        window.location.href="administrador0.php";
        // console.log('adasdasd')
      }
      else if(resp=="docente"){
        window.location.href="docente.php";
      }
      else{
        $("#info").fadeIn(1000,function(){
          $("#info").html("<div class='alert alert-danger'>"+resp+"</div>");
        })
      }
    }
  })

});



  
})
</script>

</body>

</html>
