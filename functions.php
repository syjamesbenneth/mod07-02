<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
</head>
<body>

<!-- Prints 2 rows by 3colums table */ -->
<?php 
function printTable($row, $col){
	echo "<table border=1>";

	for ($i = 0; $i < 2; $i++) {
		echo "<tr>";
		for ($j=0; $j < 3; $j++) {
			echo "<td> Content </td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
	//Calling our function
	printTable(3,4);
	$x = 5;
	$y = 5;
	printTable($x,$y);
 ?>

<!-- Addition -->
 <?php 

 function add($a, $b) {
 	$sum = $a + $b;
 	return $sum;
 }

 $number1 = 20;
 $number2 = 12;
 $total = add($number1, $number2);

 echo "Total is " . $total;

  ?>


</body>
</html>