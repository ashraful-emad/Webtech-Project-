<?php
include  '../control/insert_product.php';
?>
<?php
include '../control/config.php';
error_reporting(0);
$rn = $_GET['rn'];
$na = $_GET['na'];
$img= $_GET['img'];
$pri = $_GET['pri'];
$cate = $_GET['cate'];
?>

<html>
<head>
<link rel="stylesheet" href="../css/login_style.css"/>
<style>
.error {color: #FF0000;}
body{
    background-image: url("../picture/back1.jpg");
}
</style>
</head>
<body>
 <table>
        <tr>
            <td ><?php include 'header.php';?></td>
        </tr>
        <tr>
            <td>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"enctype="multipart/form-data">
<fieldset>



<lebel for="name">Name: </lebel>
<input type="text" name="name" id="name" value="<?php echo "$_GET[na]"
?>" required=''>
 <hr>


<lebel for="image">Image: </lebel>
<input type="file" name="uploadfile">
 <hr>

<lebel for="price">price: </lebel>
<input type="text" name="price" id="price" value="<?php echo "$_GET[pri]"
?>" required=''>

 <hr>

Category:
       <select name="category"required=''>
        <option value="books">Books</option>
         <option value="sports">Sports</option>
         <option value="fashion">Fashion</option>
         <option value="electronics">Electronics</option>
      </select>


<br>
 <hr>




<input type="submit" class="button1" name="insert" value="Insert">
</fieldset>
</form>

       </td>
 </tr>
 </table>
 

</body>
</html>
