<?php
include 'config.php';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
// insert start

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$user_type = $_POST['user_type'];
$remember =$_POST['remember'];

$sql = "INSERT INTO user_form (name, email,password,user_type)
VALUES ('$name', '$email','$password','$user_type')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully <br>";
  // select or read data start
header("Location:../forms/login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// insert end



}
$conn->close();
}
?>