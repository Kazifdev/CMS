<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDW |Std-Unit Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="pages.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

<?php session_start();
    ?>

<?php 
    include 'header_student.php';
  
  ?>

    
    <section class="unit-details">
      <div class="container">
        <div class="unit-into-text">
        <h4>Unit Details</h4>
        <h1>Data Structures and algorithms 105</h1>

        </div>
        
    
        <div class="summary-table">
          <h4>Summary of the Unit</h4>
          <table style="width:50%">
            <tr>
              <th>Unit name</th>
              <th>Data Structures and Algorithms</th>
            </tr>
            <tr>
              <th>Unit code</th>
              <td>105</td>
            </tr>
            <tr>
              <th>Credit</th>
              <td>10 points</td>
            </tr>
            <tr>
              <th>Faculty</th>
              <td>School of Engineering</td>
            </tr>
            <tr>
              <th>Coordinator</th>
              <td>Dr. David Morlay</td>
            </tr>
            <tr>
              <th>Lecturer</th>
              <td>Jisan Ahmed</td>
            </tr>
          </table>
        </div>
    
        <div class="brief-des">
          <h4>Brief description of the unit</h4>
          <p>This unit extends the first year treatment in SIT107 of standard data structures and algorithms for solving computational problems. Topics include: data structures (such as balanced trees and hash tables) for collections, (binary heaps for) priority queues, sorting algorithms (e.g. heapsort, mergesort and quicksort), graphs and graph algorithms (e.g. for searching, topological sorting, critical path analysis, shortest paths, minimum spanning trees, network flow), pattern finding (for substrings and regular expressions), algorithmic problem solving and algorithm design techniques (e.g. greed, divide and conquer, dynamic programming, backtracking).
          </p>
        </div>
    
        <div class="availability-table">
          <h4>Availability</h4>
          <table style="width: 70%">
            <tr>
              <th>Campus</th>
              <th>Study period</th>
              <th>Attendance Options</th>
              <th>Available to</th>
            </tr>
            <tr>
              <td>Pandora</td>
              <td>Semester 1 & 2 Spring & Winter School</td>
              <td>On Campus</td>
              <td>International & Domestic Students</td>
            </tr>
            <tr>
              <td>Rivendell</td>
              <td>Semester 1 & 2 Spring & Winter School</td>
              <td>On Campus</td>
              <td>International & Domestic Students</td>
            </tr>
            <tr>
              <td>Neverland</td>
              <td>Semester 1 & 2 Spring & Winter School</td>
              <td>On Campus</td>
              <td>International & Domestic Students</td>
            </tr>
          </table>
        </div>
    
        <div class="link-to-enrolment">
          <a href="Unit_Enrolment.php"><button class="enrol-btn">Enrol Now</button> </a>
    
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