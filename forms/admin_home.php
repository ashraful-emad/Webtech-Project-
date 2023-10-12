
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Go-Buy.com || Ecommerce Website </title>

<link rel="stylesheet" href="../css/home.css"/>
</head>

<style >
    body{
          background-color: papayawhip;
            background-size: cover;
            margin: 0;
            text-align: center;
            background-repeat: no-repeat;
            max-width: 100%;
            padding: 50px 0;
            font-family: 'Poppins', sans-serif;
         }
</style>
<body>
     <?php include 'header.php';?>
     <br>
     <br>
     <br> 
 <div class="header">
        <div class="container">
            <div class="navbar">
                    <nav>
                          <ul>
                            <li><a href="admin_profile.php"class="btn">Profile</a></li>
                            <li><a href="admin_home.php"class="btn">Home</a></li> 
                            <li><a href="user_home.php"class="btn">User view</a></li>
                            <li><a href="logout.php"class="btn">Logout</a></li>
                            
                        </ul>
                         
                        <div class="categories-list">
                            <a href="user_management.php" class="single-category">
                                <img src="../picture/usermangement.jpg" alt="" />
                                <div class="category-title">User Management</div>
                              </a>
                      
                              <a href="rider_management.php" class="single-category">
                                <img src="../picture/Rider.png" alt="" />
                                <div class="category-title">Rider Management</div>
                              </a>
                      
                              <a href="product_management.php" class="single-category full-width">
                                <img src="../picture/electronics.jpg" alt="" />
                                <div class="category-title">Product Management</div>
                              </a>
                              <a href="admin_management.php" class="single-category">
                                <img src="../picture/admin.jpg" alt="" />
                                <div class="category-title">Admin Management</div>
                              </a>
            
                              </a>
                        </div>        
                    </nav>    
            </div> 
            
        </div>
     </div> 
     <br>
     <br>
     <br> 
     <br>
     <br>
     <br> 
     <br>
     <br>
     <br> 
     <br>
     <br>
     <br> 
     
<?php include 'footer.php';?>

</body>
</html>