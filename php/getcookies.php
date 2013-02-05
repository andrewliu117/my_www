<html>
<body>
<?php
echo "haha"
?>

<?php
if (isset($_COOKIE["user"]))
    echo "welcome " . $_COOKIE["user"] . "!<br />";
else
    echo "Welcome guest!<br />";
?>

</body>
</html>
