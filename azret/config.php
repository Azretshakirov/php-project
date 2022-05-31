<?php 

$server = "localhost";
$user = "aziret";
$pass = "aZiret12a";
$database = "testing";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
