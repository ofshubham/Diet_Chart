<?php
$pref=$_POST["preference"];
$b=$_POST["bmi"];
$servername = "localhost";
$username = "root";
$password = "";	
$dbname = "";
if($pref=="vegetarian"){
	$dbname="vegd";
}
else{
	$dbname="nvegd";
}
$conn = new mysqli($servername, $username, $password, $dbname);
if($b<=18.5){

$q="SELECT * FROM ". random(0,6);
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
		echo "<td>" . $row['COL 1'] . "</td>";
		echo "<td>" . $row['COL 2'] . "</td>";
		echo "<td>" . $row['COL 3'] . "</td>";
		echo "</tr>";
	}
		echo "</table>";
		mysqli_close($conn);
	} 
        else if($b>=18.5 or $b<=24.9)
        { 
		$q="SELECT * FROM ". random(20,26);
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
		echo "<td>" . $row['COL 1'] . "</td>";
		echo "<td>" . $row['COL 2'] . "</td>";
		echo "<td>" . $row['COL 3'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
		mysqli_close($conn);
	}
	else{
		$q="SELECT * FROM ". random(40,46);
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
		echo "<td>" . $row['COL 1'] . "</td>";
		echo "<td>" . $row['COL 2'] . "</td>";
		echo "<td>" . $row['COL 3'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
		mysqli_close($conn);
	}
}else{
	$servername = "localhost";
	$username = "root";
	$password = "";	
	$dbname = "nvegd";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	if($b<=18.5){
		$q="SELECT * FROM ". random(0,6);
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
		echo "<td>" . $row['COL 1'] . "</td>";
		echo "<td>" . $row['COL 2'] . "</td>";
		echo "<td>" . $row['COL 3'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
		mysqli_close($conn);
	} 
        else if($b>=18.5 or $b<=24.9)
        {
		$q="SELECT * FROM ". random(0,6);
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
		echo "<td>" . $row['COL 1'] . "</td>";
		echo "<td>" . $row['COL 2'] . "</td>";
		echo "<td>" . $row['COL 3'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
		mysqli_close($conn); 
	}
	else{
		$q="SELECT * FROM ". random(0,6);
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
		echo "<td>" . $row['COL 1'] . "</td>";
		echo "<td>" . $row['COL 2'] . "</td>";
		echo "<td>" . $row['COL 3'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
		mysqli_close($conn);
	}
}
?>

