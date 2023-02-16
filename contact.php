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
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="stylesheet" type="text/css" href="css/icofont/icofont.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 <title>Contact</title>
</head>
<body>
<?php 
require 'header.php';
?>
<div id="container">
<div id="main">
<div class="contact-banner"></div>
<div class="contact-banner-two">


<section class="contact-form-container">
    
<div class="contact-title">
    <h1>Contact Us!</h1>
</div>
    <div>
        <label>First Name</label><span id="fNameError" class="text-danger"></span>
        <input type="text" name="fName" id="fName" class="form-control">
    </div>
    <div>
        <label>Last Name</label><span id="lNameError" class="text-danger"></span>
        <input type="text" name="lName" id="lName" class="form-control">
    </div>
    <div>
        <label>Email</label><span id="userEmailError" class="text-danger"></span><br/>
        <input type="text" name="userEmail" id="userEmail" class="form-control">
    </div>
    <div>
        <label>Message</label><span id="MessageError" class="text-danger"></span><br/>
        <textarea name="Message" id="Message" class="form-control" maxlength=""></textarea>
    </div>
    <div class="subcntr">
    <div>
        <button name="submit" class="btnAction btn btn-primary btn-block" onClick="validate();">SEND</button>
    </div>
    <div id="success"></div>
    </div>
</section>
</div>
</div>
</div>
<?php 
require 'footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/contact.js"></script>
</body>
</html>