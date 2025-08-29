<?php
require("connect_db.php");
$course_code = $_POST["course_code"];
$course_name = $_POST["course_name"];
$gender = $_POST["gender"];
$sql ="INSERT INTO course(course_code, course_name, gender) VALUES('$course_code','$course_name', $gender)";
mysqli_query($conn, $sql);
header("location: course_list.php");
exit(0);
?>