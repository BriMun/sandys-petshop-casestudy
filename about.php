<?php 
    include_once 'includes/dbc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="css/aos.css">
   <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/icofont/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>About</title>
</head>
<body>
<?php 
require 'header.php';
?>
<div id="container">
<div id="main">
<div id="about-info">
</div>
<div id="about-wrapper">
<h1>Meet Our Team</h1>
    <div class="about-container">
        <article class="about">
        <img src="img/groom1.png" alt="groomer1"/>
        <span class="caption">Sandy</span>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum fugiat quae nemo assumenda optio provident, quis et molestias ullam magni? Eius iure repudiandae nemo voluptatum pariatur nesciunt molestiae natus autem!</p>
        </article>

        <article class="about">
        <img src="img/groom2.png" alt="groomer1"/>
        <span class="caption">Mike</span>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum fugiat quae nemo assumenda optio provident, quis et molestias ullam magni? Eius iure</p>
        </article>

        <article class="about">
        <img src="img/groom3.png" alt="groomer1"/>
        <span class="caption">Whitney</span>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum fugiat quae nemo assumenda optio provident, quis et molestias ullam magni? Eius iure repudiandae nemo voluptatum pariatur nesciunt molestiae natus autem!</p>
        </article>

        <article class="about">
        <img src="img/groom4.png" alt="groomer1"/>
        <span class="caption">Angela</span>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum fugiat quae nemo assumenda optio provident, quis et molestias ullam magni? Eius iure repudiandae nemo voluptatum pariatur nesciunt molestiae natus autem!</p>
        </article>
    </div>
</div>
</div>
</div>
<?php 
require 'footer.php';
?>
</body>
</html>