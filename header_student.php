<header>
    <nav class="navbar navbar-expand-lg fixed-top  navbar-dark bg-dark">
      <a class="navbar-brand" href="Home.php">UDW</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">

            <a class="nav-item nav-link active" href="Home.php">Home</a>
            <a class="nav-item nav-link active" href="Unit_Enrolment.php">Enrolment</a>
            <a class="nav-item nav-link active" href="Unit_Details.php">Unit Details</a>
            <a class="nav-item nav-link active" href="Individual_Timetable.php">Timetable</a>
            <a class="nav-item nav-link active" href="Tutorial_allocation.php">Tutorial Allocation</a>
            <a class="nav-item nav-link active" href="User_account_page.php">User Page</a>
        </ul>
        <a class="nav-item nav-link active" href="logout.php"><button class="btn">Logout</button></a>
        <a class="nav-item nav-link active"><button class="session_user"><?php echo $_SESSION['username1']; ?></button></a>
        
      </div>
    </nav>
  </header>