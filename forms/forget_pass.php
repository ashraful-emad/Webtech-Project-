<?php

@include 'config.php';

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
   
     
</div>
 
    </nav>	     
	 <div class="reg">
			<form name= "regform" onsubmit ="return validateForm();" action = "../control/forget_password.php"  method="POST" >
		       

		        <label>ID</label> 
				<input type="text" name="id" id = "id" value=""><span style= "color:red" id = "alert"></span>
                 <br><hr> 

		        
				 <label>E-mail</label>
				<input type="text" name="email" id = "email" value=""><span style= "color:red" id = "alert1"></span>
                <br><br><hr>
				
				<label>Password</label>
				<input type="Password" name="password" id = "password"value="" ><span style= "color:red" id = "alert4"></span>
				
                <input type="checkbox" name="showpassword" id="showpassword" onclick="myFunction()">

                <label for="showpassword">Show password</label>
				<br><br><hr>
				<label>Confirm Password</label>
				<input type="Password" name="cpassword" id = "cpassword"><span style= "color:red" id = "alert5"></span> 
				<br><br><hr>


				
                <input type="submit" name="reset" value="Reset">
			   
				<?php if (isset($_GET['error'])) { ?>
			    <p class="error" style="color:red; font-size: 100%; font-weight: bold;"><?php echo $_GET['error']; ?></p><?php }?>
			   
			
		</div>
          
				
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

<script src="../js/forget_pass.js"></script>
   
   
  


</body>
</html>
