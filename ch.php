<?php
	$servername = "localhost";
	$username = "root";
	$password = "pass";	
	$dbname = "practice";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$q="SELECT * FROM name";
 	$result = mysqli_query($conn,$q);
	echo "<table border=1>
	<tr>
		<th>Meal</th>
		<th>Items</th>
		<th>Quantity</th>
	</tr>";
	while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['sname'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);

?>
