<?php
ob_start();
require_once("fpdf1/fpdf.php");
include ('fpdf1/exfpdf.php');
include ('fpdf1/easyTable.php');
//$pdf=new FPDF();
//$pdf->AddPage();
//no olvidare https://github.com/fpdf-easytable/fpdf-easytable
$pdf=new exFPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",9);
$pdf->Image('img/logo-unjbg.png',5,5,15);


$pdf->Image('img/esis.png',185,5,18);

$pdf->cell(190,1,"UNIVERSIDAD NACIONAL JORGE BASADRE GROHMANN ",7,6,'C');
$titulo1=utf8_decode("FACULTAD DE INGENIERÍA");
$pdf->cell(190,9,$titulo1,7,6,'C');
$pdf->SetY(5);
$pdf->SetFont('Helvetica','',6);
$pdf->SetFont('Helvetica','I',6);
$pdf->Ln(10);
$titulo2=utf8_decode("ESCUELA PROFESIONAL DE INGENIERÍA EN INFORMÁTICA Y SISTEMAS");
$pdf->Cell(190,12,$titulo2,7,7,'C');
$pdf->SetFont("Arial","B",9);
$titulo3=utf8_decode("S Í L A B O");
$pdf->Cell(190,14,$titulo3,7,7,'C');



//http://www.codedrinks.com/crear-un-reporte-con-fpdf-usando-php-y-mysql/
include('conexion.php');
$id_asig= $_GET['nombre_asig'];
$sql_primero="select * from asignatura where cod_asignatura='$id_asig'";
$consulta=mysqli_query($con,$sql_primero);
$DATOS_ASIGNA=mysqli_fetch_array($consulta);
// listamos los datos con Cell
$pdf->SetFont('Arial','',9); // definimos el tipo de letra y el tamaño
// Cell esta formado por (posición de inicio, ancho, texto, borde, cambio de linea, posición del texto)
$pdf->SetX(20);
$pdf->Cell(0,6,'I. DATOS GENERALES',0,1);
$pdf->SetX(25);
// Cell esta formado por (posición de inicio, ancho, texto, borde, cambio de linea, posición del texto)
$pdf->SetFont('Arial','',8);
$pdf->SetX(25);
$pdf->Cell(50,6,'1.  Facultad  ',0,0);
$pdf->Cell(50,6,utf8_decode(': '.$DATOS_ASIGNA['facultad']),0);
$pdf->Ln(5);
$pdf->SetX(25);


$departamento=utf8_decode("  Departamento académico ");

$pdf->Cell(50,6,'2.'.$departamento ,0,0);
$pdf->Cell(50,6,': '.$DATOS_ASIGNA['escuela'],0);
$pdf->Ln(5);
$pdf->SetX(25);

$cod_Asig=utf8_decode("  Código de la asignatura ");

$pdf->Cell(50,6,'3.'.$cod_Asig,0,0);
$pdf->Cell(50,6,': '.$DATOS_ASIGNA['cod_asignatura'],0);
$pdf->Ln(5);
$pdf->SetX(25);
$pdf->Cell(50,6,'4.  Asignatura',0,0);
$asignatura=utf8_decode($DATOS_ASIGNA['nomb_asignatura']);
$pdf->Cell(50,6,": ".$asignatura,0);
$pdf->Ln(5);
$pdf->SetX(25);
$pdf->Cell(50,6,'5.  Pre Requisito ',0,0);
$requisito=utf8_decode($DATOS_ASIGNA['pre_requisito']);
$pdf->Cell(50,6,': '.$requisito,0);
$pdf->Ln(5);
$pdf->SetX(25);
$sacademico=utf8_decode("  Semestre académico");
$pdf->Cell(50,6,'6.'.$sacademico,0,0);
$pdf->Cell(50,6,': '.$DATOS_ASIGNA['semestre_academico'],0);
$pdf->Ln(5);
$pdf->SetX(25);
$hteoria=utf8_decode("  Horas de teoría");
$pdf->Cell(50,6,'7.'.$hteoria,0,0);
$pdf->Cell(50,6,': '.$DATOS_ASIGNA['horas_teoria'].' horas',0);
$pdf->Ln(5);
$pdf->SetX(25);
$hpractica=utf8_decode("  Horas de práctica");
$pdf->Cell(50,6,'8.'.$hpractica,0,0);
$pdf->Cell(50,6,': '.$DATOS_ASIGNA['horas_practica'].' horas',0);
$pdf->Ln(5);//salta 5 de espacio para abajo
$pdf->SetX(25);//espacio para el costado
$pdf->Cell(50,6,'9.  Horas de laboratorio  ',0,0);//
$pdf->Cell(50,6,': '.$DATOS_ASIGNA['horas_laboratorio'].' horas',0);
$pdf->Ln(5);
$pdf->SetX(25);//espacio para el costado
$creditos=utf8_decode("  Créditos");
$cre=utf8_decode("créditos");
$pdf->Cell(50,6,'10.'.$creditos,0,0);//
$pdf->Cell(50,6,': '.$DATOS_ASIGNA['nro_creditos'].' '.$cre,0);
$pdf->Ln(5);

