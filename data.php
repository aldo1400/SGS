<?php
session_start();
$mysqli=new mysqli('localhost','root','','u122483761_dos');
if(isset($_POST['usu_form']) && isset($_POST['pass_form'])){
    
    $cod_usuario_input=trim($_POST['usu_form']);
    $password_input=trim($_POST['pass_form']);
    $consulta_login=$mysqli->prepare("SELECT Cod_docente,nombre,password,tipo FROM docente WHERE Cod_docente=?");
    $consulta_login->bind_param("s", $cod_usuario_input);
    $consulta_login->execute();
    $consulta_login->bind_result($cod_docente_bd, $nombre_bd,$password_bd,$tipo_bd);
    $consulta_login->fetch();
    
    if($password_bd==$password_input && $nombre_bd=$cod_usuario_input){
        $_SESSION['password']=$password_bd;
        $_SESSION['nombre']=$nombre_bd;
        $_SESSION['codigo_docente']=$cod_docente_bd;
        $_SESSION['tipo']=$tipo_bd;


        if($_SESSION['tipo']=='admin'){
            echo "admin";
        }
        else{
            echo "docente";
        }
        
        
    }
    else{
        echo "Login incorrecto";
    }
}
else{
    session_destroy();
}


?>