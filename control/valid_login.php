<?php

include '../control/config.php';

session_start();

$emptyInput = false;

if(isset($_POST['login'])){


$email = $_POST['email'];
$password = $_POST['password'];


   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

       if($email == "" || $password==""){
          $_SESSION['emptyemail'] = true;
    $emptyInput = true;
      
    }




   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){
         $_SESSION['admin_id'] = $row['id'];
         $_SESSION['admin_name'] = $row['name'];
		  $_SESSION['admin_email'] = $email;
		 $_SESSION['admin_pass'] = $password;
         header('location:../forms/admin_home.php');

      }elseif($row['user_type'] == 'user'){
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['user_name'] = $row['name'];
		  $_SESSION['user_email'] = $row['email'];
		 $_SESSION['user_pass'] = $password;
         header('location:../forms/user_home.php');

      }elseif($row['user_type'] == 'rider'){
         $_SESSION['rider_id'] = $row['id'];
         $_SESSION['rider_name'] = $row['name'];
		  $_SESSION['rider_email'] = $row['email'];
		 $_SESSION['rider_pass'] = $password;
         header('location:../forms/rider_home.php');

      }
     
   }
   function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($_POST['remember'])){
$remember =$_POST['remember'];


if($remember==1){

setcookie('uname',$email,time()+60*60*24,"/");
setcookie('pass',$password,time()+60*60*24,"/");

}
}
 
$conn->close();
};
?>
