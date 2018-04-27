<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="calbmistyle.css">
<title>BMI</title>
</head>
<body>
    <div class="wrapper">
        <div id="header">
                <nav>
                    <a href="index.php" id="home">PATTAL</a>
                    <ul>
                        <li><a href="hiw.php">How it works</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="browsefoods.php">Browse foods</a></li>
                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </nav>
        </div>
        <!--<div class="stuff">
            <?php
            error_reporting(0);
            $bmi=$height=$weight=$ibw=$bmr=0;
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $gender=$_POST["gender"];
                $weight=$_POST["weight"];
                $height=$_POST["height"];
                $age=$_POST["age"];

                $res=$height - 1.524;
                $res=$res/.0254;
                $ibw=2.3*$res;
                $bmi=($weight/($height*$height));
                if ($gender == "male"){
                	$ibw = $ibw + 50;
                	$bmr = 66.47 + (13.7 * $weight) + (5 * 100 *$height) - (6.8 * $age);
                }else{
                	$ibw = $ibw + 45.5;
                	$bmr= 655.1 + (9.6 * $weight) + (1.8 * 100 * $height) - (4.7 * $age);
                }
                echo "<p align='center' font=48px><strong>Your BMI is ".$bmi."<br>Your TDEE is ".$bmr." cal/24hrs.<br>Your Ideal Body Weight is ".$ibw." Kgs<br>BMI Categories:<br>Underweight = <18.5<br>
                Normal weight = 18.5–24.9<br> 
                Overweight = 25–29.9 <br>
                Obesity = BMI of 30 or greater<br></strong></p>";
            }
            ?>
        </div> -->
    </div>
</body>
</html>