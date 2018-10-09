<!DOCTYPE html>
<html>
<head>
	<title>Heros</title>
</head>
<body>

<?php 

	$team_ironman=["Tony","War Machine","Vision"];
	$team_cap=["Captain America","Bucky","Hawkeye", "Falcon"];
	//multi-dimensional array
	$civil_war=[$team_ironman, $team_cap];
	echo $civil_war[0][0] . "<br>"; //Tony
	echo $civil_war[1][0] . "<br>"; //Captain Ameria
	echo $civil_war[0][2] . "<br>"; // Vision
	echo $civil_war[1][3] . "<br>"; // Falcon
	//read left to right

	$yourself = ["name" => "Jobert",
				"age" => 17,
				"pets" => ["Blacky", "Whitey", "Browney"]

	];
	//Display Whitey

	echo $yourself["pets"][1] . "<br>";

	$yourself ["pets"][3]="mingming"; //adds mingming
	echo $yourself["pets"][3];
 ?>

</body>
</html>