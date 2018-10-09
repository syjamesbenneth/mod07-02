<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

$a = "1000";
$b ="+1000";

//if ($a==$b) echo "A is True"; not good practice needs early curly braces
//if ($a===$b) echo "B is true";

if ($a==$b) {
	echo "A is True";
}
if ($a===$b) {
	echo "B is true";
}

 ?>

</body>
</html>