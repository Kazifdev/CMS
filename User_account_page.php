<?php 
include 'db_conn.php';
session_start();


/* Update profile */
if (isset($_POST['update_profile'])) {
  $username1 = $_POST['username1'];
  $studentId = $_POST['studentId'];
  $email1 = $_POST['email1'];
  $password1 = $_POST['password1'];
  $salt = "kazif_assignment_2";
  $password1= crypt($password1, $salt);



  $dob = $_POST['dob'];
  $address1 = $_POST['address1'];
  $phn1 = $_POST['phn1'];
  
  $sql = "UPDATE `Students` SET `email`='$email1',`address`='$address1',`phone`='$phn1' WHERE `username` ='".$_SESSION['username1']."' ";

  $result = mysqli_query($mysqli, $sql);


  if($result) {

    echo "<script>alert('Updated successfully!'); location.href ='User_account_page.php';</script>";
    }else{

      echo "<script>alert('unsuccessfull, Try Again!'); location.href ='User_account_page.php';</script>";
    }

}



/* reset password */

if (isset($_POST['update_password'])) {
  
  $newpassword = $_POST['new_password'];
  $salt = "kazif_assignment_2";
  $newpassword= crypt($newpassword, $salt);

  
  $sql = "UPDATE `Students` SET `password`='$newpassword' WHERE `username` ='".$_SESSION['username1']."' ";

  $result = mysqli_query($mysqli, $sql);


  if($result) {

    echo "<script>alert(' Password Updated successfully!'); location.href ='User_account_page.php';</script>";
    }else{

      echo "<script>alert('Try Again!'); location.href ='User_account_page.php';</script>";
    }

}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDW |Std-User Account Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="pages.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


  <style>
        .profile_page {
          height: 1000px;
        }



        .card {
            width: 900px;
            margin: 100px auto;
            
        }
        .card-header {
            text-align: center;
            text-transform: uppercase;
            margin-bottom:30px;
        }

        .btn-primary {
          margin-top:20px;
          padding: 10px 30px;
          border: none;
          border-radius: 20px;
          background-color:black;
          
        }

  
  </style>





</head>




<body>

<?php 
    include 'header_student.php';
  
  ?>



