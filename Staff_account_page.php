<?php 
include 'db_conn.php';
session_start();


if (isset($_POST['update_DC_profile'])) {

    $username2 = $_POST['username2'];
    $staffId = $_POST['staffId'];
    $email2 = $_POST['email2'];
    $password2 = $_POST['password2'];
    $salt = "kazif_assignment_2";
    $password2= crypt($password2, $salt);


    $address2 = $_POST['address2'];
    $qualification = $_POST['qualification'];
    $expertise = $_POST['expertise'];

    $phn2 = $_POST['phn2'];
  
  $sql = "UPDATE `Staffs` SET `email`='$email2',`password`='$password2',`address`='$address2', `qualification`='$qualification', `expertise`='$expertise',`phone`='$phn2' WHERE `username` ='".$_SESSION['username2']."' ";

  $result = mysqli_query($mysqli, $sql);


  if($result) {

    echo "<script>alert('Updated successfully!'); location.href ='Staff_account_page.php';</script>";
    }else{

      echo "<script>alert('unsuccessfull, Try Again!'); location.href ='Staff_account_page.php';</script>";
    }

}



/* reset password */

if (isset($_POST['update_password'])) {
  
  $newpassword = $_POST['new_password'];
  $salt = "kazif_assignment_2";
  $newpassword= crypt($newpassword, $salt);

  
  $sql = "UPDATE `Staffs` SET `password`='$newpassword' WHERE `username` ='".$_SESSION['username2']."' ";

  $result = mysqli_query($mysqli, $sql);


  if($result) {

    echo "<script>alert(' Password Updated successfully!'); location.href ='Staff_account_page.php';</script>";
    }else{

      echo "<script>alert('Try Again!'); location.href ='Staff_account_page.php';</script>";
    }

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDW | DC Account Page</title>
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


<?php  include 'header_DC.php';  ?>

    <br><br><br>

    <div class="profile_page">
        

        <?php
        include('db_conn.php'); //db connection
        //require_once 'db_conn.php';
        $result = $mysqli->query("SELECT * FROM `Staffs` WHERE `username` ='".$_SESSION['username2']."'") or die($mysqli->query);

        ?>


<?php
                      
                      while ($row =$result->fetch_assoc()):?>
                        <div class="card">
                              <h5 class="card-header">profile</h5>
                              <div class="card-body">
                                
                                  <form id="login" action="Staff_account_page.php" method="POST">
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="username2">Username</label>
                                        <input id="username2" type="text" class="form-control" placeholder="User Name" name="username2" readonly value="<?php echo $row['username'];?>" >
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="staffId">Staff ID</label>
                                        <input id="staffId" type="text" class="form-control" placeholder="Staff ID" name="staffId" readonly value="<?php echo $row['staff_id'];?>" >
                                        </div>
                                      </div>
                                      <div class="form-group">
                                      <label for="email2">Email</label>
                                            <input id="email2" type="email" class="form-control" placeholder="Email" name="email2" value="<?php echo $row['email'];?>" >
                                      </div>
                                      <div class="form-group">
                                      <label for="password2">Password</label>
                                            <input id="password2" type="password" class="form-control" placeholder="Password" name="password2" readonly value="<?php echo $row['password'];?>">
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="address2">Address</label>
                                        <input id="address2" type="text" class="form-control" placeholder="Address" name="address2" value="<?php echo $row['address'];?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="qualification">qualification</label>
                                            <input id="qualification" type="text" class="form-control" placeholder="Qualification" name="qualification" value="<?php echo $row['qualification'];?>">
                                        </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="expertise">expertise</label>
                                                <input id="expertise" type="text" class="form-control" placeholder="Expertise" name="expertise" value="<?php echo $row['expertise'];?>">
                                            </div>
                                          <div class="form-group col-md-6">
                                            <label for="phn2">phone</label>
                                            <input id="phn2" type="tel" class="form-control" placeholder="phone" name="phn2" value="<?php echo $row['phone'];?>" >
                                          </div>
                                      
                                      </div>
                                      
                                      
                                      <div class="form-group">
                                        <button type="submit" class="btn-primary" name="update_DC_profile">UPDATE</button>
                                        </div>
                                    </form>
                    </div>
                  </div>
                        <?php endwhile; ?>


          <!-- changing password ---->

          <div class="card" style="width: 30rem;">
            <div class="card-body">
              <h5 class="card-header" >Change Password</h5>
              
              <form action="Staff_account_page.php" method="POST" onsubmit="return validation()">

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

    </div>



    <?php  include 'footer.php';  ?>

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