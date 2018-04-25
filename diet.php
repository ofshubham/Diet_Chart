<!DOCTYPE html>
<html>
	<head>
		<title>Diet | Health</title>
		<link rel="stylesheet" type="text/css" href="dietstyle.css">
	</head>
	<body>
		<div id="container">
			<div id="header">
				<nav>
				<a href="index.php" id="home">PATTAL</a>
				<ul>
					<li><a href="#" class="ho">How it works</a></li>
					<li><a href="#" class="ho">About us</a></li>
					<li><a href="#" class="ho">Blog</a></li>
					<li><a href="#" class="ho">Browse foods</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
			</nav>
			</div>
			<div id="content">
				<?php
				$preference=$_POST["preference"];
				$bmi=$_POST["bmi"];
				if($preference=="veg"){
					$servername = "localhost";
					$username = "root";
					$password = "";	
					$dbname = "vegd";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					if($bmi<18.5){
						$rand = rand(1,5);
				       	$combine = "table".$rand;
						$q="SELECT * FROM $combine";
						$result = mysqli_query($conn,$q);
						echo "<table border=1 class='tab'>
						<tr>
						        <th>Meal</th>
						        <th>Items</th>
						        <th>Quantity</th>
						</tr>";
						while($row = mysqli_fetch_array($result))
						{
						echo "<tr>";
						echo "<td class='mealss'>" . $row['COL 1'] . "</td>";
						echo "<td>" . $row['COL 2'] . "</td>";
						echo "<td>" . $row['COL 3'] . "</td>";
						echo "</tr>";
						}
						echo "</table>";
						mysqli_close($conn);
					} 
				        else if($bmi>=18.5 and $bmi<=24.9)
				        { 
				                	$rand = rand(21,25);
				        	$combine = "table".$rand;
						$q="SELECT * FROM $combine";
						$result = mysqli_query($conn,$q);
						echo "<table border=1 class='tab'>
						<tr>
						        <th>Meal</th>
						        <th>Items</th>
						        <th>Quantity</th>
						</tr>";
						while($row = mysqli_fetch_array($result))
						{
						echo "<tr>";
						echo "<td class='mealss'>" . $row['COL 1'] . "</td>";
						echo "<td>" . $row['COL 2'] . "</td>";
						echo "<td>" . $row['COL 3'] . "</td>";
						echo "</tr>";
						}
						echo "</table>";
						mysqli_close($conn);
					}
					else{
						        	$rand = rand(41,45);
				        	$combine = "table".$rand;
						$q="SELECT * FROM $combine";
						$result = mysqli_query($conn,$q);
						echo "<table border=1 class='tab'>
						<tr>
						        <th>Meal</th>
						        <th>Items</th>
						        <th>Quantity</th>
						</tr>";
						while($row = mysqli_fetch_array($result))
						{
						echo "<tr>";
						echo "<td class='mealss'>" . $row['COL 1'] . "</td>";
						echo "<td>" . $row['COL 2'] . "</td>";
						echo "<td>" . $row['COL 3'] . "</td>";
						echo "</tr>";
						}
						echo "</table>";
						mysqli_close($conn);
					}
				}




				// Non veg started


				else{
					$servername = "localhost";
					$username = "root";
					$password = "";	
					$dbname = "nvegd";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					if($bmi<18.5){
						        	$rand = rand(1,5);
				        	$combine = "table".$rand;
						$q="SELECT * FROM $combine";
						$result = mysqli_query($conn,$q);
						echo "<table border=1 class='tab'>
						<tr>
						        <th>Meal</th>
						        <th>Items</th>
						        <th>Quantity</th>
						</tr>";
						while($row = mysqli_fetch_array($result))
						{
						echo "<tr>";
						echo "<td class='mealss'>" . $row['COL 1'] . "</td>";
						echo "<td>" . $row['COL 2'] . "</td>";
						echo "<td>" . $row['COL 3'] . "</td>";
						echo "</tr>";
						}
						echo "</table>";
						mysqli_close($conn);
					} 
				        else if($bmi>=18.5 and $bmi<=24.9)
				        {
				        	$rand = rand(21,25);
				        	$combine = "table".$rand;
						$q="SELECT * FROM $combine";
						$result = mysqli_query($conn,$q);
						echo "<table border=1 class='tab'>
						<tr>
						        <th>Meal</th>
						        <th>Items</th>
						        <th>Quantity</th>
						</tr>";
						while($row = mysqli_fetch_array($result))
						{
						echo "<tr>";
						echo "<td class='mealss'>" . $row['COL 1'] . "</td>";
						echo "<td>" . $row['COL 2'] . "</td>";
						echo "<td>" . $row['COL 3'] . "</td>";
						echo "</tr>";
						}
						echo "</table>";
						mysqli_close($conn); 
					}
					else{
						        	$rand = rand(41,45);
				        	$combine = "table".$rand;
						$q="SELECT * FROM $combine";
						$result = mysqli_query($conn,$q);
						echo "<table border=1 class='tab'>
						<tr>
						        <th>Meal</th>
						        <th>Items</th>
						        <th>Quantity</th>
						</tr>";
						while($row = mysqli_fetch_array($result))
						{
						echo "<tr>";
						echo "<td class='mealss'>" . $row['COL 1'] . "</td>";
						echo "<td>" . $row['COL 2'] . "</td>";
						echo "<td>" . $row['COL 3'] . "</td>";
						echo "</tr>";
						}
						echo "</table>";
						mysqli_close($conn);
					}
				}
				?>
			</div>
		</div>
	</body>
</html>
