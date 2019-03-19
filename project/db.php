<?php
include './init.php';
$sql = "CREATE DATABASE project";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_select_db($conn,"project");
?>
<?php
$sql = "CREATE TABLE `admin_login` (
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
);";

if (mysqli_query($conn, $sql)) {
    echo "Table admin_login created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
?>
<?php
$sql1 = "INSERT INTO `admin_login` (`userid`, `password`) VALUES
('admin', '123');";

if (mysqli_query($conn, $sql1)) {
    echo "data inserted";
} else {
    echo "Error in inserting: " . mysqli_error($conn);
}
?>
<?php
$sql2 = "CREATE TABLE `class` (
  `name` varchar(30) NOT NULL,
  `id` int(3) NOT NULL
);";

if (mysqli_query($conn, $sql2)) {
    echo "table created";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
?>
<?php
$sql3 = "CREATE TABLE `result` (
  `name` varchar(30) NOT NULL,
  `rno` int(3) NOT NULL,
  `class` varchar(30) NOT NULL,
  `p1` int(3) NOT NULL,
  `p2` int(3) NOT NULL,
  `p3` int(3) NOT NULL,
  `p4` int(3) NOT NULL,
  `p5` int(3) NOT NULL,
  `marks` int(3) NOT NULL,
  `percentage` float NOT NULL
) ;";

if (mysqli_query($conn, $sql3)) {
    echo "table created";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
?>
<?php
$sql4 = "CREATE TABLE `students` (
  `name` varchar(30) NOT NULL,
  `rno` int(3) NOT NULL,
  `class_name` varchar(30) NOT NULL
);";

if (mysqli_query($conn, $sql4)) {
    echo "table created";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
?>