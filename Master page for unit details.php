<html>  
 <head>  
          <title>UDW | Master Page for unit details</title>  
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
        $result = $mysqli->query("SELECT * FROM Unit_list") or die($mysqli->query);
        ?> 
  <div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
    <h3 align="center">Unit details</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead class="thead-dark">
     <tr>
          <th>Unit Code</th>
          <th>Unit Name</th>
          <th>Avalibility</th>
          <th>Campus</th>
          <th>Unit Cordinator</th>

                    
      </tr>
     </thead>
     <tbody>
     <?php
               
                while ($row =$result->fetch_assoc()):?>
                <tr>
                    <td><?php echo $row['unit_code'];?></td>
                    <td><?php echo $row['unit_name'];?></td>
                    <td><?php echo $row['availability'];?></td>
                    <td><?php echo $row['Campus'];?></td>
                    <td><?php echo $row['unit_coordinator'];?></td>
                </tr>
                <?php endwhile; ?>
     </tbody>
    </table>
   </div>  
  </div>  

  <button class="manage_btn call btn-success" type="button" data-toggle="modal" data-target="#New_unit">Add New Unit</button>

        <!---adding new unit to the list-->

        <div class="modal fade" id="New_unit">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Add New Unit</h4>
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
                    <label for="Unit Name">Unit Name</label>
                    <input type="text" class="form-control" id="unit_name" name="unit_name"  placeholder="Unit Name">
                  </div>
                  <div class="form-group">
                    <label for="Availability">Availability</label>
                    <input type="text" class="form-control" id="availability" name="availability" placeholder="Availability">
                  </div>
                  <div class="form-group">
                    <label for="Campus">Campus</label>
                    <input type="text" class="form-control" id="Campus" name="Campus" placeholder="Campus Name">
                  </div>
                  <div class="form-group">
                    <label for="Unit Coordinator">Unit Coordinator</label>
                    <input type="text" class="form-control" id="unit_coordinator" name="unit_coordinator" placeholder="Unit Coordinator">
                  </div>
                  
                  <button type="submit" class="call btn-primary" name="add_unit">Add to the list</button>
                </form>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="call btn-warning" data-dismiss="modal">Close</button>
                </div>
                
            </div>
        </div>

      </div>
      </div>

      <?php  include 'footer.php';  ?>

 </body>  
</html>  

<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action_1.php',
      columns:{
       identifier:[0, "unit_code"],
       editable:[[1, 'unit_name'], [2, 'availability'], [3, 'Campus'],[4, 'unit_coordinator']]
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
