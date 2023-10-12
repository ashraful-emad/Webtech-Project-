<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
	
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Profile</title>

   <!-- custom css file link  -->
  

</head>
<body>
  
<style >
    body{
           background-image: url("../picture/back1.jpg");
            background-size: cover;
            margin: 0;
            text-align: center;
            background-repeat: no-repeat;
            max-width: 100%;
            padding: 50px 0;
            font-family: 'Poppins', sans-serif;
         }
         table, th, td {
  border: 1px solid;
  text-align: center;

}
table {
  width: 100%;
  height:200px;
}
.reg{
   
     display: inline;
     text-align:left;
     padding: auto;
    
     
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 3px solid #555;
}



</style>
<?php include 'header.php';?>

	 <fieldset class="reg">
			<form name= "regform" onsubmit ="return validateForm();" action = "../control/admin_profile_update.php"  method="POST" >
		       

		       
				<input type="hidden" name="id" id = "id" value="<?php echo $_SESSION['admin_id'] ?>"></span>
                

		        <label>Name</label> 
				<input type="text" name="name" id = "name" value="<?php echo $_SESSION['admin_name'] ?>"><span style= "color:red" id = "alert"></span>
                 <br><hr>
				 <label>E-mail</label>
				<input type="text" name="email" id = "email" value="<?php echo $_SESSION['admin_email'] ?>"><span style= "color:red" id = "alert1"></span>
                <br><br><hr>
				
				<label>Password</label>
				<input type="Password" name="password" id = "password"value="<?php echo $_SESSION['admin_pass'] ?>" ><span style= "color:red" id = "alert4"></span>
				
                <input type="checkbox" name="showpassword" id="showpassword" onclick="myFunction()">

                <label for="showpassword">Show password</label>
				<br><br><hr>
				<label>Confirm Password</label>
				<input type="Password" name="cpassword" id = "cpassword"><span style= "color:red" id = "alert5"></span> 
				<br><br><hr>


				
                <input type="submit" name="update" value="update">
			   
				<?php if (isset($_GET['error'])) { ?>
			    <p class="error" style="color:red; font-size: 100%; font-weight: bold;"><?php echo $_GET['error']; ?></p><?php }?>
			   
			
		</fieldset>
          
				
			</form>
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

<script src="../js/admin_profile.js"></script>
<br>
<br>
<br>
<br>
<br>
   
<td ><?php include 'footer.php';?></td>


</body>
</html>
