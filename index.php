<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
<?php 
	// $araw = "Linggo";
	// if ($araw == "Lunes") {
	// 	echo "$araw nang tayo'y magkakilala";
	// }
	// elseif ($araw == "Martes") {
	// 	echo "$araw nang tayo' muling magkita";
	// }
	// elseif ($araw == "Miyerkules") {
	// 	echo "$araw nagtapat ka ng iyong pag-ibig";
	// }
	// elseif ($araw == "Huwebes") {
	// 	echo "$araw ay puno ng pagmamahalan";
	// }
	// elseif ($araw == "Sabado") {
	// 	echo "$araw tayo'y biglang nagkatampuhan";
	// }
	// elseif ($araw == "Linggo") {
	// 	echo "$araw giliw ako'y iyong iniwan";
	// }
	// else  {
	// 	echo "Maling araw";
	// }
	
	$araw = array("Lunes", "Martes", "Miyerkules", "Huwebes", "Biyernes", "Sabado", "Linggo");

	for($i = 0; $i < count($araw); $i++) {
		if ($araw[$i] == "Lunes"){
			//sizeOf() vs count()
			if ($araw[$i] == "Lunes") {
				echo "$araw[$i] nang tayo'y magkakilala <br>";
			}
			elseif ($araw[$i] == "Martes") {
				echo "$araw[$i] nang tayo'y muling magkita <br>";
			}
			elseif ($araw[$i] == "Miyerkules") {
				echo "$araw[$i] nagtapat ka ng iyong pag-ibig <br>";
			}
			elseif ($araw[$i] == "Huwebes") {
				echo "$araw[$i] ay inibig din kita <br>";
			}
			elseif ($araw[$i] == "Biyernes") {
				echo "$araw[$i]ay puno ng pagmamahalan <br>";
			}
			elseif ($araw[$i] == "Sabado") {
				echo "$araw[$i] tayo'y biglang nagkatampuhan <br>";
			}
			elseif ($araw[$i] == "Linggo") {
				echo "$araw[$i] giliw ako'y iyong iniwan <br>";
			}
			else
				echo "Wala pong ganung araw.<br>";
		}
	}


	



 ?>
</body>
</html>