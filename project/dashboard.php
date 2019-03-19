<?php
    include("init.php");
    include 'session.php';
    mysqli_select_db($conn,"project");
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
    <link rel="stylesheet" href="normalize.css">
    <title>Dashboard</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            margin: 7% 20% 0 20%;
        }
    </style>
</head>
<body>

    <div class="title">
 
        <a href="dashboard.php"></a>
            <span class="heading">Dashboard</span>
    </div>

        <div> <a href="logout.php" style="float: right; padding-right: 10px; color: white"><span>Logout</span></a>
    </div>
       

    <div class="nav">
        <ul>
            <li class="dropdown">
                <a href="" class="dropbtn">Classes &nbsp
                    
                </a>
                <div class="dropdown-content" id="1">
                    <a href="add_classes.php">Add Class</a>
                    <a href="manage_classes.php">Manage Class</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Students &nbsp
                    
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php">Add Students</a>
                    <a href="manage_students.php">Manage Students</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Results &nbsp
                   
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_results.php">Add Results</a>
                    <a href="manage_results.php">Manage Results</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="main">
        <?php
          echo "<p>Number of classes: '$no_of_classes[0]'</p>";
            echo "<p>Number of students:'$no_of_students[0]'</p>";
            echo "<p>Number of results:'$no_of_result[0]' </p>";
        ?>
    </div>

    <div class="footer">
 
    </div>
</body>
</html>

