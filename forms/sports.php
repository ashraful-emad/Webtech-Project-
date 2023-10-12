<?php

include '../control/cart_valid.php';
?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Sports</title> 
           <link rel="stylesheet" href="../css/productpage.css"/>   
        
      </head>  
      <body>  
      <?php include 'header.php';?>
      <?php include 'topnav.php';?> 
     
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Sports</h3><br />  
                <?php  
                $query = "SELECT * FROM tbl_product where category='sports'";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="sports.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
               
           </div>  
           <br />  
           <?php include 'footer.php';?>
      </body>  
 </html>
   