<?php
require 'session.php';
include 'header.php';

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
$district = $_POST['district'];
$mandal = $_POST['mandal'];
$village = $_POST['village'];
$gps = $_SESSION['gps'];
$pincode = $_POST['pincode'];

	echo "<script> alert('Successfully Registered... Click OK to login');window.location.href='login.php';</script>";

?>
