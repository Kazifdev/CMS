<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UDW | UC-Allocating Staffs</title>
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
<?php session_start();
    ?>

  <header>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="Home1.php">UDW</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-item nav-link active" href="Home2.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-item nav-link active" href="Unit_Management_page_UC.php">Unit Management</a>
            </li>
            <li class="nav-item">
            <a class="nav-item nav-link active" href="Unit_Details_UC.php">Unit Details</a>
            </li>
            <li class="nav-item">
            <a class="nav-item nav-link active" href="Enrolled_Student_page_UC.php">Enrolled Student list</a>
            </li>
            <li class="nav-item">
            <a class="nav-item nav-link active" href="UC_account_page.php">User Page</a>
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
            <h3 align="center">Allocate Teaching Staffs</h3><br />  
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


          <button class="manage_btn call btn-success" type="button" data-toggle="modal" data-target="#New_unit">Allocate New </button>

          <?php include 'footer.php';   ?>

        <!---adding new unit to the list-->

        <div class="modal fade" id="New_unit">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Allocate New Staff</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                <form style="width: 80%; margin-left:50px;" action="fetch.php" method="POST">
                  <div class="form-group">
                    <label for="Unit Code">Unit Code</label>
                    <input type="text" class="form-control" id="unit_code" name="unit_code"  placeholder="Unit Code">
                  </div>
                  <div class="form-group">
                    <label for="lecturer">lecturer</label>
                    <input type="text" class="form-control" id="lecturer" name="lecturer" placeholder="lecturer">
                  </div>
                  <div class="form-group">
                    <label for="tutor">tutor</label>
                    <input type="text" class="form-control" id="tutor" name="tutor" placeholder="tutor Name">
                  </div>
                  <div class="form-group">
                    <label for="tutorial_location">tutorial_location</label>
                    <input type="text" class="form-control" id="tutorial_location" name="tutorial_location" placeholder="tutorial location">
                  </div>
                  <div class="form-group">
                    <label for="tutorial_time">tutorial_time</label>
                    <input type="text" class="form-control" id="tutorial_time" name="tutorial_time" placeholder="tutorial time">
                  </div>
                  <div class="form-group">
                    <label for="consultation_hours">consultation_hours</label>
                    <input type="text" class="form-control" id="consultation_hours" name="consultation_hours" placeholder="consultation hours">
                  </div>
                  
                  <button type="submit" class="call btn-primary" name="allocate_staffs">Add to the list</button>
                </form>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="call btn-warning" data-dismiss="modal">Close</button>
                </div>
                
            </div>
        </div>



      
        

</body>

</html>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"> </script>


<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action_3.php',
      columns:{
       identifier:[0, "unit_code"],
       editable:[[1, 'lecturer'], [2, 'tutor'], [3, 'tutorial_location'],[4, 'tutorial_time'],[5, 'consultation_hours']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
 </script>


