<!DOCTYPE html>
<?php
   include('C:\Users\VARTIKA MISHRA\Desktop\shubham\space\4\session.php');
   error_reporting(0);
?>
<html>
<head>
	<title>Diet | Health</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,900');
@import url('https://fonts.googleapis.com/css?family=Raleway:400,700');
@import url('https://fonts.googleapis.com/css?family=Oswald:400,700');

	</style>
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
					<li><a href="logout.php">Log out</a></li>
				</ul>
			</nav>
		</div>
		<div id="content" style="color:white; float:left;">

			<form action="calbmi.php" method="post" id="info" align="center" style="color:white; float: left;">
				<br>
				<table align="center">
				<tr>
				  <th >Name:</th>
				  <td><input type="text" name="name"></td>
				</tr>
				<tr>
				<th>Age:</th>
				<td><input type="text" name="age"></td>
				</tr>
				<tr>
				  <th>Gender:</th>
				  <td><input type="radio" name="gender" value="male">Male
				  <input type="radio" name="gender" value="female">Female</td>
				</tr>
				<tr>
				<th>Weight(In KGs):</th>
				<td><input type="text" name="weight"></td>
				</tr>
				<tr>
				  <th>Height(In Ms):</th>
				  <td><input type="text" name="height"></td>
				</tr>
				<tr>
				  <th>No. of Meals:</th>
				  <td><select name="noofmeals" form="info">
				  <option value="3">3</option>
				  <option value="4">4</option>
				 </select></td>
				</tr>
				<tr>
				  <th>Workout Type:</th>
				  <td><select name="workouttype" form="info">
				  <option value="sedentary">Sedentary</option>
				  <option value="normal">Normal</option>
				  <option value="active">Active</option>
				 </select></td>
				</tr>
				</table><br>
				<input type="submit" value="Calculate" class="btn btn-danger">
				</form>
	
				<h1 align = "center" id="deshead">Eating smart has never been easier  </h1>
				<p align="center" font=48px >The best nutrition strategy is the one that actually happens, because behaviors, not ideas, are the secret to changing your diet. Healthypattal makes meal planning simple, automatic, customizable, and most importantly, doable.

				We created Healthypattal to save you time and energy while also giving you complete control over the meal planning process. Caloric and macro targets, recipes, grocery lists and a growing food database are all here to help you create your best meal plan.</p>
				</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>