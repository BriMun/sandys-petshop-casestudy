
<?php


$toEmail = "munro.bb@gmail.com";
$mailHeaders = "From: " . $_POST["fName"] . $_POST["lName"] . "<". $_POST["userEmail"] .">\r\n";
if(mail($toEmail, $_POST["Message"], $mailHeaders)) {
    print "<p class='success'>Thank You! We'll be with you shortly!</p>";
} else {
    print "<p class='Error'>Problem in Sending Mail.</p>";
}

?>

