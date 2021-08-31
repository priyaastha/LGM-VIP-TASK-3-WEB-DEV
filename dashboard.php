<?php
    include("init.php");
    
    $no_of_classes=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `class`"));
    $no_of_students=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `students`"));
    $no_of_result=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `result`"));
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="normalize.css">
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
        <span class="heading">Dashboard</span>
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

    <div class="main">
        <?php
            echo '<p>AVAILABLE CLASSES:'.$no_of_classes[0].'</p>';
            echo '<p>REGISTERED STUDENTS:'.$no_of_students[0].'</p>';
            echo '<p>RESULTS GENERATED:'.$no_of_result[0].'</p>';
        ?>
    </div>

    
</body>
</html>

<?php
   include('session.php');
?>