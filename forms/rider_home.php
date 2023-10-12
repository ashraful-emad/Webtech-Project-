<!DOCTYPE html>
<html lang="en">
<head>
    <title>Go-Buy.com || Ecommerce Website </title>

<link rel="stylesheet" href="../css/home.css"/>
</head>


<body>
    <style>
        .categorie {
            display: grid;
            grid-template-columns: 1fr  ;
            gap: 3px;
            text-align: center;
            font-style: italic;
            font-size: 20px; 
            padding-top: 70px;     
    }
         .categorie img {
           width: 30%;
           height: 70%;
           object-fit: cover;
    }
    .mySlides {
        display:none;
    }
    .slider img{
        max-width: 100%;
        height: 500px; 
        
    }
    .category-title{
        font-style: italic;
        color: #ff523b;
        font-family: 'Courier New', Courier, monospace;
    }
    </style>
  
     <?php include 'header.php';?>
 <div class="header">
  
        <div class="container">
          <hr>
       
            <div class="navbar">
                    <nav>
                   
                        <ul>
                            <li><a href="rider_profile.php"class="btn">Profile</a></li>
                            <li><a href="contact.php"class="btn">Contact</a>  
                            <li><a href="logout.php"class="btn">Logout</a></li>
                           
                        </ul>
                        <hr> 
                        <br>
                        <br>
                       

                        <div class="slider">
                          <img class="mySlides" src="../picture/rider1.jpg" style="width:100%">
                          <img class="mySlides" src="../picture/rider2.webp" style="width:100%">
                          <img class="mySlides" src="../picture/rider3.png" style="width:100%">
                          
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
  setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script>
                        <div class="categorie">
                            <a href="books.php" class="single-category">
                                <img src="../picture/order.jpeg" alt="" />
                                <div class="category-title">Take Orders</div>
                              </a>
                        </div>        
                    </nav>    
            </div> 
            
        </div>
     </div>  
    
<?php include 'footer.php';?>

</body>
</html>