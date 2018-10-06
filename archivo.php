

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>


    <body>
      <div id="contenedor">
        <?php
            include('conexion.php');
                $sql = "select * from asignatura where cod_asignatura=".$_GET['id'];
                $query = mysqli_query($con,$sql);
				$datos=mysqli_fetch_array($query);
              ?>
            <iframe src="Silabos/2014/<?php echo $datos['nombre_archivo'].'16'; ?>" style="float:right;" width="1000" height="1000" scrolling="auto"></iframe>

                    
        </div>
    </body>
</html>
