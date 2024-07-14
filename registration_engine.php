<?php
  include 'db_conn.php';
  session_start();
  
    /*Student Registration*/ 
  if (isset($_POST['add_student'])) {
    $studentId = $_POST['studentId'];
		$username1 = $_POST['username1'];
    $email1 = $_POST['email1'];
    $password1 = $_POST['password1'];
    $salt = "kazif_assignment_2";
    $password1= crypt($password1, $salt);

    $dob = $_POST['dob'];
    $address1 = $_POST['address1'];
    $phn1 = $_POST['phn1'];
    

    $sql = "SELECT * FROM Students WHERE username='$username1'";

    $result = mysqli_query($mysqli, $sql);

    $num = mysqli_num_rows($result);
    if ($num == 1) {

      echo "<script>alert('Username already exits!'); location.href ='registration_page.php';</script>";
      exit();
    }


    $sql = "SELECT * FROM Students WHERE student_id='$studentId'";

    $result = mysqli_query($mysqli, $sql);

    $num = mysqli_num_rows($result);
    if ($num == 1) {

      echo "<script>alert('Student id already exits!'); location.href ='registration_page.php';</script>";
      exit();
    }



    else {
      $mysqli->query("INSERT INTO Students (student_id, username,  email, password, dob, address, phone) VALUES ('$studentId','$username1','$email1','$password1','$dob','$address1','$phn1')") or die($mysqli->error());

      echo "<script>alert('Registration Sucessesfull!'); location.href ='login_page.php';</script>";
    }

    
  }

  /*Staff Registration*/ 
  if (isset($_POST['add_staff'])) {
    $staffId = $_POST['staffId'];
		$username2 = $_POST['username2'];
    $email2 = $_POST['email2'];
    $password2 = $_POST['password2'];
    $salt = "kazif_assignment_2";
    $password2= crypt($password2, $salt);


    $address2 = $_POST['address2'];
    $qualification = $_POST['qualification'];
    $expertise = $_POST['expertise'];

    $phn2 = $_POST['phn2'];
    

    $sql = "SELECT * FROM Staffs WHERE username='$username2'";

    $result = mysqli_query($mysqli, $sql);

    $num = mysqli_num_rows($result);
    if ($num == 1) {
      echo "<script>alert('Username already exits!'); location.href ='registration_page.php';</script>";
      exit();
    }

    $sql = "SELECT * FROM Staffs WHERE staff_id='$staffId'";

    $result = mysqli_query($mysqli, $sql);

    $num = mysqli_num_rows($result);
    if ($num == 1) {
      echo "<script>alert('Staff ID already exits!'); location.href ='registration_page.php';</script>";
      exit();
    }



    else {
      $mysqli->query("INSERT INTO Staffs (staff_id, username, email, password, address, qualification, expertise, phone) VALUES ('$staffId','$username2','$email2','$password2','$address2','$qualification','$expertise','$phn2')") or die($mysqli->error());
    
      echo "<script>alert('Registration Sucessesfull!'); location.href ='login_page.php';</script>";
    
    }

    
  }
  

?>

