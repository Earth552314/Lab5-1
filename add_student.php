<?php
require("connect_db.php");
echo "<center>";
echo "<form action=save_add_students2.php method=post>";
echo "<table border=1 width=40%>";
echo "<tr><td>students2 Code:</td><td><input type=text name=students2_code /></td></tr>";
echo "<tr><td>students2 Name:</td><td><input type=text name=students2_name /></td></tr>";
echo "<tr><td>Credit:</td><td><input type=text name=credit /></td></tr>";
echo "<tr><td colspan=2><center><input type=submit value=Submit /></center></td></tr>";
echo "</table>";
echo "</form>";
echo "</center>";
?>