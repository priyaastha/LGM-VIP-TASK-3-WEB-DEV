<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/form.css">
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
<body>
        
    <div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Results Section</span>
        <a href="logout.php" style="color: black; text-decoration:none;"><span class="fa fa-sign-out"></span> <b>LOG OUT</b></a>
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
                    <a href="add_classes.php"><b>ADD CLASSES</b></a>
                    <a href="manage_classes.php"><b>MANAGE CLASSES</b></a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn"><b>STUDENTS &nbsp</b>
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php"><b>ADD STUDENTS</b></a>
                    <a href="manage_students.php"><b>MANAGE STUDENTS</b></a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn"><b>RESULTS &nbsp</b>
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_results.php"><b>ADD RESULTS</b></a>
                    <a href="manage_results.php"><b>MANAGE RESULTS</b></a>
                </div>
            </li>
        </ul>
    </div>
    <br><br><br>
    <div class="main">
        <br><br>
        <form action="" method="post">
            <fieldset>
                <legend>Delete Result</legend>
                <?php
                    include('init.php');
                    include('session.php');
                    
                    $class_result=mysqli_query($conn,"SELECT `name` FROM `class`");
                        echo '<select name="class_name" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">';
                        echo '<option selected disabled>Select Class</option>';
                    while($row = mysqli_fetch_array($class_result)){
                        $display=$row['name'];
                        echo '<option value="'.$display.'">'.$display.'</option>';
                    }
                    echo'</select>'
                ?>
                <input type="text" name="rno" placeholder="Roll No" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
                <input type="submit" value="Delete" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
            </fieldset>
        </form>
        <br><br>

        <form action="" method="post">
            <fieldset>
                <legend>Update Result</legend>
                
                <?php
                    $class_result=mysqli_query($conn,"SELECT `name` FROM `class`");
                        echo '<select name="class" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">';
                        echo '<option selected disabled>Select Class</option>';
                    while($row = mysqli_fetch_array($class_result)){
                        $display=$row['name'];
                        echo '<option value="'.$display.'">'.$display.'</option>';
                    }
                    echo'</select>'
                ?>
                
                <input type="text" name="rn" placeholder="Roll No" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
                <input type="text" name="p1" id="" placeholder="Paper 1 - Marks" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
                <input type="text" name="p2" id="" placeholder="Paper 2 - Marks" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
                <input type="text" name="p3" id="" placeholder="Paper 3 - Marks" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
                <input type="text" name="p4" id="" placeholder="Paper 4 - Marks" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
                <input type="text" name="p5" id="" placeholder="Paper 5 - Marks" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
                <input type="submit" value="Update" style="background-color: #aecf18d0;color: black;border: none;transition-duration: 0.4s;cursor: pointer;font-size: 16px;">
            </fieldset>
        </form>
    </div>

 
    
</body>
</html>

<?php
    if(isset($_POST['class_name'],$_POST['rno'])) {
        $class_name=$_POST['class_name'];
        $rno=$_POST['rno'];
        echo $class_name;
        echo $rno;
        $delete_sql=mysqli_query($conn,"DELETE from `result` where `rno`='$rno' and `class`='$class_name'");
        if(!$delete_sql){
            echo '<script language="javascript">';
            echo 'alert("Not available")';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted")';
            echo '</script>';
        }
    }

    if(isset($_POST['rn'],$_POST['p1'],$_POST['p2'],$_POST['p3'],$_POST['p4'],$_POST['p5'],$_POST['class'])) {
        $rno=$_POST['rn'];
        $class_name=$_POST['class'];
        $p1=(int)$_POST['p1'];
        $p2=(int)$_POST['p2'];
        $p3=(int)$_POST['p3'];
        $p4=(int)$_POST['p4'];
        $p5=(int)$_POST['p5'];

        $marks=$p1+$p2+$p3+$p4+$p5;
        $percentage=$marks/5;
        

        $sql="UPDATE `result` SET `p1`='$p1',`p2`='$p2',`p3`='$p3',`p4`='$p4',`p5`='$p5',`marks`='$marks',`percentage`='$percentage' WHERE `rno`='$rno' and `class`='$class_name'";
        $update_sql=mysqli_query($conn,$sql);

        if(!$update_sql){
            echo '<script language="javascript">';
            echo 'alert("Invalid Details")';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Updated")';
            echo '</script>';
        }
    }
?>