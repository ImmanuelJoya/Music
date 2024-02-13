<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "comp1006";

//create connection
$conn = new mysqli($servername, $username, $password, $database);
//checking connection
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
} else {
    // echo " Connected Successfully";
}
