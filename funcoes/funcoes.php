<?php

	$conn = new PDO("mysql:dbname=cadastro;host=localhost","root","");
	$stmt = $conn->prepare("Select * from projeto order by nome_proj");
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($results as $row){
		foreach ($row as $key => $value){
			echo "<strong>".$key.":</strong>".$value."<br/>";
			
		}
		echo "========================<br>";
		}
	
 ?>