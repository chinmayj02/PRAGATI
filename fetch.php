<?php
$connection = mysql_connect('localhost', 'root', '12345');
$db = mysql_select_db('producer', $con);
$x = $_POST['Id'];
$safex = mysql_real_escape_string($x);
$query = mysql_query("select * from producer where Id=$safex", $con);

$result = "";

$result .= "<div id='display'>";
$result .="<table border=\"1\">";
$result .="<tr><th>Fname</th><th>lname</th></tr>";
while($row = mysql_fetch_assoc($query)){
$result .= "<tr><td> {$row['fname']}</td>"."<td> {$row['lname']}</td></tr></p>";
}
$result .="</table>";

$result .= "</div>";
echo $result;

?>