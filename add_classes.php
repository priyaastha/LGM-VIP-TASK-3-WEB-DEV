<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/form.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Result</title>

    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            margin: 7% 20% 0 20%;
        }
        body {
    margin: 0;
    font-family: "Roboto", sans-serif;
    background-color: #e2facf;
    color: black;
    background-repeat: no-repeat;
}

.title {
    display: grid;
    grid-template-rows: 50px;
    grid-template-columns: 150px 1fr 150px;
    align-items: center;
    padding: 20px 0;
    text-align: center;
}
.logo {
    width: 150px;
    height: auto;
}

.heading {
    font-size: 60px;
    background: -webkit-linear-gradient(#d3ff6c,#2d3602);
    -webkit-background-clip: text;
    background-clip: text;
  -webkit-text-fill-color: transparent;
}

.main {
    display: grid;
    align-items: center;
    font-size: 20px;
    /*padding-top: 80px;*/
    background-color: rgb(242, 245, 196);
}

.main p {
    margin: 0;
    font-size: 25px;
    font-family: monospace;
    letter-spacing: 3px;
    line-height: 3;
}

ul {
    list-style-type: none;
    margin: 20px 0 0 0;
    padding: 0;
    display: flex;
    overflow: hidden;
    justify-content: space-evenly;
    border-radius: 20px;
}

li a,
.dropbtn {
    display: inline-block;
    text-decoration: none;
    color: rgb(80, 121, 14);
    height: 40px;
    display: flex;
    align-items: center;
    padding: 10px 40px;
    border-radius: 20px;
}

li a:hover,
.dropdown:hover {
    background-color: #d7fa3be1;
    border-radius: 20px;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #cdf89b;
    border-radius: 20px;
}

.dropdown-content a {
    color: rgb(21, 22, 18);
    text-decoration: none;
    display: flex;
    align-items: center;
}

.dropdown:hover .dropdown-content {
    display: block;
}
    </style>

</head>
<body style="margin: 0;background-color: #ddf0a9;height: 500px;background-position: center;background-repeat: no-repeat;background-size: cover;color: #1a2513;">
        
    <div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Class Section</span>
        <a href="logout.php" style="color: black; text-decoration:none;"><span class="fa fa-sign-out"></span><b> LOGOUT</b></a>
    </div>
    <hr style="height: 5px;width:990px;color:black;background-color:black">
    <div class="nav">
        <ul>
            <li>
                <a href="dashboard.php"><b>DASHBOARD</b></a>
            </li>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn"><b>CLASSES &nbsp</b>
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
                    <a href="add_classes.php">ADD CLASS</a>
                    <a href="manage_classes.php">MANAGE CLASS</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn"><b>STUDENTS &nbsp</b>
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php">ADD STUDENTS</a>
                    <a href="manage_students.php">MANAGE STUDENTS</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn"><b>RESULTS &nbsp</b>
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_results.php">ADD RESULTS</a>
                    <a href="manage_results.php">MANAGE RESULTS</a>
                </div>
            </li>
        </ul>
    </div>
    <br><br><br><br>
    <div class="main" style="margin: 0;background-color: #ddf0a9;height: 500px;background-position: center;background-repeat: no-repeat;background-size: cover;color: #1a1513;">
        <br><br><br>
        <form action="" method="post">
            <fieldset>
                <legend><b>ADD CLASS</b></legend>
                <input type="text" name="class_name" placeholder="CLASS NAME" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
                <input type="text" name="class_id" placeholder="CLASS ID" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
                <input type="submit" value="SUBMIT" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
            </fieldset>        
        </form>
        <br><br><br>
    </div>

    <div class="footer">

    </div>
</body>
</html>

<?php 
	include('init.php');
    include('session.php');

    if (isset($_POST['class_name'],$_POST['class_id'])) {
        $name=$_POST["class_name"];
        $id=$_POST["class_id"];

       
        if (empty($name) or empty($id) or preg_match("/[a-z]/i",$id)) {
            if(empty($name))
                echo '<p class="error">Please enter class</p>';
            if(empty($id))
                echo '<p class="error">Please enter class id</p>';
            if(preg_match("/[a-z]/i",$id))
                echo '<p class="error">Please enter valid class id</p>';
            exit();
        }

        $sql = "INSERT INTO `class` (`name`, `id`) VALUES ('$name', '$id')";
        $result=mysqli_query($conn,$sql);
        
        if (!$result) {
            echo '<script language="javascript">';
            echo 'alert("Invalid class name or class id")';
            echo '</script>';
        } else{
            echo '<script language="javascript">';
            echo 'alert("Success!!")';
            echo '</script>';
        }
    }

?>