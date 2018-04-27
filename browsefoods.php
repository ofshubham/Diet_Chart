<!DOCTYPE html>
<?php
session_start();
if(isset( $_SESSION['login_user'] )){
    header('Location: bfli.php');
    exit();
}
?>
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
					<li><a href="hiw.php" class="ho">How it works</a></li>
					<li><a href="#" class="ho">About us</a></li>
					<li><a href="#" class="ho">Blog</a></li>
					<li><a href="#" class="ho">Browse foods</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
			</nav>
			</div>
			<div id="content">
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";	
				$dbname = "bf";
				$conn = new mysqli($servername, $username, $password, $dbname);
				$q="SELECT * FROM browsefoods";
				$result = mysqli_query($conn,$q);
				echo "<table border=1 class='tab'>
				<tr>
				<th>Items</th>
				<th>Quantity</th>
				<th>Fat</th>
				<th>Carbohydrates</th>
				<th>Protein</th>
				<th>Calories</th>
				</tr>";
				while($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>" . $row['COL 1'] . "</td>";
					echo "<td>" . $row['COL 2'] . "</td>";
					echo "<td>" . $row['COL 3'] . "</td>";
					echo "<td>" . $row['COL 4'] . "</td>";
					echo "<td>" . $row['COL 5'] . "</td>";
					echo "<td>" . $row['COL 6'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
				mysqli_close($conn);
				?>
			</div>
		</div>
	</body>
</html>