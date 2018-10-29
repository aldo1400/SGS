<?php
            include('../conexion/conexion.php');
session_start();
            $id=$_POST['id_curso'];
            $query ="SELECT * from banco_estrategia inner join estrategia_asignatura on banco_estrategia.codigo_estrategia=estrategia_asignatura.cod_estrategia inner join asignatura on estrategia_asignatura.cod_asignatura=asignatura.cod_asignatura where asignatura.cod_asignatura='$id'";  
            $result = mysqli_query($con, $query);
  

            $output='';
            $output.='
            <thead>  
            <tr>   
                 <td width="75%">Estrategia</td>  
                 <td width="15%"><span class="glyphicon glyphicon-pencil"></span>Editar</td>  
            </tr>  
       </thead> 
    ';

    while($row = mysqli_fetch_array($result))  
       {  
        $output.=' 
            <tr>  
                 <td>'.$row["estrategia"].'</td>    
                 <td><input type="button" name="edit" value="Editar" id="'.$row["cod_asignatura"].'" class="btn btn-warning btn-xs editar_estrategia"/></td>
            </tr>  
            ';  
       }  
        echo $output;