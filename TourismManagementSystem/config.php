<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tourismdb";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Failed to connect to server. ". mysqli_connect_error());
}
?>