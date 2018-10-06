<?php
session_start();
session_name('permiso');


include 'conexion.php';


$sql = "SELECT Cod_docente, password, tipo
		FROM docente
		WHERE Cod_docente = '".$_POST['usu_form']."'";

$valores=mysqli_query($con,$sql);

	
$registro=mysqli_fetch_array($valores);


$nick=$registro['Cod_docente'];
$passwd=$registro['password'];
$nick_form=$_POST['usu_form'];
$passwd_form=$_POST['pass_form'];
$tipo2=$registro['tipo'];




if ($nick_form==$nick && $passwd_form==$passwd)
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
<?php
}

else
{
	if ($tipo2=='admin')
	{
	$_SESSION['nombre_docente']=$nick;
	$_SESSION['contra_docente']=$passwd;
	
?>


	<script language="JavaScript">
	
	var page='administrador0.php?nombre_admin=<?php echo $nick_form ?>';
		location.href=page;
	
	</script>
	
	
<?php
}
else{}
}
	}



if ($nick_form!=$nick || $passwd_form!=$passwd)
{
session_destroy();
$url="Location:index.php";
header($url);	
?>
	<script language="JavaScript">
		location.href="index.php";
	</script>
<?php
}
if ($nick_form==" " || $passwd_form==" ")
{
?>
	<script language="JavaScript">
		location.href="index.php";
	</script>
<?php
}
?> 