<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	$fruits = ["banana", "mango", "apple", "tomato"];
	//ascending order
	sort($fruits);
	foreach ($fruits as $indiv_fruits) {
		echo $indiv_fruits . "<br>";
	}

	//descending order
	rsort($fruits);
	foreach ($fruits as $indiv_fruits) {
		echo $indiv_fruits . "<br>";

		//asort ascending according to the value
		//ksort asc order according to the key
		//arsort desc according to the value
		//krsort //desc order according to the key
	}	

 ?>
</body>
</html>