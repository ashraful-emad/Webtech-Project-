<?php
include 'config.php';
if(isset($_POST['update'])){

$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="../picture/".$filename;
 
move_uploaded_file($tempname, $folder);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $name =$_POST["name"];
  $image=$_FILES["uploadfile"]["name"];
   $price =$_POST["price"];
  $category = $_POST['category'];
// sql to update a record
$sql = "UPDATE tbl_product SET name='$name', image='$folder', price = '$price',category= '$category'WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location:../forms/product_management.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
}


}
?>