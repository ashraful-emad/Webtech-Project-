<!DOCTYPE html>
<html lang="en">
<head>
    <title>Go-Buy.com || Ecommerce Website </title>

<link rel="stylesheet" href="../css/home.css"/>
</head>


<body>
  
     <?php include 'header.php';?>
 <div class="header">
  
        <div class="container">
          <hr>
       
            <div class="navbar">
                    <nav>
                   
                        <ul>
                            <li><a href="user_profile.php"class="btn">Profile</a></li>
                            <li><a href="mycart.php"class="btn">My Cart</a>
                            <li><a href="contact.php"class="btn">Contact</a>  
                            <li><a href="logout.php"class="btn">Logout</a></li>
                           
                        </ul>
                        <hr> 
                        <br>
                        <br>
                       

                        <div class="slider">
                          <img class="mySlides" src="../picture/slider 1.webp" style="width:100%">
                          <img class="mySlides" src="../picture/slider 2.jpg" style="width:100%">
                          <img class="mySlides" src="../picture/slider 3.webp" style="width:100%">
                          <img class="mySlides" src="../picture/slider 4.webp" style="width:100%">
                        </div>
                        
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
                        <div class="categories-list">
                            <a href="books.php" class="single-category">
                                <img src="../picture/book.jpg" alt="" />
                                <div class="category-title">Books</div>
                              </a>
                      
                              <a href="sports.php" class="single-category">
                                <img src="../picture/sports.jpg" alt="" />
                                <div class="category-title">Sports</div>
                              </a>
                      
                              <a href="electronics.php" class="single-category full-width">
                                <img src="../picture/electronics.jpg" alt="" />
                                <div class="category-title">Electronics</div>
                              </a>
                              <a href="fashion.php" class="single-category full-width">
                                <img src="../picture/fashion.jpg" alt="" />
                                <div class="category-title">Fashion</div>
                              </a>
                        </div>        
                    </nav>    
            </div> 
            
        </div>
     </div>  
    
     <br>
     <br>
<?php include 'footer.php';?>

</body>
</html>