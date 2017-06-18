<?
# INICIAMOS LA SESSION
session_start();
session_name('permiso');


# NOS CONECTAMOS AL SERVIDOR

include('conexion.php');
/*

$conexion=mysql_connect("localhost","u122483761_esis","123456")
					or die("Error en la lina: ".__LINE__." de tu codigo.<br>El motivo del error es: ".mysql_error()."<br>En conclusion: No se ha podido conectar al servidor.");


# USAMOS LA Base de datos
$use = mysql_select_db("u122483761_dos",$conexion)
	or die("Error en la linea: ".__LINE__." de tu codigo.<br>El motivo del error es: ".mysql_error()."<br>En conclusion: No se ha podidos usar la BDD free.");	
	
*/

# HACEMOS LA CONSULTA, en este caso solo usamos 2 campos de las base de datos Id_usuario,password


$sql = "SELECT Cod_docente, password, tipo
		FROM docente
		WHERE Cod_docente = '".$_POST['usu_form']."'";

$valores=mysqli_query($con,$sql);

/*
	or die("Error en la linea: ".__LINE__." de tu codigo.<br>El motivo del error es: ".mysql_error()."<br>En conclusion: No se ha realizado la consulta");			
*/
	
$registro=mysqli_fetch_array($valores);

# COMPROBAMOS DATOS
$nick=$registro['Cod_docente'];
$passwd=$registro['password'];
$nick_form=$_POST['usu_form'];
$passwd_form=$_POST['pass_form'];
$tipo2=$registro['tipo'];


#Ahora verificamos los datos enviados con los de la base de datos


if ($nick_form==$nick && $passwd_form==$passwd)#Si los datos son enviados son correctos, significa que se envio correctamente y la pagina se redirige a login2.php
{
	
	if ($tipo2=="docente")
	{
	
	$_SESSION['nombre_doc']=$nick;
	$_SESSION['contra_docente']=$passwd;
?>
	
	<script language="JavaScript">
	
	var page='docente.php?nombre_doc=<?php echo $nick_form ?>';
		location.href=page;
	</script>
<?
}

else
{
	if ($tipo2=='admin')
	{
	$_SESSION['nombre_docente']=$nick;
	$_SESSION['contra_docente']=$passwd;
?>

<!---------------AUMENTAR-------------------------------->
	<script language="JavaScript">
	
	var page='administrador0.php?nombre_admin=<?php echo $nick_form ?>';
		location.href=page;
		/*location.href="administrador0.php";*/
	</script>
	
	<!---------------AUMENTAR-------------------------------->
<?
}
else{}
}
	}



if ($nick_form!=$nick || $passwd_form!=$passwd)#Si los datos son enviados no son correctos, significa que el usuario o  password son c}incorrectos y la pagina se redirige a index.php
{
session_destroy();
$url="Location:index.php";
header($url);	
?>
	<script language="JavaScript">
		location.href="index.php";
	</script>
<?
}
if ($nick_form==" " || $passwd_form==" ")#si no se enviaron datos ,la pagina se recarga
{
?>
	<script language="JavaScript">
		location.href="index.php";
	</script>
<?
}
?> 