<div class="profile_page">

        <!-- Profile information ---->

        <h1 align="center">Student Profile Page</h1>

        <?php
        include('db_conn.php'); //db connection
        //require_once 'db_conn.php';
        $result = $mysqli->query("SELECT * FROM `Students` WHERE `username` ='".$_SESSION['username1']."'") or die($mysqli->query);

        ?>


        <?php
                      
          while ($row =$result->fetch_assoc()):?>
            <div class="card">
                  <h5 class="card-header">profile</h5>
                  <div class="card-body">
                    
                      <form id="login" action="User_account_page.php" method="POST">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="username1">Username</label>
                            <input id="username1" type="text" class="form-control" placeholder="User Name" name="username1" readonly value="<?php echo $row['username'];?>" >
                            </div>
                            <div class="form-group col-md-6">
                            <label for="studentId">Student ID</label>
                            <input id="studentId" type="text" class="form-control" placeholder="Student ID" name="studentId" readonly value="<?php echo $row['student_id'];?>" >
                            </div>
                          </div>
                          <div class="form-group">
                          <label for="email">Email</label>
                          <input id="email1" type="email" class="form-control" placeholder="Email" name="email1" value="<?php echo $row['email'];?>" >
                          </div>
                          <div class="form-group">
                          <label for="password">Password</label>
                          <input id="password1" type="password" class="form-control" placeholder="Password" name="password1" readonly value="<?php echo $row['password'];?>">
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="dob">Date of Birth</label>
                            <input id="dob" type="text" class="form-control" placeholder="Date Of Birth" name="dob" readonly value="<?php echo $row['dob'];?>" >
                            </div>
                            <div class="form-group col-md-4">
                            <label for="address">Address</label>
                            <input id="address1" type="text" class="form-control" placeholder="Address" name="address1" value="<?php echo $row['address'];?>">
                            </div>
                            <div class="form-group col-md-2">
                            <label for="phn1">Phone Number</label>
                            <input id="phn1" type="tel" class="form-control" placeholder="Phone Number" name="phn1" value="<?php echo $row['phone'];?>" >
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <button type="submit" class="btn-primary" name="update_profile">UPDATE</button>
                            </div>
                        </form>
        </div>
      </div>
            <?php endwhile; ?>

            <!-- changing password ---->

          <div class="card" style="width: 30rem;">
            <div class="card-body">
              <h5 class="card-header" >Change Password</h5>
              
              <form action="User_account_page.php" method="POST" onsubmit="return validation()">

                <div class="form-group">
                  <label for="password">Password</label>
                  <input id="new_password" type="password" class="form-control" placeholder="new password" name="new_password" >
                </div>
                <div class="form-group">
                  <label for="conpassword">Confirm Password</label>
                  <input id="conpassword" type="password" class="form-control" placeholder="Confirm Password" name="conpassword"  >
                </div>

                <button type="submit" class=" btn-primary" name="update_password" onclick="return validation()">UPDATE PASSWORD</button>
              </form>
              
              
            </div>
          </div>

            <!---Enroll History--->

      <div class="card" style="width: 1000px;">
              <div class="card-header">
                Enrolled history
              </div>
              <div class="card-body">
              <table class="table ">
              <?php
                  include('db_conn.php'); //db connection
                  //require_once 'db_conn.php';
                  $result = $mysqli->query("SELECT Unit_list.unit_code, Unit_list.unit_name, semester.semester_name, campus.campus_name, Enrollment.enroll_date, Enrollment.enroll_id
                  FROM Students
                  JOIN Enrollment ON (Enrollment.student_id = Students.student_id)                 
                  JOIN Unit_list ON (Unit_list.unit_code = Enrollment.unit_code)
                  JOIN semester ON (semester.semester_id = Enrollment.semester_id)
                  JOIN campus ON (campus.campus_id = Enrollment.campus_id) WHERE username='".$_SESSION['username1']."' ") or die($mysqli->query);                          

                  
              ?> 

                <thead class="thead-dark">
                <tr>
                <td>Enroll ID</td>
                <td>Unit Code</td>
                <td>Unit Name</td>
                <td>Semester</td>
                <td>Campus</td>
                <td>Enrollment Date</td>
                <td>Action</td>
                </tr>
                  
                </thead>


                <?php 
                while ($row =$result->fetch_assoc()):?>


                <tbody>
                  <tr>
                  <td><?php echo $row['enroll_id'];?></td>
                  <td><?php echo $row['unit_code'];?></td>
                  <td><?php echo $row['unit_name'];?></td>
                  <td><?php echo $row['semester_name'];?></td>
                  <td><?php echo $row['campus_name'];?></td>
                  <td><?php echo $row['enroll_date'];?></td>
                  <td>
                    <a href="Unit_Enrolment.php?delete=<?php echo $row['enroll_id']; ?>" class = " btn-danger">Delete</a>
                  </td>
                
                  </tr>
                </tbody>
                    
                </tr>
                <?php endwhile; ?>

                
              </table>
                
                
              </div>
            </div>
        
                      


</div>

    



<?php 
    include 'footer.php';
  
  ?>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

<script>
  function validation(){

    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,12}$/;
    var pwd1 = document.getElementById("new_password").value;

    var conpwd1 = document.getElementById("conpassword").value;


    if (pwd1=="") {
        alert("Enter Your Password");
        return false;
    }else if (!pwd1.match(passformat)) {
        alert("Invalid password! Password must have contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character (#,$,%,& etc.) ");
        return false;
    }else if (conpwd1=="") {
        alert("Re-type Your password");
        return false;

    }else if (pwd1 !=conpwd1) {
        alert("password don't match");
        return false;
    }

  }

    

</script>