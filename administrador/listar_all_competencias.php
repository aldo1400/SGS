<?php
            include('../conexion/conexion.php');
session_start();
            $id_asignatura=$_POST['id_curso'];
            $query ="SELECT * from banco_competencia inner join competencia_asignatura on banco_competencia.cod_competencia=competencia_asignatura.cod_competencia inner join asignatura on competencia_asignatura.cod_asignatura=asignatura.cod_asignatura where asignatura.cod_asignatura='$id_asignatura'";  
            $result = mysqli_query($con, $query);
            $output='';
            $output.='<thead>
                               <tr>  
                                    <td>Competencia</td>  
                                    <td>Tipo de competencia</td>  
                                    <td width="15%"><span class="glyphicon glyphicon-pencil"></span>Editar</td> 
                                    
                               </tr>  
                          </thead>  ';

                          
                          while($row = mysqli_fetch_array($result))  
                          {  
                               $output.='  
                               <tr>  
                                    <td>'.$row["competencia"].'</td>  
                                    <td>'.$row["tipo_competencia"].'</td>  
                                    <td><input type="button" name="edit" value="Editar" id="'.$row["cod_competencia"].'" class="btn btn-warning btn-xs editar_competencia"/></td>
                               </tr>  
                               ';  
                          }

                          echo $output;
                          ?>  