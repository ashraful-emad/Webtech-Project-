
<?php
include 'config.php';
 session_start();

if(isset($_POST['reset'])){



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];

   $email =$_POST["email"];
   $password =$_POST["password"];
// sql to update a record
$sql = "UPDATE user_form SET password= '$password' WHERE id= $id ";

if ($conn->query($sql) === TRUE) {



 $_SESSION['reset'] = true;
 




header('location:../forms/login.php');


  

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}
}


?>

