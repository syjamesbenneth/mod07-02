<!DOCTYPE html>
<html>
<head>
	<title>Shapes</title>
</head>
<body>

<?php 
	//Square

	 
	function getSquarePerimeter($side) {
		$perimeter = 4 * side;
		return $perimeter;

	}

	//Square area
	function getSquaredArea($side){
		$area = $side * $side;
		return $area;
	}

	//Triangle
	function getTrianglePerimeter($a, $b, $c) {
		$perimeter = $a + $b + $c;
		return $perimeter;
	}

	function getTriangleArea($base, $height) {
		$area = ($base * $height) / 2;
		return $area;
	}

	//Rectangle
	function getRectanglePerimeter($length, $width) {
		$perimeter = 2 * $length + (2 * $width);
		return $perimeter;
	}

	function getRectangleArea($length, $width) {
		$$area = 2 * $length * $width;
		return $area;
	}

	//Circle
	function getCircumference($radius) {
		$circ = 2 * 3.1415 * $radius;
		return $circ;
	}

	function getCircArea($radius) {
		$area = 3.1415 * $radius * radius;
		return $area;
	}

	//Test Case
	echo "Perimeter: " . getSquaredPerimeter(20) . "units, Area: " . getSquaredArea(20) . " sq.units<br>" ;

	echo "Perimeter: " . getSquaredPerimeter(58) . "units, Area: " . getSquaredArea(58) . "sq.units<br>" ;

	echo "Perimeter: " . getTrianglePerimeter(11,12,13) . "units, Area: " . getTriangleArea(14,16) . "sq.units<br>" ;
	echo "Perimeter: " . getRectanglePerimeter(25,15) . "units, Area: " . getRectangleArea(25,15) . "sq.units<br>" ;

	echo "Perimeter: " . getCircumference(50) . "units, Area: " . getCircArea(50) . "sq.units<br>" ;

	echo "Perimeter: " . getCircumference(14) . "units, Area: " . getCircArea(14) . "sq.units<br>" ;

 ?>

</body>
</html>