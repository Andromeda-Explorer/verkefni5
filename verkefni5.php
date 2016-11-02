<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<p>Hello world!</p>

<?php
$lol = 0;
if (isset($_COOKIE["lol"])) {
    $lol = (int)$_COOKIE["lol"];
}
setcookie("lol", $lol + 1, time() + (60 * 60 * 24 * 30));
if($lol >= 1)
echo "Velkominn aftur";
?>


</body>
</html>