<?php
require 'dbConn.php';

// Creating memory location
$Fisrt_name =  $_POST['Fisrt_name'] ??'';   // ?? ' '
$Last_name = htmlspecialchars($_POST['Last_name']) ??'';  // htmlspecialchars > & <
$email = htmlspecialchars($_POST['email']) ??'';
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash password  

// Check if email already exist
$sql  = "SELECT * FROM users WHERE email = '$email'"; 
$result = $conn->query($sql);  // ->

if($result->num_rows >0) {   // num_rows Checking if the sql queries return any result, Checking if the email is already found, Counting the number of rowls in the table
    echo "<script>alert('Email already exist!');</script>";
} 
    else{
        // SQL query to insert data
        $sql = "INSERT INTO users (First_name, Last_name, email, password) VALUES ('$Fisrt_name', '$Last_name', '$email', '$password')";

        if($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration successful!');</script>";
        }  else{
            echo "<script>alert('Error!' );</script>";
        }
    } 

// close connection
$conn->close();
?>