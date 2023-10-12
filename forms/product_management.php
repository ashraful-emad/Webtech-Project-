
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
         table, th, td {
  border: 1px solid;
  text-align: center;
}

table {
  width: 100%;
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
                            <li><a href="admin_home.php"class="btn">Home</a></li> 
                            
                            <li><a href="logout.php"class="btn">Logout</a></li>
                            
                        </ul>      
                    </nav>    
            </div> 
            
        </div>
     </div>  

<a href="insert_product_form.php"class="btn">Insert Product</a>

     <?php
include '../control/config.php';
 // select or read data start
$sql = "SELECT id, name, image,price,category FROM tbl_product";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
    echo "<table>
    <tr> 
      <th>Id</th>  
      <th>Name</th> 
      <th>Image</th>  
      <th>Price</th>  
      <th>Category</th>  
      <th colspan='2'>Action</th>  

    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
         echo "<tr > 
        <td>" . $row["id"]. "</td> 
         <td>" . $row["name"]. "</td>
         <td><img src='" .$row["image"]."'height='150px'width='200px'> </td>
          
          <td>" . $row["price"]. "</td>
          <td>" . $row["category"]. "</td>
        <td><a href='../forms/update_product_form.php?rn= $row[id]&na=$row[name]&img=$row[image]&pri=$row[price]&cate=$row[category]'>Edit/update </td>
          <td><a href='../forms/delete_product_form.php?rn= $row[id]&na=$row[name]&img=$row[image]&pri=$row[price]&cate=$row[category]'>Delete </td>
         </tr>";


echo '<script>alert("$session["massage"]")</script>'; 

        
       

    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
<br>
<?php include 'footer.php';?>

</body>
</html> 