<?php
print_r($_POST);

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Creatio de la connexion

if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
echo "Connected successfully";