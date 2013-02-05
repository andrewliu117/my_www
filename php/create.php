<html>
<body>
<?php
$con = mysql_connect("localhost","andrew","");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
else {
    echo 'connected to localhost';
}

// some code

mysql_close($con);
?>

<?php
$con = mysql_connect("localhost","andrew","");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

// Create database
if (mysql_query("CREATE DATABASE my_db",$con))
{
    echo "Database created";
}
else
{
    echo "Error creating database: " . mysql_error();
}

// Create table in my_db database
mysql_select_db("my_db", $con);
$sql = "CREATE TABLE Persons 
(
    FirstName varchar(15),
    LastName varchar(15),
    Age int
)";
mysql_query($sql,$con);

mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Peter', 'Griffin', '35')");

mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Glenn', 'Quagmire', '33')");

mysql_close($con);
?>
</body>
</html>
