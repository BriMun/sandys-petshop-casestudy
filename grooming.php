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
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="stylesheet" type="text/css" href="css/icofont/icofont.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Grooming</title>
</head>
<body>
<?php 
require 'header.php';
?>
<div id="container">
<div id="main">
<div id="groom-info">
    <div id="groom-circle">
        <h1>Grooming</h1>
        <h2>Pricing</h2>
        <span>SM DOG: $20-$35</span><br>
        <span>MD DOG: $30-$45</span><br>
        <span>LG DOG: $40-$55</span><br>
        <span>CATS: $50-$65</span><br>
    </div>
</div>
<div class="groom-two"></div>
    <div id="form-container">
    <div class="form-title">
    <h1>Make an Appointment</h1>
    </div>
    <form onsubmit="return validate()" name="gform "action="includes/groomappt.php" method="POST">
        
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>First Name</label>
            <input type="text" name="fname" id="fname" class="form-control form-control-sm">
            <span id="fnameerror" class="text-danger"> </span>
        </div>
        <div class="form-group col-md-6">
            <label>Last Name</label>
            <input type="text" name="lname" id="lname" class="form-control form-control-sm">
            <span id="lnameerror" class="text-danger"> </span>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control form-control-sm">
            <span id="emailerror" class="text-danger"> </span>
        </div>
        <div class="form-group col-md-6">
            <label>Phone</label>
            <input type="tel" name="phone" id="phone" class="form-control form-control-sm">
            <span id="phoneerror" class="text-danger"> </span>
        </div>
    </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" id="address" class="form-control form-control-sm">
            <span id="adderror" class="text-danger"> </span>
        </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label>City</label>
            <input type="text" name="city" id="city" class="form-control form-control-sm">
            <span id="cityerror" class="text-danger"> </span>
        </div>
        <div class="form-group col-md-4">
            <label>State</label>
            <span id="stateerror" class="text-danger"> </span>
            <select name="state" id="state" class="form-control form-control-sm">
                <option value=""></option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label>Zip Code</label>
            <input type="text" name="zip" id="zip" class="form-control form-control-sm">
            <span id="ziperror" class="text-danger"> </span>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-3">
            <label>Pet's Name</label>
            <input type="text" name="pname" id="pname" class="form-control form-control-sm">
            <span id="pnameerror" class="text-danger"> </span>
        </div>
        <div id="radio-container"> 
        <div class="form-check form-check-inline col-md-2">
        <label class="form-check form-check-inline" for="cat">
        <input class="form-check form-check-inline" type="radio" name="pettype" value="Cat" id="cat" onclick="show1();" >
        <i class="icofont-cat icofont-3x"></i>
        </label> 
        <label class="form-check form-check-inline" for="dog">
        <input class="form-check form-check-inline" type="radio" name="pettype" value="Dog" id="dog" onclick="show2();" >
        <i class="icofont-dog-alt icofont-3x"></i><span id="radioerror" class="text-danger"> </span>
        </label> 
        </div>
        </div>
<!-- *** breed id initially set to hidden onclick 'Dog' radio to make visble *** -->
        <div class="form-group col-md-4" id="breed">
        <label>Breed</label>
        <select name="breed" class="form-control form-control-sm">
            <option style="display:none;"></option>
            <option value="Retriever">Retriever</option> 
            <option value="Poodle">Poodle</option>
            <option value="Collie">Collie</option>
            <option value="German Shepherd">German Shepherd</option>
            <option value="Husky">Husky</option>
            <option value="Pomeranian">Pomeranian</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Bulldog">Bulldog</option>
            <option value="Rottweiler">Rottweiler</option>
            <option value="Other">Other</option>
        </select>
        </div>
</div>    
        <div class="form-group">
        <label>Pet's Birthday (optional)</label>
        <input class="form-control form-control-sm" type="date" name="petDOB" placeholder="yyyy/mm/dd">
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="nos" value="1"> 
        <label class="form-check-label" for="nos">Neutered or Spayed?</label> Yes / No (optional)
        </div>
    <div class="row">
        <div class="groom-submit">
        <button type="submit" name="submit" class="btn btn-primary grooming">Submit</button>
        </div>
        <div class="groom-submit">
        <button type="reset" name="reset" class="btn btn-primary grooming">Reset</button>
        </div>
    </div>
    </form>
    </div>
</div>
</div>
<?php 
require 'footer.php';
?>
<script src="js/gform.js"></script>
</body>
</html>