<?php
	
	//functions.php
	
	//********************
	//****** SIGNUP ******
	//********************
	//$name = "Marliis";
	//var_dump($GLOBALS);
	
	$database = "if16_Marliis";
	
	function signup ($email, $password) {
		
		$mysqli = new mysqli($GLOBALS["serverHost"],$GLOBALS["serverUsername"],$GLOBALS["serverPassword"],$GLOBALS["database"]);

		$stmt = $mysqli->prepare("INSERT INTO user_sample (email, password) VALUES (?, ?)");
		echo $mysqli->error;

		$stmt->bind_param("ss", $email, $password);
		
		if ($stmt->execute()) {
			echo "salvestamine õnnestus";
		} else {
			echo "ERROR ".$stmt->error;
		}
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*function sum ($x, $y) {
		
		return $x + $y;
		
	}
	
	function hello ($firstname, $lastname) {
		
		return "Tere tulemast ".$firstname." ".$lastname."!";
		
	}
	
	echo sum(5476567567,234234234);
	echo "<br>";
	$answer = sum(10,15);
	echo $answer;
	echo "<br>";
	echo hello ("Marliis", "Odamus");
	*/


?>