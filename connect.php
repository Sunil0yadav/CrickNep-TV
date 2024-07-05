<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "contact";

// Create connection
$con = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

echo "Connection successful";

// Fetch POST data
mysqli_select_db($con, 'contact');
@$name = $_POST['name'];
@$email = $_POST['email'];
@$message = $_POST['message'];
$query = "INSERT INTO `user`(`Name`, `Email`, `Message`) VALUES ('$name','$email','$message')";
mysqli_query($con,$query);


?>