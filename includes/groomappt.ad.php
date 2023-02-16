<?php

include_once 'dbc.php';

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


$sql =
"INSERT INTO grooming (FirstName, LastName, Address, City, State, Zip, PhoneNumber, Email, PetType, Breed, PetName, NeuteredOrSpayed, PetBirthday)
VALUES ('$fname', '$lname', '$address', '$city', '$state', '$zip', '$phone', '$email', '$pettype', '$breed', '$pname', '$nos', '$petDOB');";
mysqli_query($db, $sql);

header("Location: ../admin.php");

?>