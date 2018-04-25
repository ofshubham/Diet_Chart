<?php
$servername = "localhost";
$username = "root";
$password = "";	
$dbname = "vegd";

	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$q="SELECT * FROM 1";
$result=mysqli_query($conn,$q);
		echo "<table border=1>
		<tr>
		        <th>Meal</th>
		        <th>Items</th>
		        <th>Quantity</th>
		</tr>";
		while($row = mysqli_fetch_array($result))
		{
		echo "<tr>";
		echo "<td>" . $row['COL 1'] . "</td>";
		echo "<td>" . $row['COL 2'] . "</td>";
		echo "<td>" . $row['COL 3'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
		mysqli_close($conn);
?>