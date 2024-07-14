<?php
  

include 'db_conn.php';
session_start();


if (isset($_POST['reset_password'])) {
  
  $newpassword = $_POST['new_password'];
  $salt = "kazif_assignment_2";
  $newpassword= crypt($newpassword, $salt);

  /* reset password for student */
  
  $sql = "UPDATE `Students` SET `password`='$newpassword' WHERE `email` ='".$_SESSION['email']."' ";

  $result = mysqli_query($mysqli, $sql);


  if($result) {

    echo "<script>alert(' Password Updated successfully!'); location.href ='login_page.php';</script>";
    }else{

      echo "<script>alert('Try Again Later!'); location.href ='login_page.php';</script>";
    }

    /* reset password for staffs */

    $sql = "UPDATE `Staffs` SET `password`='$newpassword' WHERE `email` ='".$_SESSION['email']."' ";

    $result = mysqli_query($mysqli, $sql);


    if($result) {

        echo "<script>alert(' Password Updated successfully!'); location.href ='login_page.php';</script>";
        }else{

        echo "<script>alert('Try Again Later!'); location.href ='login_page.php';</script>";
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

    <title>Reset Password!</title>
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
      .nav-link {
        margin-left:1000px;
      }

  </style>

  <body>
  <header>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="UDW.php">UDW</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <ul>
                  <a href="#"><?php echo $_SESSION['email']; ?></a>
                  <a class="nav-item nav-link active"><button class=""><?php echo $_SESSION['email']; ?></button></a>
          </ul>
        </button>
      </nav>
  </header>

  <!-- changing password ---->

  <div class="card" style="width: 30rem;">
            <div class="card-body">
              <h5 class="card-header" >Change Password</h5><br><br>
              
              <form action="reset_password.php" method="POST" onsubmit="return validation()">

                <div class="form-group">
                  <label for="password">Password</label>
                  <input id="new_password" type="password" class="form-control" placeholder="new password" name="new_password" >
                </div>
                <div class="form-group">
                  <label for="conpassword">Confirm Password</label>
                  <input id="conpassword" type="password" class="form-control" placeholder="Confirm Password" name="conpassword"  >
                </div>
                <br>

                <button type="submit" class=" btn-primary" name="reset_password" onclick="return validation()">UPDATE PASSWORD</button>
              </form>
              
              
            </div>
          </div>

    </div>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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