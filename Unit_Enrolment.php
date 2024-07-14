<?php

session_start();
include('db_conn.php');

//Enrollment

if(isset($_POST['Enroll_now'])) {

$studentId=$_POST['studentId'];
$unit_code=$_POST['unit_code'];
$semester_id=$_POST['semester_id'];
$campus_id=$_POST['campus_id'];
$tutorial_days=$_POST['tutorial_days'];




$sql = "INSERT INTO `Enrollment`(`enroll_id`, `student_id`, `unit_code`, `semester_id`, `campus_id`, `tutorial_id` ) VALUES('','$studentId','$unit_code','$semester_id','$campus_id', '$tutorial_days')" or die($mysqli->error());

$result = mysqli_query($mysqli, $sql);

  if($result)
  {
    echo "<script>alert('Enrollment Successfull!'); location.href ='Unit_Enrolment.php';</script>";
  }
  else
  {
    echo "<script>alert('Enrollment Unsuccessfull!'); location.href ='Unit_Enrolment.php';</script>";
  }

}

// deleting unit from specific students account 
if (isset($_GET['delete'])) {
  $enroll_id = $_GET['delete'];
  $mysqli->query("DELETE FROM Enrollment WHERE enroll_id = $enroll_id") or die($mysqli->error());


  function function_delete_msg($message) { 
			 
    echo "<script>alert('$message');</script>"; 
  } 
  
  function_delete_msg("You have deleted a Unit successfully!"); 

}






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDW |Student-Unit Enrolment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="pages.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
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


<body>

<?php 
    include 'header_student.php';
  
  ?>


<br>
  <section>
    

    <?php
        include('db_conn.php'); //db connection
        //require_once 'db_conn.php';
        $result = $mysqli->query("SELECT * FROM `Students` WHERE `username` ='".$_SESSION['username1']."'") or die($mysqli->query);

        ?>

        <?php

        //Unit Enrollment
                      
          while ($row =$result->fetch_assoc()):?>
            <div class="card">
                  <h5 class="card-header">Enroll In a Unit</h5>
                  <div class="card-body">
                    
                      <form id="login" action="" method="POST">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="username1">Username</label>
                            <input id="username1" type="text" class="form-control" placeholder="User Name" name="username1" readonly value="<?php echo $row['username'];?>" >
                            </div>
                            <div class="form-group col-md-6">
                            <label for="studentId">Student ID</label>
                            <input id="studentId" type="text" class="form-control" placeholder="Student ID" name="studentId" readonly  value="<?php echo $row['student_id'];?>" >
                            </div>
                          </div>
                          <?php endwhile; ?>

                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="unit_code">Unit Code</label>
                                  <select class="form-control " name="unit_code" required="required">
                                    <option value="">Select Unit</option>   
                                    <?php 
                                    include('db_conn.php'); //db connection
                                        $result = $mysqli->query("SELECT * FROM Unit_list") or die($mysqli->query);                                     
                                        ?>
                                  <?php

                                    while ($row =$result->fetch_assoc()):?>
                                  
                                  <option value="<?php echo htmlentities($row['unit_code']);?>"><?php echo htmlentities($row['unit_name']);?></option>
                                  
                                    <?php endwhile; ?>


                                  </select> 
                            </div> 
                            
                            <div class="form-group col-md-6">
                                <label for="semester_id">Semester</label>
                                  <select class="form-control " name="semester_id" required="required">
                                    <option value="">Select Semester</option>   
                                    <?php 
                                    include('db_conn.php'); //db connection
                                        $result = $mysqli->query("SELECT * FROM semester") or die($mysqli->query);                                     
                                        ?>
                                  <?php

                                    while ($row =$result->fetch_assoc()):?>
                                  
                                  <option value="<?php echo htmlentities($row['semester_id']);?>"><?php echo htmlentities($row['semester_name']);?></option>
                                  
                                    <?php endwhile; ?>


                                  </select> 
                            </div> 

                            <div class="form-group col-md-6">
                                <label for="campus">Campus</label>
                                  <select class="form-control " name="campus_id" required="required">
                                    <option value="">Select Campus</option>   
                                    <?php 
                                    include('db_conn.php'); //db connection
                                        $result = $mysqli->query("SELECT * FROM campus") or die($mysqli->query);                                     
                                        ?>
                                  <?php

                                    while ($row =$result->fetch_assoc()):?>
                                  
                                  <option value="<?php echo htmlentities($row['campus_id']);?>"><?php echo htmlentities($row['campus_name']);?></option>
                                  
                                    <?php endwhile; ?>


                                  </select> 
                            </div>

                            <div class="form-group col-md-6">
                                <label for="tutorial day">Tutorial Day</label>
                                  <select class="form-control " name="tutorial_days" required="required">
                                    <option value="">Select Tutorial Day</option>   
                                    <?php 
                                    include('db_conn.php'); //db connection
                                        $result = $mysqli->query("SELECT * FROM Tutorial") or die($mysqli->query);                                     
                                        ?>
                                  <?php

                                    while ($row =$result->fetch_assoc()):?>
                                  
                                  <option value="<?php echo htmlentities($row['tutorial_id']);?>"><?php echo htmlentities($row['tutorial_days']);?></option>
                                  
                                    <?php endwhile; ?>


                                  </select> 
                            </div>

                           



                          </div>
                          
                          <div class="form-group">
                            <button type="submit" class="btn-primary" name="Enroll_now">ENROLL</button>
                            </div>
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
                
                <td>Unit Code</td>
                <td>Unit Name</td>
                <td>Semester</td>
                <td>Campus</td>
                <td>Enrollment Date</td>
                <td>Action</td>
                </tr>
                  
                </thead>


                <?php 

                    // Fetching students enrollment data from the website

                while ($row =$result->fetch_assoc()):?>


                <tbody>
                  <tr>
                  
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

</section>


  <?php 
    include 'footer.php';
  
  ?>


   

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>