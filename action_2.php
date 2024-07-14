<?php  
//action.php
include('db_conn.php'); //db connection

$input = filter_input_array(INPUT_POST);

$staff_name = mysqli_real_escape_string($mysqli, $input["staff_name"]);
$staff_id = mysqli_real_escape_string($mysqli, $input["staff_id"]);
$qualification = mysqli_real_escape_string($mysqli, $input["qualification"]);
$preferred_days = mysqli_real_escape_string($mysqli, $input["preferred_days"]);
$consultation_hours = mysqli_real_escape_string($mysqli, $input["consultation_hours"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE Academic_staffs 
 SET staff_name = '".$staff_name."', 
 staff_id = '".$staff_id."',
 qualification = '".$qualification."',
 preferred_days = '".$preferred_days."',
 consultation_hours = '".$consultation_hours."'
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($mysqli, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM Academic_staffs 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($mysqli, $query);
}

echo json_encode($input);

?>