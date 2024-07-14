<?php 
include 'db_conn.php';
session_start();

/* For Master page for academic staff */
if (isset($_POST['add'])) {
    $staff_name = $_POST['staff_name'];
    $staff_id = $_POST['staff_id'];
    $qualification = $_POST['qualification'];
    $preferred_days = $_POST['preferred_days'];
    $consultation_hours = $_POST['consultation_hours'];

    $mysqli->query("INSERT INTO `Academic_staffs`(`id`, `staff_name`, `staff_id`, `qualification`, `preferred_days`, `consultation_hours`) VALUES ('', '$staff_name', '$staff_id', '$qualification', '$preferred_days', '$consultation_hours')") or die($mysqli->error());


    header("location: Master page for academic staff.php");

}




/* For Master page for unit details */
if (isset($_POST['add_unit'])) {
    $unit_code = $_POST['unit_code'];
    $unit_name = $_POST['unit_name'];
    $availability = $_POST['availability'];
    $Campus = $_POST['Campus'];
    $unit_coordinator = $_POST['unit_coordinator'];
    

    $mysqli->query("INSERT INTO `Unit_list`(`unit_code`, `unit_name`, `availability`, `Campus`, `unit_coordinator`) VALUES ('$unit_code','$unit_name', '$availability','$Campus','$unit_coordinator')") or die($mysqli->error());

    

    header("location: Master page for unit details.php");

}






/* For Unit_Management_page_UC To allocate stuff */
if (isset($_POST['allocate_staffs'])) {
    $unit_code = $_POST['unit_code'];
    $lecturer = $_POST['lecturer'];
    $tutor = $_POST['tutor'];
    $tutorial_location = $_POST['tutorial_location'];
    $tutorial_time = $_POST['tutorial_time'];
    $consultation_hours = $_POST['consultation_hours'];
    

    $mysqli->query("INSERT INTO `uc_allocating_staff`(`unit_code`, `lecturer`, `tutor`, `tutorial_location`, `tutorial_time`, `consultation_hours`) VALUES ('$unit_code','$lecturer','$tutor','$tutorial_location','$tutorial_time','$consultation_hours')") or die($mysqli->error());

    

    header("location: Unit_Management_page_UC.php");

}




?>