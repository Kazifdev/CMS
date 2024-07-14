
<?php  


//exporting enroll list to excel file

include('db_conn.php');


$return = '';

if(isset($_POST["export"]))
{
	$result = $mysqli->query("SELECT Unit_list.unit_code, Unit_list.unit_name, semester.semester_name, campus.campus_name, Enrollment.enroll_id,
	Tutorial.tutorial_days, Students.student_id
	FROM Students
	JOIN Enrollment ON (Enrollment.student_id = Students.student_id)
	JOIN Unit_list ON (Unit_list.unit_code = Enrollment.unit_code)
	JOIN semester ON (semester.semester_id = Enrollment.semester_id)
	JOIN campus ON (campus.campus_id = Enrollment.campus_id)
	JOIN Tutorial ON (Tutorial.tutorial_id = Enrollment.tutorial_id)") or die($mysqli->query);
		if(mysqli_num_rows($result) > 0)
		{
		$return .= '
		<table id="" class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>          
                <th>Enrolled ID</th>
                <th>Student ID</th>
                <th>Unit Code</th>
                <th>Unit Name</th>
                <th>Semester</th>
                <th>Campus Name</th>
                <th>Tutorial Time</th>
            </tr>
		';
		while($row = mysqli_fetch_array($result))
		{
		$return .= '
			<tr>  
				<td>'.$row["enroll_id"].'</td>  
				<td>'.$row["student_id"].'</td>  
				<td>'.$row["unit_code"].'</td>  
				<td>'.$row["unit_name"].'</td>  
				<td>'.$row["semester_name"].'</td>
				<td>'.$row["campus_name"].'</td>
				<td>'.$row["tutorial_days"].'</td>
			</tr>
		';
		}
		$return .= '</table>';
		header('Content-Type: application/xls');
		header('Content-Disposition: attachment; filename=Enrolled Student Lists.xls');
		echo $return;
		}
}

?>



 
