<?php

include 'config.php';




if(isset($_POST['delete'])){

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
// sql to delete a record
$sql = "DELETE FROM tbl_product WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  


  header("Location: ../forms/product_management.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}

}
?>