$id_teach=$_GET['nombre_doc'];

$sql_segundo="select * from docente where Cod_docente='$id_teach'";
$consultar=mysqli_query($con,$sql_segundo);
$DATOS_TEACHER=mysqli_fetch_array($consultar);
$pdf->SetX(25);
$pdf->Cell(50,6,'11.  Docente responsable  ',0,0);
$nombre=utf8_decode($DATOS_TEACHER['nombre']);
$apellido=utf8_decode($DATOS_TEACHER['apellido']);

$grado_teacher=utf8_decode($DATOS_TEACHER['grado_academico']);

switch ($grado_teacher)
{
case "magister":
	$grado_teacher='Mg.';
	break;
case "Magister":
	$grado_teacher='Mg.';
	break;
case "doctor":
	$grado_teacher='Dr.';
	break;
case "Doctor":
	$grado_teacher='Dr.';
	break;
case "bachiller":
	$grado_teacher='Bach.';
	break;

	case "Bachiller":
	$grado_teacher='Bach.';
	break;

}

$pdf->Cell(50,6,": ".$grado_teacher."\n".$nombre."\n\n".$apellido,0);
//$pdf->Cell(50,6,':'.$id_teach,0);
$pdf->Ln(5);


$pdf->Ln(5);
$pdf->SetX(20);
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,6,'II. SUMILLA',0,1);
$pdf->Ln(5);
$pdf->SetFont('Arial','',8);
$pdf->SetX(25);
$sumilla=utf8_decode($DATOS_ASIGNA['sumilla']);
$pdf->MultiCell(0,5,$sumilla);

$pdf->Ln(5);
$pdf->SetX(20);
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,6,'III. COMPETENCIAS',0,1);
$pdf->Ln(1);
$pdf->SetFont('Arial','',8);
$compes=count($_POST['compe']);

for($i=0;$i<$compes; $i++)
{

 $compe[$i]=utf8_decode(trim($_POST["compe"][$i]));


 $pdf->Ln(1);
 $pdf->SetX(25);
  $pdf->MultiCell(0,6,"\n".($i+1).". ".$compe[$i],0,1);

}

