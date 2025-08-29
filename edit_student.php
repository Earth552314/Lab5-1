<?php
require("connect_db.php");
$gender_code = $_GET["student_code"];
$sql = "SELECT * FROM students WHERE students_code='$gender_code'";
$result = mysqli_query($conn, $sql);
$gender = mysqli_fetch_assoc($result);
echo "<center>";
echo "<form action=save_gender.php method=post>";
echo "<table border=1 width=40%>";
echo "<input type=hidden name=gender_code_edit value=$gender_code />";
echo "<tr><td>course Code:</td><td><input type=text name=gender_code value='".$gender["gender_code"]."'
/></td></tr>";
echo "<tr><td>course Name:</td><td><input type=text name=gender_name value='".$gender["gender_name"]."'
/></td></tr>";
echo "<tr><td>Credit:</td><td><input type=text name=credit value=".$gender["credit"]." /></td></tr>";
echo "<tr><td colspan=2><center><input type=submit value=Submit /></center></td></tr>";
echo "</table>";
echo "</form>";
echo "</center>";
?>