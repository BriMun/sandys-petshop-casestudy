
<?php 
    include_once 'includes/dbc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/icofont/icofont.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Location</title>
</head>
<body>
<?php 
require 'header.php';
?>

<div id="container">
<div id="main">

<div id="location-container">
</div>

<div id="location-info-two">
<div id="location-info">
<h1>Location</h1>
<h2> 710 Main St. Buffalo, NY 14202</h2>
<h2>(555) 555 - 5555 </h2>
    <span>Mon-Thur: 10am - 7pm</span>
    <br>
    <span>Fri-Sat: 10am - 9pm</span>
    <br>
    <span>Sun: Closed</span>
</div> 
</div>
<div id="map">
</div>



   
</div>
</div>
<?php 
require 'footer.php';
?>
<script> 

function initMap () {
// Options
var options = {
    zoom:16,
    center: {lat:42.8932259, lng:-78.8724995}
}
// Map 
var map = new google.maps.Map(document.getElementById('map'), options);

// Marker
var marker = new google.maps.Marker({
    position:{lat:42.8932259,lng:-78.8724995},
    map:map,
});
var infoWindow = new google.maps.InfoWindow({
content:'<h4>Sandy\'s Pet Shop</h4>'
});
marker.addListener('click', function() {
infoWindow.open(map, marker);
});
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9Lzxm07kunnIkM01ChxkSg41IyajdsFE&callback=initMap"
    async defer></script>
</body>
</html>
