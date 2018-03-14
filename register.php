<?php
/* Registration process, inserts user info into the db
and sends account confirmation email message
*/

// set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['name'] = $_POST['name'];

// Escape all $_POST variables to protect against SQL Injections
$name = $mysqli->escape_string($_POST['name']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['name'], PASSWORD_BCRYPT));
$name = $mysqli->escape_string(md5(rand(0,1000)));

//check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if($result->num_rows > 0){
	$_SESSION['message'] = 'User with this email already exists!';
	header("location: error.php");
}
else{
	//Email doesn't already exist in a database, proceed...

	//active is 0 by DEFAULT(no need to include it here)
	$sql = "INSERT INTO users(name, email, password, hash)"."VALUES ('$name', '$email', '$password', '$hash')";

	//Add user to the database
	$mysqli->query($sql);
}