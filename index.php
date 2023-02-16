<?php 
    include_once 'includes/dbc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="stylesheet" type="text/css" href="css/icofont/icofont.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Sandy's Pet Shop</title>
</head>
<body>
<?php 
require 'header.php';
?>
<div id="container">
<div id="main">
<div class="content-wrapper">
    <div class="content">
    </div>
    <div class="banner">
    <img src="img/spslogo-lg.svg" class="main-center">
        <div class="welcome" data-aos="fade-up" data-aos-duration="2000">
            <img src="img/welcome.png"></img>
        </div>
    <div class="pet-info" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="2000">
        <h1>Sandy's Pet Shop</h1>
        <p>Provides grooming services and a variety of pet supply products in store. Stop in today!</p>
    </div>
    <div class="location-info" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="2000">
        <h1>Specializing In</h1>
        <span>Dog and Cat Grooming!</span><br>
        <span>All Breeds, Small and Large!</span><br>
        <span>Make an appointment today!</span>
    </div>
    </div>
</div>
</div>
<?php 
require 'footer.php';
?>
<script src="js/aos.js"></script>
<script>AOS.init();</script>
</body>
</html>

