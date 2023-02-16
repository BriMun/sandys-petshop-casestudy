
<?php

include_once 'dbc.php';

if(isset($_GET['edit_id'])) {
    $sql = "SELECT * FROM grooming WHERE GroomingID =" .$_GET['edit_id'];
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);
}


if(isset($_POST['btn-update'])){
    $fname = htmlentities($_POST['fname']);
    $lname = $_POST['lname'];
    $lname = trim($lname);
    $lname = htmlentities($lname);
    $lname = addslashes($lname);
    $address = htmlentities($_POST['address']);
    $city = htmlentities($_POST['city']);
    $state = htmlentities($_POST['state']);
    $zip = htmlentities($_POST['zip']);
    $phone = htmlentities($_POST['phone']);
    $email = htmlentities($_POST['email']);
    $pettype = htmlentities($_POST['pettype']);
    $breed = htmlentities($_POST['breed']);
    $pname = htmlentities($_POST['pname']);
    $nos = htmlentities($_POST['nos']);
    $petDOB = htmlentities($_POST['petDOB']);
    $update = "UPDATE grooming SET FirstName='$fname', LastName='$lname', Address='$address', City='$city', State='$state', Zip='$zip', PhoneNumber='$phone', Email='$email', PetType='$pettype', Breed='$breed', PetName='$pname', NeuteredOrSpayed='$nos', PetBirthday='$petDOB' WHERE GroomingID=" .$_GET['edit_id'];
    $up = mysqli_query($db, $update);
    if(!isset($sql)){
        die("Error $sql" .mysqli_connect_error());
    }
    else 
    {
        header("location:../admin.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<title>Admin-Edit Appointment</title>
<article class="grooming-form">    
    <div class="form-container-admin">
    <div class="heading-box">
    <h1>Edit Appointment</h1>
    </div>
    <form onsubmit="return validate()" name="gform" method="POST">
        
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>First Name</label>
            <input type="text" name="fname" id="fname" class="form-control form-control-sm" value="<?php echo $row['FirstName'];?>">
            <span id="fnameerror" class="text-danger"> </span>
        </div>

        <div class="form-group col-md-6">
            <label>Last Name</label>
            <input type="text" name="lname" id="lname" class="form-control form-control-sm" value="<?php echo $row['LastName'];?>">
            <span id="lnameerror" class="text-danger"> </span>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control form-control-sm" value="<?php echo $row['Email'];?>">
            <span id="emailerror" class="text-danger"> </span>
        </div>
        <div class="form-group col-md-6">
            <label>Phone</label>
            <input type="tel" name="phone" id="phone" class="form-control form-control-sm" value="<?php echo $row['PhoneNumber'];?>">
            <span id="phoneerror" class="text-danger"> </span>
        </div>
    </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" id="address" class="form-control form-control-sm" value="<?php echo $row['Address'];?>">
            <span id="adderror" class="text-danger"> </span>
        </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label>City</label>
            <input type="text" name="city" id="city" class="form-control form-control-sm" value="<?php echo $row['City'];?>">
            <span id="cityerror" class="text-danger"> </span>
        </div>
        <div class="form-group col-md-4">
            <label>State</label>
            <input type="text" name="state" id="state" class="form-control form-control-sm" value="<?php echo $row['State'];?>">
            <span id="stateerror" class="text-danger"> </span>
        </div>
        <div class="form-group col-md-2">
            <label>Zip Code</label>
            <input type="text" name="zip" id="zip" class="form-control form-control-sm" value="<?php echo $row['Zip'];?>">
            <span id="ziperror" class="text-danger"> </span>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <label>Pet's Name</label>
            <input type="text" name="pname" id="pname" class="form-control form-control-sm" value="<?php echo $row['PetName'];?>">
            <span id="pnameerror" class="text-danger"> </span>
        </div>
        <div id="radio-container">
        <div class="form-check form-check-inline col-md-2">
        <label class="form-check form-check-inline" for="cat">
        <input class="form-check form-check-inline" type="radio" name="pettype" value="Cat" id="cat" 
        <?php if($row['PetType']=='Cat') {
            echo "checked";
        } ?>
        >
        Cat
        </label>
        <label class="form-check form-check-inline" for="dog">
        <input class="form-check form-check-inline" type="radio" name="pettype" value="Dog" id="dog"
        <?php if($row['PetType']=='Dog') {
            echo "checked";
        } ?>
        
        >
        Dog <span id="radioerror" class="text-danger"> </span>
        </label>    
        </div>
    </div>
<!-- *** breed id initially set to hidden must click 'Dog' radio to make visble *** -->

        <div class="form-group col-md-4">
            <label>Dog Breed</label>
            <input type="text" name="breed" class="form-control form-control-sm" value="<?php echo $row['Breed'];?>">
        </div>
    </div>
        <div class="form-group">
        <label>Pet's Birthday(optional)</label>
        <input class="form-control form-control-sm" type="date" name="petDOB" placeholder="Pet Birthday" value="<?php echo $row['PetBirthday'];?>">
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="nos" value="1"
        <?php if($row['NeuteredOrSpayed']=='1') {
            echo "checked";
        } ?>
        >
        <label class="form-check-label" for="nos">Neutered or Spayed?</label>Yes /No
        </div>
    
       
        <button type="submit" name="btn-update" class="btn btn-primary btn-space grooming" id="btn-update" onClick="udpdate()"><strong>Update</strong></button>
        
        <a href="../admin.php" class="grooming btn btn-primary btn-active" role="button">Cancel</a>
        
    

    </form>
    </div>
</article>

</body>
<script>

// Begin Validation Script
function validate(){

    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var address = document.getElementById('address').value;
    var city = document.getElementById('city').value;
    var zip = document.getElementById('zip').value;
    var pname = document.getElementById('pname').value;
    

    var fnamecheck = /^[a-zA-Z\- ]+$/;
    var lnamecheck = /^([a-zA-Z][a-zA-Z']+ )*[a-zA-Z][a-zA-Z']+$/;
    var emailcheck = /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
    var phonecheck = /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/;
    var citycheck = /^[a-zA-Z\- ]+$/;
    var zipcheck = /^\d{5}(\-\d{4})?$/;
    var pnamecheck = /^[a-zA-Z\- ]+$/;

    if(fnamecheck.test(fname)){
        document.getElementById('fnameerror').innerHTML = " ";
    } else {
        document.getElementById('fnameerror').innerHTML = "* Required ";
        return false;
    }
    if(lnamecheck.test(lname)){
        document.getElementById('lnameerror').innerHTML = " ";
    } else {
        document.getElementById('lnameerror').innerHTML = "* Required ";
        return false;
    }
    if(emailcheck.test(email)){
        document.getElementById('emailerror').innerHTML = " ";
    } else {
        document.getElementById('emailerror').innerHTML = " * Required ";
        return false;
    }
    if(phonecheck.test(phone)){
        document.getElementById('phoneerror').innerHTML = " ";
    } else {
        document.getElementById('phoneerror').innerHTML = "* Required ";
        return false;
    }
    if(citycheck.test(city)){
        document.getElementById('cityerror').innerHTML = " ";
    } else {
        document.getElementById('cityerror').innerHTML = "* Required ";
        return false;
    }
    if(zipcheck.test(zip)){
        document.getElementById('ziperror').innerHTML = " ";
    } else {
        document.getElementById('ziperror').innerHTML = "* Required ";
        return false;
    }
    if(pnamecheck.test(pname)){
        document.getElementById('pnameerror').innerHTML = " ";
    } else {
        document.getElementById('pnameerror').innerHTML = "* Required ";
        return false;
    }

    if(document.querySelector('input[name="pettype"]:checked') == null) {
        document.getElementById('radioerror').innerHTML = "*";
        return false;
    }
}  

</script>
</html>