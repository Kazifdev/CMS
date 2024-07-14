<header>
    <nav class="navbar navbar-expand-lg fixed-top  navbar-dark bg-dark">
      <a class="navbar-brand" href="Home2.php">UDW</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">

            <a class="nav-item nav-link active" href="Home2.php">Home</a>
            <a class="nav-item nav-link active" href="Unit_Management_page_UC.php">Unit Management</a>
            <a class="nav-item nav-link active" href="Unit_Details_UC.php">Unit Details</a>
            <a class="nav-item nav-link active" href="Enrolled_Student_page_UC.php">Enrolled Student list</a>
            <a class="nav-item nav-link active" href="UC_account_page.php">User Page</a>
        </ul>
        <a class="nav-item nav-link active" href="logout.php"><button class="btn">Logout</button></a>
        <a class="nav-item nav-link active"><button class="session_user"><?php echo $_SESSION['username2']; ?></button></a>
        
      </div>
    </nav>
  </header>