
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	$country_city = ["Japan"=>"Tokyo", "Mexico"=>"Mexico City", "USA"=>"New York", "India"=>"Mumbai", "Korea"=>"Seoul", "China"=>"Shanghai", "Nigera"=>"Lagos"];

		//Add Argentina and Buenos Aires
		$country_city["Argentina"] = "Buenos Aires";

		//modify China's city to Beijing

		$country_city["China"] = "Beijing";

		//display all country city pairs
		foreach ($country_city as $country => $city) {
			echo $city . " is in " . $country . "<br>";
		}

		//Remove Korea/Seoul
		// Solution 1
		unset($country_city["Korea"]);

		//Solution 2
		// array_diff($country_city, array("Korea"=>"Seoul"));


	// array_push($country_city, {"Argentina" => "Buenos Aires"});

	// echo $country_city;
 ?>

</body>
</html>