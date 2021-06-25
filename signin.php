<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "Signup";


$conn = new mysqli($servername, $username, $password, $database);

$sql = "CREATE TABLE sign_in (
username VARCHAR(30),
password VARCHAR(30)
)";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO sign_in (username, password) 
VALUES ('$username','$password')";


if ($conn->query($sql) === TRUE){
echo " New record inserted successfully";

}
else {
echo " error in inserting into table" . $conn->error;
}


?>