/*$pdf->SetX(25);
$compe =count($_POST["comp"]);
  for($i=0; $i<$compe; $i++)
  {
       if(trim($_POST["comp"][$i] != ''))
       {

         $compe=$_POST['comp'][$i];
         $pdf->SetX(35);
         $pdf->Cell(0,6,"\n*".$compe,0,1);


       }
  }
*/
/*
$pdf->Ln(5);
$pdf->SetX(20);
$pdf->Cell(0,6,'IV. CAPACIDADES',0,1);*/
$pdf->Ln(5);
$pdf->SetX(20);
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,6,'IV. UNIDADES',0,1);
$pdf->Ln(5);
$pdf->SetFont('Arial','',8);
$uni=$_POST['uni2'];
//$sem=$_POST['sem'];
$i=0;
$z=0;
while($i<$uni)
{

  $pdf->SetX(25);
  $pdf->Cell(0,6,"UNIDAD\n".($i+1).":",0,1);
  $pdf->Ln(5);
  //$pdf->SetX(25);
  //$pdf->Cell(0,6,"4.".($i+1).".1\n Competencias:",0,1);
  //$pdf->Ln(1);
  $pdf->SetX(25);
  $pdf->Cell(0,6,"4.".($i+1).".1\n Contenido de la unidad:",0,1);
  $pdf->Ln(3);
  //$competencias=$_POST['competencias'.($i).''];
  //$pdf->SetX(40);
  //$pdf->Cell(0,6,$competencias,0,1);
  /*$pdf->Ln(5);
  $pdf->SetX(25);
  $pdf->Cell(0,6,"5.".($i+1).".3\n Capacidades:",0,1);
  $pdf->Ln(1);
  $capacidades=$_POST['capacidades'.($i).''];
  $pdf->SetX(40);
  $pdf->Cell(0,6,$capacidades,0,1);*/
  //LA PRIMERA PARTE DE LA UNIDAD


//PRUEBA DE Tabla
$table4=new easyTable($pdf, '{30, 70, 70}', ' align:C; border:1');
  $table4->easyCell("UNIDAD\t".($i+1), 'colspan:3; align:C; bgcolor:white');
  $table4->printRow();

  $titulo=utf8_decode($_POST['titulo'.($i).'']);

  $table4->easyCell($titulo, 'colspan:3; align:C; bgcolor:white');
  $table4->printRow();
  $table4->easyCell('Semana', 'align:C;  bgcolor:white');
  $table4->easyCell('Contenido','align:C; colspan:2; bgcolor:white');
  $table4->printRow();
  // empezamos con poner datos por semana
  //$sem=$_POST['semana'.$i.''];

  $sem[$i]=$_POST['sema'.($i).''];

  $m=0;
  while($m<$sem[$i]){
    $concep=utf8_decode($_POST['procedimental'.$z.'']);
    $pro=utf8_decode($_POST['conceptual'.($z).'']);
  $table4->easyCell(($z+1), 'align:C; rowspan:2; bgcolor:white');
  $table4->easyCell('Conceptual', 'align:C; bgcolor:white');
  $table4->easyCell($concep, 'align:J; bgcolor:white');
  $table4->printRow();
  $table4->easyCell('Procedimental', 'align:C; bgcolor:white');
  $table4->easyCell($pro, 'align:J; bgcolor:white');
  $table4->printRow();
  $m++;
  $z++;
  }
$table4->endTable(5);
//PRUEBA DE TABLA
  $pdf->Ln(8);
  $pdf->SetX(25);
  $text1=utf8_decode("  Actividades y estrategias didácticas:");
  $pdf->Cell(0,6,"4.".($i+1).".2\n".$text1,0,1);
  $pdf->Ln(2);
  $pdf->SetFont('Arial','',8);
  $actividades=utf8_decode($_POST['actividad'.($i).'']);
  $estrategia=utf8_decode($_POST['estrategia'.($i).'']);

//LA Tabla PARA ACTIVIDADES Y ESTRATEGIAS

$table=new easyTable($pdf, '{50, 50,}', 'align:C; border:1');
  $table->easyCell('Actividades', 'align:C;bgcolor:white');
  $table->easyCell('Estrategias', 'align:C;bgcolor:white');
  $table->printRow();

  $table->easyCell($actividades, 'bgcolor:white');
  $table->easyCell($estrategia, 'bgcolor:white');
  $table->printRow();
$table->endTable(5);
//la Tabla

  $pdf->Ln(8);
  $pdf->SetX(27);
  $titu23=utf8_decode("Evaluación de los logros de aprendizaje :");
  $pdf->Cell(0,6,"4.".($i+1).".3\n".$titu23,0,1);//parte de evaluacion
  $pdf->Ln(3);
  //tabla de ponderacion y unidades

  $table1=new easyTable($pdf, '{40, 40, 40, 40}', 'align:C; border:1');

    $ponuni=utf8_decode($_POST['ponduni'.$i.'']);
    $desem=utf8_decode($_POST['desmpeño'.$i.'']);
    $poncri1=utf8_decode($_POST['ponderacion1'.$i.'']);
    $proce1=utf8_decode($_POST['procedimenta1'.$i.'']);
    $text2=utf8_decode("Ponderación de la unidad");
    $table1->easyCell($text2, ' align:C;bgcolor:white');
    $tiu34=utf8_decode("Criterios de evaluación");
    $table1->easyCell($tiu34, 'align:C;bgcolor:white');
    $titu56=utf8_decode("Ponderación de criterios");
    $table1->easyCell($titu56, 'align:C;bgcolor:white');
    $table1->easyCell('Procedimental', ' align:C;bgcolor:white');
    $table1->printRow();
    $table1->easyCell($ponuni, ' rowspan:5; align:C; font-size:14; bgcolor:white');
    $pru=utf8_decode('Evaluación del desempeño');
    $table1->easyCell($pru."\n".$desem,'font-size:9;align:C; bgcolor:white');
    $table1->easyCell($poncri1,'align:J;bgcolor:white');
    $table1->easyCell($proce1,'align:J;bgcolor:white');
    $table1->printRow();
    $impac=utf8_decode($_POST['impacto'.$i.'']);
    $poncri2=utf8_decode($_POST['ponderacion2'.$i.'']);
    $proce2=utf8_decode($_POST['procedimenta2'.$i.'']);
    $inpac=utf8_decode("Evaluación de impacto");
    $table1->easyCell($inpac."\n".$impac,'align:C;bgcolor:white');
    $table1->easyCell($poncri2,'align:J;bgcolor:white');
    $table1->easyCell($proce2,'align:J;bgcolor:white');
    $table1->printRow();

    $poncri3=utf8_decode($_POST['ponderacion3'.$i.'']);
    $proce3=utf8_decode($_POST['procedimenta3'.$i.'']);
    //$table1->easyCell('','bgcolor:white');
    $table1->easyCell('Desarrollo actitudinal','align:C;bgcolor:white');
    $table1->easyCell($poncri3,'align:J;bgcolor:white');
    $table1->easyCell($proce3,'align:J;bgcolor:white');
    $table1->printRow();
    $poncri4=utf8_decode($_POST['ponderacion4'.$i.'']);
    $proce4=utf8_decode($_POST['procedimenta4'.$i.'']);
    //$table1->easyCell('','bgcolor:white');
    $table1->easyCell('Examen de unidad','align:C;bgcolor:white');
    $table1->easyCell($poncri4,'align:J;bgcolor:white');
    $table1->easyCell($proce4,'align:J;bgcolor:white');
    $table1->printRow();
    $table1->easyCell('','bgcolor:white');
    $table1->easyCell('100%','align:C;bgcolor:white');
    $table1->easyCell('','bgcolor:white');
    $table1->printRow();
  $table1->endTable(10);
  //criterios
  /*$pdf->SetX(27);
  $pdf->Cell(0,6,"5.".($i+1).".7\n BIBLIOGRAFIA:",0,1);//parte de evaluacion
  $pdf->SetX(35);
  $bibliografia=$_POST['bibliografia'.$i.''];
  $pdf->Cell(0,6,$bibliografia,0,1);//parte de evaluacion
  $pdf->Ln(5);*/

  $i++;//contador que aumenta del while
}
$pdf->SetX(20);
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,6,"V.\n BIBLIOGRAFIA:",0,1);//parte de evaluacion
$pdf->SetFont('Arial','',8);

