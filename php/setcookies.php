<?php
setcookie("user", $_POST["user_name"], time() + 36000);
?>
<html>
<meta http-equiv="refresh" content="5;url=getcookies.php">
<body>
<?php
echo "<p>haha</p>";
echo "load getcookies.php in 3 Secs";
?>
</body>
</html>
