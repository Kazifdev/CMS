<html>  
 <head>  
          <title>UDW | Master Page for academic staff</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="jquery.tabledit.min.js"></script>
    <style>

            .navbar-brand {
                font-size: 25px;
                padding-left: 50px;
            }

            .navbar-nav {
                margin-right: 250px;
            }



            .dropdown-menu {
                background-color:#343a40;
                margin-top:7px;
                margin-left: 5px;
                border-radius: 0px;
            }

            .dropdown-item {
                color: rgb(255, 255, 255);
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
        $result = $mysqli->query("SELECT * FROM Academic_staffs") or die($mysqli->query);
        ?> 
  <div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
    <h3 align="center">Academic Staffs</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
     <tr>
                  <th>Staff ID</th>
                  <th>Staff Name</th>
                  <th>Qulification</th>
                  <th>Preferred Days</th>
                  <th>Consultation Hours</th>
              </tr>
     </thead>
     <tbody>
     <?php
               
                while ($row =$result->fetch_assoc()):?>
                <tr>

                    <td><?php echo $row['staff_id'];?></td>
                    <td><?php echo $row['staff_name'];?></td>
                    <td><?php echo $row['qualification'];?></td>
                    <td><?php echo $row['preferred_days'];?></td>
                    <td><?php echo $row['consultation_hours'];?></td>
                </tr>
                <?php endwhile; ?>
     </tbody>
    </table>
   </div>  
  </div>  

  <button class="manage_btn call btn-success" type="button" data-toggle="modal" data-target="#New_item">Create New Item</button>
  
  <?php  include 'footer.php';  ?>

        <!-- The Modal -->
        <div class="modal fade" id="New_item">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Add New Item</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                <form style="width: 80%; margin-left:50px;" action="fetch.php" method="POST">
                  <div class="form-group">
                    <label for="Staff Name">Staff Name</label>
                    <input type="text" class="form-control" id="staff_name" name="staff_name"  placeholder="Staff Name">
                  </div>
                  <div class="form-group">
                    <label for="Staff ID">Staff ID</label>
                    <input type="text" class="form-control" id="staff_id" name="staff_id" placeholder="Staff Id">
                  </div>
                  <div class="form-group">
                    <label for="Qulification">Qulification</label>
                    <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Qualification">
                  </div>
                  <div class="form-group">
                    <label for="Preferred Days">Preferred Days</label>
                    <input type="text" class="form-control" id="preferred_days" name="preferred_days" placeholder="Preferred Days">
                  </div>
                  <div class="form-group">
                    <label for="Consultation Hours">Consultation Hours</label>
                    <input type="text" class="form-control" id="consultation_hours" name="consultation_hours" placeholder="Consultation Hours">
                  </div>
                  
                  <button type="submit" class="call btn-primary" name="add">Add To the list</button>
                </form>

                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="call btn-warning" data-dismiss="modal">Close</button>
                </div>
                
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
      url:'action_2.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'staff_name'], [2, 'staff_id'], [3, 'qualification'],[4, 'preferred_days'],[5, 'consultation_hours']]
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

