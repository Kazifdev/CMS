<?php

include 'db_conn.php';
session_start();

/* Student login code */
if (isset($_POST['std_login'])) {
    $username1 = $_POST['username1'];
    $password1 = $_POST['password1'];
    $salt = "kazif_assignment_2";
    $password1= crypt($password1, $salt);

    $sql = "SELECT * FROM Students WHERE username='$username1' && password = '$password1'";

    $result = mysqli_query($mysqli, $sql);

    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $_SESSION['username1'] = $username1;
        
        header('location:Home.php');
    } else {
        echo "<script>alert('Login failed, Try Again!'); location.href ='login_page.php';</script>";
        //header('location:login_page.php');
    }
}





/* Staff login code */

if (isset($_POST['stf_login'])) {
    $username2 = $_POST['username2'];
    $password2 = $_POST['password2'];
    $salt = "kazif_assignment_2";
    $password2= crypt($password2, $salt);

    $sql = "SELECT * FROM Staffs WHERE username='$username2' && password = '$password2'";

    $result = mysqli_query($mysqli, $sql);

    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $_SESSION['username2'] = $username2;
        $row = mysqli_fetch_array($result);
        if ($row) {
            if ($row['access'] == 1) {
                $_SESSION['registered'] = TRUE;
                header("location: Home1.php");
            }
            if ($row['access'] == 2) {
                $_SESSION['registered'] = TRUE;
                header("location: Home2.php");
            }
            if ($row['access'] == 0) {
                $_SESSION['registered'] = TRUE;
                header("location: Home3.php");
            }
        }
    }
        else {
            
            echo "<script>alert('Login failed, Try Again!'); location.href ='login_page.php';</script>";
                
            }
}

?>
