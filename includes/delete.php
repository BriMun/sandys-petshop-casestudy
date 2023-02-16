<?php

$db = new mysqli('localhost','root','pwdpwd','pet_shop');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM grooming WHERE GroomingID='$_GET[id]'";

if(mysqli_query($db, $sql))
header("location: ../admin.php");
else
    echo "Not Deleted";


mysqli_close($db);
