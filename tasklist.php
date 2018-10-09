<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<!-- foreach  -->
<ul>
<?php 

 // $tasklists = ["task" => "wake up at 7.", "status" => true],
	// ["task" => "eat breakfast at 710.", "status" => true],
	// ["task" => "Go to class at 8.", "status" => false]

	// for($i = 0; $i < count($tasklist);$i++)	 {
	// 	echo "<li>" . $tasklist[$i]["task"]. "</li>" ; 
	// }
	

	foreach($tasklist as $task_item) {
		echo "<li>" . $task_item["task"] . "</li>";
	}

 ?>
 </ul>
</body>
</html>