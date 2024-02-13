<?php

include "db.php";

$name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$interests = $_POST['interests'];
$address = $_POST['address'];

$subscription = false;
if ($_POST['subscription']) {
    $subscription = true;
}

//validate user data
if (empty($name)) {
    echo "Name is required";
} elseif (!preg_match("/^[a-zA-Z]*$/", $name)) {
    echo "Only alpahbets and whitespaces are allowed in your name";
} elseif (empty($email)) {
    echo "Email is required";
} elseif (!is_numeric($phone)) {
    echo "Phone must be numeric";
} else {
    $sql = "INSERT INTO users(name,email,phone,interests,address,subscription)VALUES('$name','$email','$phone','$interests','$address','$subscription')";
    if ($conn->query($sql) === True) {
        // echo "Record inserted successfully";
        header("Location: list.php");
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
}
