<?php
include  '../control/update_rider.php';
?>

<?php
include '../control/config.php';
error_reporting(0);
$rn = $_GET['rn'];
$na = $_GET['na'];
$em= $_GET['em'];
$us = $_GET['us'];

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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <?php
      if(isset($error)){
         foreach($error as $error){
           
         echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?><br>
<fieldset>
<lebel for="name">ID: </lebel>
<br>
<input type="text" name="id" id="id" value="<?php echo "$_GET[rn]"
?>" required=''>
 <hr>


<lebel for="name">Name: </lebel>
<span class="error">* <?php echo $nameErr;?></span>
<br>
<input type="text" name="name" id="name" value="<?php echo "$_GET[na]"
?>" required=''>
 <hr>


<lebel for="email">Email: </lebel>
<span class="error">* <?php echo $emailErr;?></span>
<br>
<input type="text" name="email" id="email" value="<?php echo "$_GET[em]"
?>"required=''>

 <hr>



 <hr>



User:
       <select name="user_type"required=''>
        <option value="rider">Rider</option>
         <option value="user">User</option>
         <option value="admin">Admin</option>
      </select>


<br>



<input type="submit" class="button1" name="update" value="Update">
</fieldset>
</form>

       </td>
 </tr>
 </table>
    <script>
        function myFunction() {
  var password = document.getElementById("password");
  if (password.type === "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
}
    </script>
<?php include 'footer.php';?>
</body>
</html>
