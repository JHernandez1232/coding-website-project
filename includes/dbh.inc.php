<?php
$dBServername = "localhost";
$dBUsername = "mahs_jhernandez";
$dBPassword = "mustangs";
$dBName = "mahs_jhernandez";

// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
