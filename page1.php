<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
</head>
<body>

<?php include("includes/header.html"); ?>

<p>There are 7 different controls on this page which will allow you to change the way page 2 looks. Use them to configure page 2.</p>

<form action="page2.php" method="get">

    <label for="name">Name:
        <input type="text" id="name" name="name" required>
    </label>
    <br><br>

    Are you:<br>

    <label for="male"><input id="male" type="radio" name="gender" value="man" required> Male</label><br>
    <label for="female"><input id="female" type="radio" name="gender" value="woman"> Female</label><br><br>

    <p>Which of these social media sites do you use? </p>
    <label for="facebook">
        <input type="checkbox" id="facebook" name="facebook" value="true"> Facebook
    </label><br>
    <label for="linkedin">
        <input type="checkbox" id="linkedin" name="linkedin" value="true"> LinkedIn
    </label><br>
    <label for="slack">
        <input type="checkbox" id="slack" name="slack" value="true"> Slack
    </label>
    <br><br>

<p>Which would you prefer as your means of transportation:</p>

<select name="transport">
    <option value="bicycle">Bicycle</option>
    <option value="helijet">Helijet</option>
    <option value="hyperloop">Hyperloop</option>
    <option value="supercar">Supercar</option>
    <option value="tank">Tank</option>
</select><br><br>

<!-- <p>Which color header would you like:</p>
<select name="header_color">
    <option value="red">Red</option>
    <option value="blue">Blue</option>
    <option value="black">Black</option>
<select><br><br>

<p>Which color footer would you like:</p>
<select name="footer_color">
    <option value="red">Red</option>
    <option value="blue">Blue</option>
    <option value="black">Black</option>
<select><br><br> -->

<input type="submit" value="submit"><br><br>

</form>


<?php include("includes/footer.html"); ?>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>