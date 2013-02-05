<html >
<body lang="uft8">

<?php
echo "Hello World";
?>

<h2> 并置运算符 (.) 用于把两个字符串值连接起来。</h2>

<?php
$txt1="Hello World";
$txt2="1234";
echo $txt1 . " " . $txt2;
?>

<h2> a day test </h2>

<?php
$d=date("D");
if ($d=="Fri")
  {
  echo "Hello!<br />"; 
  echo "Have a nice weekend!";
  echo "See you on Monday!";
  }

echo "today is " . $d
?>

<h2> switch string </h2>

<?php
$x="b2";
switch ($x)
{
case "a1":
  echo "Number a1";
  break;
case "b2":
  echo "Number b2";
  break;
case "c3":
  echo "Number c3";
  break;
default:
  echo "No number between 1 and 3";
}
?>

<h2> Array </h2>
<?php

$names[0] = "Peter";
$names[1] = "Quagmire";
$names[2] = "Joe";
$names["fuck"] = "fuck up";

echo $names[1] . " and " . $names[2] . " are ". $names[0] . "'s neighbors " . $names["fuck"];
?>

<h2> Function </h2>
<html>
<body>

<?php
function writeMyName1()
  {
  echo "<p>David Yang</p>";
  }

writeMyName1();
?>

<p>

<?php
function writeMyName($fname)
  {
  echo $fname . " Yang.<br />";
  }

echo "My name is ";
writeMyName("David");

echo "My name is ";
writeMyName("Mike");

echo "My name is ";
writeMyName("John");
?>
</p>


<?php
function add($x,$y)
  {
  $total = $x + $y;
  return $total;
  }

echo "1 + 16 = " . add(1,16);
?>

<h2> form </h2>

<form action="welcome.php" method="post">
Name: <input type="text" name="name" />
Age: <input type="text" name="age" />
<input type="submit" />
</form>

</body>
</html>
