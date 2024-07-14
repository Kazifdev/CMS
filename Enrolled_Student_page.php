<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDW |DC-Enrolled Student Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="pages.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<?php session_start(); ?>

<?php  include 'header_DC.php';  ?>



    <div>
        <?php
        include('db_conn.php'); //db connection
        //require_once 'db_conn.php';
        
        $result = $mysqli->query("SELECT Unit_list.unit_code, Unit_list.unit_name, semester.semester_name, campus.campus_name, Enrollment.enroll_id,
        Tutorial.tutorial_days, Students.student_id
        FROM Students
        JOIN Enrollment ON (Enrollment.student_id = Students.student_id)
        JOIN Unit_list ON (Unit_list.unit_code = Enrollment.unit_code)
        JOIN semester ON (semester.semester_id = Enrollment.semester_id)
        JOIN campus ON (campus.campus_id = Enrollment.campus_id)
        JOIN Tutorial ON (Tutorial.tutorial_id = Enrollment.tutorial_id)") or die($mysqli->query);
        
        ?> 
         <div class="container">  
      
            <div class="table-responsive">  
            <h3 align="center">Enrolled Student List</h3><br />  
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
            </thead>
            <tbody>
            <?php
                    //Fetching enrolled student data from the database
                        while ($row =$result->fetch_assoc()):?>
                        <tr>                          
                            <td><?php echo $row['enroll_id'];?></td>
                            <td><?php echo $row['student_id'];?></td>
                            <td><?php echo $row['unit_code'];?></td>
                            <td><?php echo $row['unit_name'];?></td>
                            <td><?php echo $row['semester_name'];?></td>
                            <td><?php echo $row['campus_name'];?></td>
                            <td><?php echo $row['tutorial_days'];?></td>
                            
                        </tr>
                        <?php endwhile; ?>
            </tbody>
            </table>
            <form method="post" action="export.php">
                 <input type="submit" name="export" class="call btn-success" value="Export" />
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