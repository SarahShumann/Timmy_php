<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "Signup";


$conn = new mysqli($servername, $username, $password, $database);

$sql = "CREATE DATABASE Signup";

$sql = "CREATE TABLE sign_up (
 firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(30),
username VARCHAR(30),
password VARCHAR(30)
)";

$sql = "CREATE TABLE sign_in (
username VARCHAR(30),
password VARCHAR(30)
)";
/*
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO sign_up (firstname, lastname, email, username, password) 
VALUES ('$firstname', '$lastname', '$email', '$username','$password')";


if ($conn->query($sql) === TRUE){
echo "You have registered."; 
echo "Please click on this link to sign in to your account ";
echo " <a href='http://localhost/AdvancedWebProject/project.html'>Click here to visit site</a>";

}
else {
echo " error in inserting into table" . $conn->error;
}

?>