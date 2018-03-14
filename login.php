<!DOCTYPE html>
<?php
   include("db.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']);
      $dec = md5($mypassword); 
      
      $sql = "SELECT uid FROM login WHERE email = '$myemail' and password = '$dec'";
      $result = mysqli_query($db,$sql);
      
      $check = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row	
      if($check == 1) {
     //    session_register("myemail");
         $_SESSION['login_user'] = $myemail;
         
         header("location: profile.php");
      }else {
         $error =  "<font color='red'><b>* Your Email or Password is invalid</b></font>";
      }
   }
?>
<html>
<head>
	<title>Diet | Health</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
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
		<div id="loginwrapper" style="width: 50%;margin-left: 26%;">
			<h1>Log In</h1>
			<div id="log">
        <?php if(isset($error)) echo $error; ?>
				<form action="login.php" method="post">
  					<div class="container">
    					<label for="uname"><b>Email</b></label>
    					<input type="text" placeholder="Enter Email" name="email" required>

    					<label for="psw"><b>Password</b></label>
    					<input type="password" placeholder="Enter Password" name="psw" required>
        
    					<button type="submit">Login</button>
  					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>