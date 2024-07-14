<?php  
//action.php
include('db_conn.php'); //db connection

$input = filter_input_array(INPUT_POST);

$lecturer = mysqli_real_escape_string($mysqli, $input["lecturer"]);
$tutor = mysqli_real_escape_string($mysqli, $input["tutor"]);
$tutorial_location = mysqli_real_escape_string($mysqli, $input["tutorial_location"]);
$tutorial_time = mysqli_real_escape_string($mysqli, $input["tutorial_time"]);
$consultation_hours = mysqli_real_escape_string($mysqli, $input["consultation_hours"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE uc_allocating_staff 
 SET lecturer = '".$lecturer."', 
 tutor = '".$tutor."',
 tutorial_location = '".$tutorial_location."',
 tutorial_time = '".$tutorial_time."',
 consultation_hours = '".$consultation_hours."'
 WHERE unit_code = '".$input["unit_code"]."'
 ";

 mysqli_query($mysqli, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM uc_allocating_staff 
 WHERE unit_code = '".$input["unit_code"]."'
 ";
 mysqli_query($mysqli, $query);
}

echo json_encode($input);

?>