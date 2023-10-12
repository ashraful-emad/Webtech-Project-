<?php

include '../control/cart_valid.php';
?>
 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>My Cart</title>  
           
           <link rel="stylesheet" href="../css/home.css"/>
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
         table, th, td {
  border: 1px solid;
  text-align: center;

}
table {
  width: 100%;
  height:200px;
}



</style>
<body>
     <?php include 'header.php';?>
 <div class="header">
        <div class="container">
            <div class="navbar">
                    <nav>
                          <ul>
                             <li><a href=""class="btn">Profile</a></li>
                            <li><a href="user_home.php"class="btn">Home</a></li> 
                            <li><a href="logout.php"class="btn">Logout</a></li>
                            
                        </ul> 
      
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="mycart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table> 
                    </nav> 
                </div>  
	  </body>  
       <?php include 'footer.php';?>
 </html>
 