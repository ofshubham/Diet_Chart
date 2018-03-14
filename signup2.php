

<!DOCTYPE html>
<html>
<head>
	<title>Diet | Health</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<nav>
				<a href="index.php" id="home">PATTAL</a>
				<ul>
					<li><a href="#">How it works</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Browse foods</a></li>
				</ul>
			</nav>
		</div>
		<div id="content">
			<?php
				$name=$email=$pass="";
				if($_SERVER['REQUEST_METHOD'] === 'POST') {
					$name=$_POST["name"];
				    $email=$_POST["email"];
				    $pass=$_POST["psw"];
				    $encrypt_pass = md5($pass);
				    $servername = "localhost";
				    $username = "root";
				    $password = "";

				    try {
				        $conn = new PDO("mysql:host=$servername;dbname=khayega", $username, $password);
				        // set the PDO error mode to exception
				        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				        $sql = "INSERT INTO login (name, email, password)
				        VALUES ('$name','$email', '$encrypt_pass')";
				        // use exec() because no results are returned
				        $conn->exec($sql);
				        }
				    catch(PDOException $e)
				        {
				        echo "Connection failed: " . $e->getMessage();
				        }

				    $conn = null;
				}
			?>
		
				<h2 style="font-family: 'Oswald', sans-serif;color:white;margin-left:40%;">Successfully Signed Up<br>Now you can login<br><button style="background-color: orange; margin-left:15%;border:none;"><a href="login.php" style="font-size: 2em;text-decoration: none;color:black;">Log In</a></button></h2>	<br>
		</div>
	</div>



</body>
</html>
