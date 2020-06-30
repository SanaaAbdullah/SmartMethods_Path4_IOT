<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Robot_Controller_style.css">
	<title>Controller Motion</title>
</head>
<body>


	<div class="container2">
		<?php
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "robot_database";
			
			//Create connection
			$conn = mysqli_connect($servername, $username, $password,$db);

			//Check connection
			if (!$conn)
			{
	   			die("Connection failed: " . mysqli_connect_error());
			}

			

			if(isset($_POST["F"]))
			{
				$sql = "INSERT INTO robotmotion (motion) VALUES ('F')";			
				mysqli_query($conn, $sql);

				echo '<div style="font-size:130px;color:#c034eb;font-weight:bold;">F';
			}

			if(isset($_POST["B"]))
			{
				$sql = "INSERT INTO robotmotion (motion) VALUES ('B')";
				mysqli_query($conn, $sql);

				echo '<div style="font-size:130px;color:#c034eb;font-weight:bold;">B';
			}

			if(isset($_POST["R"]))
			{
				$sql = "INSERT INTO robotmotion (motion) VALUES ('R')";
				mysqli_query($conn, $sql);
				
				echo '<div style="font-size:130px;color:#c034eb;font-weight:bold;">R';
			}

			if(isset($_POST["L"]))
			{
				$sql = "INSERT INTO robotmotion (motion) VALUES ('L')";
				mysqli_query($conn, $sql);

				echo '<div style="font-size:130px;color:#c034eb;font-weight:bold;">L';
			}

			if(isset($_POST["S"]))
			{
				$sql = "INSERT INTO robotmotion (motion) VALUES ('S')";
				mysqli_query($conn, $sql);

				echo '<div style="font-size:130px;color:#c034eb;font-weight:bold;">S';
			}

			$conn->close();
		?>	
	</div>

	<div class="button2">
		<button class="backC" onclick="history.back()"> Return to the controller </button>		
	</div>

</body>
</html>