$number = count($_POST["name"]);
  for($i=0; $i<$number; $i++)
  {
       if(trim($_POST["name"][$i] != ''))
       {

         $nombre=utf8_decode($_POST['name'][$i]);
         $autor=utf8_decode($_POST['autor'][$i]);
         $anio=utf8_decode($_POST['año'][$i]);

         $pdf->Ln(1);
         $pdf->SetX(27);
         $pdf->Cell(0,6,"\n".($i+1).".-\n".$autor."\n\n(".$anio.")\n\n".$nombre,0,1);
       }
  }

  $pdf->Ln(4);
  $pdf->SetX(20);
  $pdf->SetFont('Arial','',9);
  $pdf->Cell(0,6,"VI.\n RESUMEN DE CURSO:",0,1);
  $pdf->SetX(10);
  $pdf->SetFont('Arial','',8);
  $table5=new easyTable($pdf, '{40, 40,}', 'border:1');
    $table5->easyCell('Unidad','align:C;bgcolor:white');
    $table5->easyCell('Porcentaje (%)','align:C;bgcolor:white');
    $table5->printRow();
    $j=0;
    for($j=0;$j<$uni;$j++)
    {
      $porcentaje=$_POST['ponduni'.$j.''];
      $table5->easyCell(($j+1),'align:C;bgcolor:white');
      $table5->easyCell($porcentaje,'align:C;bgcolor:white');
      $table5->printRow();
    }
  $table5->endTable(10);

$pdf->Output();
