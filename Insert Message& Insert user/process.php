<?php

// دریافت مقادیر فرم
$name = $_POST['name'];
$last_name = $_POST['last-name'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$host = "localhost";
    $dbusername = "root";
    $dbpassword= "";
    $dbname = "auth";
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    
    $conn->set_charset("utf8");
    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

$insertquery = "INSERT INTO message (`name`, `last-name`, `phone`, `message`) VALUES ('$name','$last_name','$phone','$message')";
var_dump($insertquery);
$Result = $conn->query($insertquery);







?>