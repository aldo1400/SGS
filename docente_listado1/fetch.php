<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM docente ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE nombre LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR apellido LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	$image = '';
	if($row["ruta_imagen"] != '')
	{
		$image = '<img src="../img/bg.jpg" class="img-thumbnail" width="50" height="35" />';
	}
	else
	{
		$image = '';
	}
	$sub_array = array();
//  $sub_array[] = $image;
 $sub_array[] = $row["nombre"];
 $sub_array[] = $row["apellido"];
 $sub_array[] = $row["dni"];
 $sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Update</button>';
 $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
 $data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	get_total_all_records(),
	"recordsFiltered"	=>	$filtered_rows,
	"data"				=>	$data
);
echo json_encode($output,JSON_UNESCAPED_UNICODE);
?>