<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDW |Student-Tutorial Allocation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="pages.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<style>
        .tutorial-allocation {
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

        #tuttime {
          background-color: grey;
          color: white;
          

        }
 
  </style>


<body>

<?php session_start();
    ?>

<?php 
    include 'header_student.php';
  
  ?>


    <section class="tutorial-allocation">
      <!---Enroll History--->

      <div class="card" style="width: 1000px;">
              <div class="card-header">
                <h2>Tutorial Allocated</h2>
              </div>
              <div class="card-body">
              <table class="table ">
              <?php
                  include('db_conn.php'); //db connection
                  //require_once 'db_conn.php';
                  $result = $mysqli->query("SELECT Unit_list.unit_code, Unit_list.unit_name, semester.semester_name, campus.campus_name, Enrollment.enroll_date,

                  Tutorial.tutorial_days
                  
                  FROM Students
                  
                  JOIN Enrollment ON (Enrollment.student_id = Students.student_id)
                  
                  JOIN Unit_list ON (Unit_list.unit_code = Enrollment.unit_code)
                  
                  JOIN semester ON (semester.semester_id = Enrollment.semester_id)
                  
                  JOIN campus ON (campus.campus_id = Enrollment.campus_id)
                  
                  JOIN Tutorial ON (Tutorial.tutorial_id = Enrollment.tutorial_id) WHERE username='".$_SESSION['username1']."' ") or die($mysqli->query);                          

                  
              ?> 

                <thead class="thead-dark">
                <tr>
                
                <td>Unit Code</td>
                <td>Unit Name</td>              
                <td id="tuttime">Tutorial Time</td>              
                <td>Enrollment Date</td>
                </tr>
                  
                </thead>


                <?php 
                while ($row =$result->fetch_assoc()):?>


                <tbody>
                  <tr>                  
                  <td><?php echo $row['unit_code'];?></td>
                  <td><?php echo $row['unit_name'];?></td>
                  <td><?php echo $row['tutorial_days'];?></td>
                  <td><?php echo $row['enroll_date'];?></td>
          
                  </tr>
                </tbody>
                    
                </tr>
                <?php endwhile; ?>

                
              </table>
                
                
              </div>
            </div>
        
      
  
  </section>
      
    </section>
    <?php 
    include 'footer.php';
  
  ?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>