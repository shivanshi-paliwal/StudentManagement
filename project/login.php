<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="stylesheet" href="css/login.css">
 
</head>
<body>
    <div class="title">
        <span>Student Management System</span>
    </div>

   <div class="main">
        <div class="login">
            <form method="post" name="login">
                <fieldset>
                    <legend class="heading">Admin Login</legend>
                    <input type="text" name="user" placeholder="userID" autocomplete="off"/>
                    <input type="password" name="pass" placeholder="Password" autocomplete="off"/>
                    <input type="submit" value="Login" name="login"/>
                    
                    
                </fieldset>
            </form>    
        </div>
      
    </div>

</body>
</html>

<?php
include("init.php");
//session_start();
include 'session.php';
    if (isset($_POST["login"]))
    {
        $username=$_POST["user"];
        $password=$_POST["pass"];
        mysqli_select_db($conn,"project");
        $sql = "SELECT userid FROM admin_login WHERE userid='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        
        if($count==1) {
            $_SESSION['login_user']=$username;
            header("Location: dashboard.php");
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
        
    }
?>


