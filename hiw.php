<!DOCTYPE html>
<?php
session_start();
if(isset( $_SESSION['login_user'] )){
    header('Location: hiwli.php');
    exit();
}
?>
<html>
	<head>
	<title>Diet | Health</title>
	<link rel="stylesheet" type="text/css" href="hiwstyle.css">
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
						<li><a href="browsefoods.php" class="ho">Browse foods</a></li>
	                    <li><a class="ho" href="login.php">Log In</a></li>
	                </ul>
				</nav>
			</div>
			<div id="content">
				<p style="font-family: 'Montserrat', sans-serif";>Changing your diet with Pattal</p>
				<h1>Plan &#9658; Prepare &#9658; Progress</h1>
				<div class="poo">
					<h2>Plan</h2>
					<ul>
						<li>Tell us your goals, preferences, and what foods to avoid</li>
						<li>Find your favorite restaurant and prepackaged foods in our database, or upload your personal recipes</li>
						<li>Make everything just right with detailed nutrition information that updates in real time</li>
					</ul>
					<div class="immmm"><img src="images/diet_surprise.png"></div>
				</div>
				<div class="poo">
					<h2>Prepare</h2>
					<ul>
						<li>Get a weekly email with your complete grocery list and cooking instructions</li>
						<li>Check your grocery list for ingredients you prefer to substitute</li>
						<li>Take your grocery list to the store, or get it delivered to start right away. Shop, cook, and eat on your own schedule.</li>
					</ul>
					<div class="immmm"><img src="images/grocery_shopping.png"></div>
				</div>
				<div class="poo">
					<h2>Progress</h2>
					<ul>
						<li>Update any changes to the plan, the rest is automatically tracked</li>
						<li>Review detailed stats on your weight and nutrients</li>
						<li>Adjust your plan and repeat!</li>
					</ul>
					<div class="immmm"><img src="images/happy_pose.png"></div>
				</div>
			</div>
		</div>
	</body>
</html>