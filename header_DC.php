<header>
    <nav class="navbar navbar-expand-lg fixed-top  navbar-dark bg-dark">
      <a class="navbar-brand" href="Home1.php">UDW</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">

            <a class="nav-item nav-link active" href="Home1.php">Home</a>
            <a class="nav-item nav-link active" href="Unit_Details_DC.php">Unit Details</a>
            <a class="nav-item nav-link active" href="Unit_Management_page.php">Unit Management</a>
            <a class="nav-item nav-link active" href="Enrolled_Student_page.php">Enrolled Student List</a>
            <a class="nav-item nav-link active" href="Staff_account_page.php">User Page</a>

            <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Master List
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="Master page for academic staff.php">Academic Staff</a>
              <a class="dropdown-item" href="Master page for unit details.php">Unit details/mangement</a>
            </div>
          </li>

        </ul>
        <a class="nav-item nav-link active" href="logout.php"><button class="btn">Logout</button></a>
        <a class="nav-item nav-link active"><button class="session_user"><?php echo $_SESSION['username2']; ?></button></a>
      </div>
    </nav>
  </header>