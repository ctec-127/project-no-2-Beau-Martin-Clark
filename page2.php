<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>
<body>

<?php include("includes/header.html"); ?>

<p>Hello, <?php echo $_GET["name"];?>! <?php echo "You're the " . $_GET["gender"];?>!!</p>

<?php

if(!isset($_GET['facebook']) && !isset($_GET['linkedin']) && !isset($_GET['slack'])){
    echo "<p>You didn't use any of the social media sites listed.<p>";
} else {echo "<p>Here are the social media sites you use:</p>";}

if(isset($_GET["facebook"])){
    echo '<img src="images/facebook.png" alt="Facebook" height="128" width="128">';
} 
 
if (isset($_GET["linkedin"])) {
    echo '<img src="images/linkedin.png" alt="LinkedIn" height="128" width="128">';
} 

if(isset($_GET["slack"])) {
    echo '<img src="images/slack.png" alt="Slack" height="128" width="128">';
}

?>
<br><br>
<p>Here is what you would most like as your means of transportation:</p>

<?php 

switch ($_GET["transport"]) {
    case "bicycle":
        echo '<img src="images/bicycle.png" alt="bicycle" height="176" width="300">';
        break;
    case "helijet":
        echo '<img src="images/helijet.png" alt="helijet" height="122" width="300">';
        break;
    case "hyperloop":
        echo '<img src="images/hyperloop.jpg" alt="hyperloop" height="168" width="300">';
        break;
    case "supercar":
        echo '<img src="images/supercar.png" alt="supercar" height="116" width="300">';
        break;
    case "tank":
        echo '<img src="images/tank.png" alt="tank" height="134" width="300">';
        break;
}
        ?>
<br><br>
<?php include("includes/footer.html"); ?>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>