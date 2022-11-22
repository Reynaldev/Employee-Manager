<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "work";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    # code...
    die("Connection failed: ".mysqli_connect_error());
}

?>