<?php

include 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
// sql to delete a record
$sql = "DELETE FROM user_form WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location: ../forms/rider_management.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}


?>