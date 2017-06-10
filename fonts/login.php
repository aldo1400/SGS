<?
# INICIAMOS LA SESSION
session_start();
session_name('permiso');


# NOS CONECTAMOS AL SERVIDOR
$conexion=mysql_connect("localhost","u122483761_aldo","zasori20")
					or die("Error en la lina: ".__LINE__." de tu codigo.<br>El motivo del error es: ".mysql_error()."<br>En conclusion: No se ha podido conectar al servidor.");


# USAMOS LA Base de datos
$use = mysql_select_db("u122483761_uno",$conexion)
	or die("Error en la linea: ".__LINE__." de tu codigo.<br>El motivo del error es: ".mysql_error()."<br>En conclusion: No se ha podidos usar la BDD free.");	

# HACEMOS LA CONSULTA, en este caso solo usamos 2 campos de las base de datos Id_usuario,password
$sql = "SELECT Cod_docente, password, tipo
		FROM Docente
		WHERE Cod_docente = '".$_POST['usu_form']."'";

$valores=mysql_query($sql)
	or die("Error en la linea: ".__LINE__." de tu codigo.<br>El motivo del error es: ".mysql_error()."<br>En conclusion: No se ha realizado la consulta");			

$registro=mysql_fetch_array($valores);

# COMPROBAMOS DATOS
$nick=$registro['Cod_docente'];
$passwd=$registro['password'];
$nick_form=$_POST['usu_form'];
$passwd_form=$_POST['pass_form'];
$tipo2=$registro['tipo'];


#Ahora verificamos los datos enviados con los de la base de datos


if ($nick_form==$nick && $passwd_form==$passwd)#Si los datos son enviados son correctos, significa que se envio correctamente y la pagina se redirige a login2.php
{
	if ($tipo2=="1")
	{
?>
	<script language="JavaScript">
		location.href="login2.php";
	</script>
<?
}
	if ($tipo2=="2")
	{
?>
	<script language="JavaScript">
		location.href="admin.php";
	</script>
<?
}
	}



if ($nick_form!=$nick || $passwd_form!=$passwd)#Si los datos son enviados no son correctos, significa que el usuario o  password son c}incorrectos y la pagina se redirige a index.php
{
session_destroy();
$url="Location:index.html";
header($url);	
?>
	<script language="JavaScript">
		location.href="index.html";
	</script>
<?
}
if ($nick_form=="" || $passwd_form=="")#si no se enviaron datos ,la pagina se recarga
{
?>
	<script language="JavaScript">
		location.href="index.html";
	</script>
<?
}
?> 