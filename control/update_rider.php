
<?php
include 'config.php';
if(isset($_POST['update'])){




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $name =$_POST["name"];
   $email =$_POST["email"];
  $user_type = $_POST['user_type'];
// sql to update a record
$sql = "UPDATE user_form SET name='$name', email = '$email',user_type= '$user_type'WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location:../forms/rider_management.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}
}

?>

