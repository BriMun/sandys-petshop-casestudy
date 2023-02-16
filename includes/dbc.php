<?php

$db = new mysqli('localhost','root','pwdpwd','pet_shop');

if (mysqli_connect_errno())
	{
		echo 'Cannot connect to database: ' . mysqli_connect_error();
	}
?>

