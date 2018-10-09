<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	function longdate($timestamp) {
		// return date("l F jS Y", $timestamp);
		//D d m Y
		return date("D d m Y", $timestamp);
	}

	//To display Today's date using this functino;
	echo longdate(time());

	//Tues 09 10 18
	// echo 

 ?>

</body>
</html>