<html>
<body>

<?php
$con = mysql_connect("localhost","andrew","");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}


mysql_select_db("my_db", $con);
$sql="INSERT INTO Persons(FirstName, LastName, Age) VALUES('$_POST[firstname]', '$_POST[lastname]','$_POST[age]')";
mysql_query($sql,$con);

echo "<p> updated </p>";

$result = mysql_query("SELECT * FROM Persons");

while($row = mysql_fetch_array($result))
{
    echo $row['FirstName'] . " " . $row['LastName'] . " " . $row['Age'];
    echo "<br />";
}


mysql_close($con);
?>
</body>
</html>
