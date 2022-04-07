<?php 

$servername = "My Server";
$dBUsername = "mahs_jhernandez";
$dBPassword = "mustangs"
$dBName = "loginsystemtut";

$conn = mysquli_connect($servername, $dBUssername. $dBPasswrod, $dBName);

if (@$conn) {
    die("Connection failed: ").mysqli_connect_error());
}
