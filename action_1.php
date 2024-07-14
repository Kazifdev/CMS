<?php  
//action.php
include('db_conn.php'); //db connection

$input = filter_input_array(INPUT_POST);

$unit_name = mysqli_real_escape_string($mysqli, $input["unit_name"]);
$unit_code = mysqli_real_escape_string($mysqli, $input["unit_code"]);
$availability = mysqli_real_escape_string($mysqli, $input["availability"]);
$Campus = mysqli_real_escape_string($mysqli, $input["Campus"]);
$unit_coordinator = mysqli_real_escape_string($mysqli, $input["unit_coordinator"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE Unit_list 
 SET unit_name = '".$unit_name."',
 availability = '".$availability."',
 Campus = '".$Campus."',
 unit_coordinator = '".$unit_coordinator."'
 WHERE unit_code = '".$input["unit_code"]."'
 ";

 mysqli_query($mysqli, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM Unit_list 
 WHERE unit_code = '".$input["unit_code"]."'
 ";
 mysqli_query($mysqli, $query);
}

echo json_encode($input);

?>