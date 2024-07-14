<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UDW | DC-Unit management</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="jquery.tabledit.min.js"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">

    <style>

.navbar-brand {
    font-size: 25px;
    padding-left: 50px;
}

.navbar-nav {
    margin-right: 250px;
}



.nav-item {
  margin-left: 20px;
}


.btn {
    padding: 5px 25px;
    background-color: rgb(255, 255, 255);
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin-left: 0px;
    margin-right: 50px;
    color: rgb(0, 0, 0);
    font-weight: bolder;
}

.btn:hover {
    background-color: black;
    color: white;
}

.call {
    padding: 5px 10px;
    color: black;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin-left: 170px;
    margin-right: 20px;
    font-weight: bolder;
}
</style>

</head>
<body>

<?php session_start();  ?>

<header>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="Home1.php">UDW</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-item nav-link active" href="Home1.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-item nav-link active" href="Unit_Details_DC.php">Unit Details</a>
            </li>
            <li class="nav-item">
            <a class="nav-item nav-link active" href="Unit_Management_page.php">Unit Management</a>
            </li>
            <li class="nav-item">
            <a class="nav-item nav-link active" href="Enrolled_Student_page.php">Enrolled Student List</a>
            </li>
            <li class="nav-item">
            <a class="nav-item nav-link active" href="Staff_account_page.php">User Page</a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Master List
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Master page for academic staff.php">Academic Staff</a>
                    <a class="dropdown-item" href="Master page for unit details.php">Unit details/mangement</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link active" href="logout.php"><button class="btn">Logout</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link active"><button class="session_user"><?php echo $_SESSION['username2']; ?></button></a>
            </li>
          </ul>
          
        </div>
      </nav>
  </header>

  <?php
        include('db_conn.php'); //db connection
        //require_once 'db_conn.php';
        $result = $mysqli->query("SELECT * FROM uc_allocating_staff") or die($mysqli->query);
      ?> 
        <div class="container">  
          <br />  
          <br />  
          <br />  
                    <div class="table-responsive">  
            <h3 align="center">Allocated Teaching Staffs by Unit cordinator</h3><br />  
            <table id="editable_table" class="table table-bordered table-striped">
            <thead>
            <tr>
                  
                  <th>Unit Code</th>
                  <th>Lecturer</th>
                  <th>Tutor</th>
                  <th>Tutorial Location</th>
                  <th>Tutorial Time</th>
                  <th>Consultation Hours</th>
                            
              </tr>
            </thead>
            <tbody>
            <?php

              //Fetching data from the database
                    
                        while ($row =$result->fetch_assoc()):?>    
                        <tr>
                            <td><?php echo $row['unit_code'];?></td>
                            <td><?php echo $row['lecturer'];?></td>
                            <td><?php echo $row['tutor'];?></td>
                            <td><?php echo $row['tutorial_location'];?></td>
                            <td><?php echo $row['tutorial_time'];?></td>
                            <td><?php echo $row['consultation_hours'];?></td>
                        </tr>
                        <?php endwhile; ?>
            </tbody>
            </table>
          </div>  
          </div>  


        

      <?php  include 'footer.php';  ?>

</body>

</html>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"> </script>


