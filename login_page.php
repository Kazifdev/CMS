<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="UDW.php">UDW</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="registration_page.php"><button class="UDW_btn">Registration</button> </a>
            <a class="nav-item nav-link active" href="login_page.php"><button class="UDW_btn">Log In</button> </a>
          </div>
        </div>
      </nav>


      
    <section class="landing_page">
        <div class="form-box">
            <h2 id="sign_in">Sign In</h2>
            <div class="button_box">
                <div id="btn"></div>
                <button type="button" class="toggle_btn" onclick="login()">Student</button>
                <button type="button" class="toggle_btn" onclick="register()">Staff</button>
            </div>
            <!-- Student Login Form-->
            <form id="login" action="login_engine.php" method="POST" class="input_group">
                <input type="text" class="input_field" placeholder="Try this Username: user" name="username1" value = "user" required>
                <input type="password" class="input_field" placeholder="Pass -Us61216631@ " name="password1" value = "Us61216631@" required>
                <button type="submit" class="submit_btn" name="std_login">Log In</button>
                <a class="forget_password"  href="forget_password.php">Forget password</a>
            </form>
            <!-- Staff Login Form-->
            <form id="register" action="login_engine.php" method="POST" class="input_group">
                <input type="text" class="input_field" placeholder="User Name" name="username2" value = "Rob" required>
                <input type="password" class="input_field" placeholder="Password" name="password2" value = "Ro61216631@" required>
                <button type="submit" class="submit_btn" name="stf_login">Log In</button>
                <a class="forget_password"  href="forget_password.php">Forget password</a>
            </form>
        </div>

        
    </section>
    
    <script>
        let x = document.getElementById("login");
        let y = document.getElementById("register");
        let z = document.getElementById("btn");


        function register() {
            x.style.left ="-400px";
            y.style.left ="50px";
            z.style.left ="110px";
        }
        function login() {
            x.style.left ="50px";
            y.style.left ="450px";
            z.style.left ="0";
        }

    </script>
</body>
</html>