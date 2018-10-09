<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	//declaration
	$age = ["Peter" => 35, "Ben" => 37, "Joe => 43"] ;

	//call Ben
	echo "Ben's age is " . $age["Ben"];

	//Peter
	// echo "The age of Peter is $age[Peter]"; not good practice because php treats Peter as a constant first and then converts it to string if constant does not exist
	// echo "The age of Peter is {$age[Peter]}"; complex statement /working
	 ?>

	 <?php 
	 foreach ($age as $name => $value) {
	 	echo $name . " is aged " . $value . "br>";
	 }

	 $yourself = ["name" => "Brandon", "age" => 19, "prev_occ" => "Student", "gender"=> "M", "status" => "404"];

	 foreach ($yourself as $key => $value) {
	 	if ($key == "age") {
	 		echo $key . ":" . $value . "years old <br>";
	 	} else {
	 		echo $key . ": " . $value . "<br>";
	 	}
	 }

	 //Q can foreach be used for index arrays?

	 $fruits = ["apple", "orange", "grape"];
	 //solution 1
	 foreach ($fruits as $indiv_fruit) {
	 	echo $indiv_fruit . "<br>";
	 }

	 //solution 2
	 foreach ($fruits as $fruit_number => $indiv_fruit) {
	 	echo "Index of " . $indiv_fruit . " is " . $fruit_number . "<br>";
	 }

	  ?>

</body>
</html>