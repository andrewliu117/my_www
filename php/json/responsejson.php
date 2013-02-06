<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'andrew', '');
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("my_db", $con);

$sql="SELECT * FROM user WHERE id = ".$q."";

$result = mysql_query($sql);
while($row = mysql_fetch_array($result)) {
    $arr["FirstName"]=$row["FirstName"];
    $arr["LastName"]=$row["LastName"];
    $arr["Age"]=$row["Age"];
    $arr["Hometown"]=$row["Hometown"];
    $arr["Job"]=$row["Job"];
    $resp[] = $row;
}

echo json_encode($resp);

mysql_close($con);
?>
