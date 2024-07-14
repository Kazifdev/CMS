<?php
include 'db_conn.php';
session_start();


if (isset($_POST['validate'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $studentid = $_POST['studentid_staffid'];
    

    //password recovery code for students


    $sql = "SELECT * FROM Students WHERE email='$email' && username='$username' && student_id = '$studentid'";

    $result = mysqli_query($mysqli, $sql);

    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $_SESSION['email'] = $email;
        
        header('location:reset_password.php');
    } else {
        echo "<script>alert('Wrong data Entered, Try Again!'); location.href ='forget_password.php';</script>";
       
    }
    //password recovery code for staffs

    $email = $_POST['email'];
    $username = $_POST['username'];
    $staffid = $_POST['studentid_staffid'];


        $sql = "SELECT * FROM Staffs WHERE email='$email' && username='$username' && staff_id = '$staffid'";
    
        $result = mysqli_query($mysqli, $sql);
    
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $_SESSION['email'] = $email;
            header('location:reset_password.php');
            
        }
        else {
                
            echo "<script>alert('Wrong data Entered, Try Again!'); location.href ='forget_password.php';</script>";
                    
        }
    


}




?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Forget Password</title>
  </head>
  <style>
      .card {
          margin: 150px auto;
      }

      .btn-primary {
          border:none;
          padding: 5px 20px;
          border-radius: 5px;
      }

  </style>



  <body>
  <header>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="UDW.php">UDW</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
  </header>





  <div class="card" style="width: 30rem;">
            <div class="card-body">
              <h5 class="card-header" >Security Question</h5><br>
              
              <form action="forget_password.php" method="POST" >

                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" placeholder="Enter Your Email" name="email" >
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input id="username" type="text" class="form-control" placeholder="Enter Your username" name="username"  >
                </div>
                <div class="form-group">
                  <label for="studentid_staff">Student ID/Staff ID</label>
                  <input id="studentid" type="text" class="form-control" placeholder="Enter Your Student ID" name="studentid_staffid"  >
                </div>

                <button type="submit" class="btn-primary" name="validate" >VALIDATE</button>
              </form>
              
            </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>