<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSRMS</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body style="margin: 0;background-color: #ddf0a9;height: 500px;background-position: center;background-repeat: no-repeat;background-size: cover;color: #1a2513;">
    <div class="title">
        <span class="heading">Student Result Management System</span>
        <hr style="height: 9px;width:50%;color:black;background-color:black;text-align:left;margin-left:22">
    </div>

    <div class="main">
        <div class="login">
            <form action="" method="post" name="login">
                <fieldset>
                    <legend class="heading" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;"><b>ADMIN LOGIN</b></legend>
                    <input type="text" name="userid" placeholder="Username" autocomplete="off" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
                    <input type="password" name="password" placeholder="Password" autocomplete="off" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
                    <input type="submit" value="Login" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
                </fieldset>
            </form>    
        </div>
        <div class="search">
            <form action="./student.php" method="get">
                <fieldset>
                    <legend class="heading"><b>STUDENT'S SECTION</b></legend>

                    <?php
                        include('init.php');

                        $class_result=mysqli_query($conn,"SELECT `name` FROM `class`");
                            echo '<select name="class" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">';
                            echo '<option selected disabled>--Select Class--</option>';
                        while($row = mysqli_fetch_array($class_result)){
                            $display=$row['name'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                        echo'</select>'
                    ?>

                    <input type="text" name="rn" placeholder="Roll Number" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
                    <input type="submit" value="Get Result" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
                </fieldset>
            </form>
        </div>
    </div>

</body>
</html>

<?php
    include("init.php");
    session_start();

    if (isset($_POST["userid"],$_POST["password"]))
    {
        $username=$_POST["userid"];
        $password=$_POST["password"];
        $password = md5($_POST["password"]);
        $sql = "SELECT userid FROM admin_login WHERE userid='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        
        if($count==1) {
            $_SESSION['login_user']=$username;
            header("Location: dashboard.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
        
    }
?>

