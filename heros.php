<!DOCTYPE html>
<html>
<head>
	<title>Heros</title>
</head>
<body>

<?php 

	$team_iron = ["Tony","War Machine","Vision"];
	$team_cap = ["Captain America","Bucky","Hawkeye", "Falcon"];
	//multi-dimensional array
	$civil_war = [$team_iron, $team_cap];
	echo $civil_war[0][0] . "<br>"; //Tony
	echo $civil_war[1][0] . "<br>"; //Capt Am
	echo $civil_war[0][2] . "<br>"; //Vision
	echo $civil_war[1][3] . "<br>"; //Falcon

 ?>

</body>
</html>