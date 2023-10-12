
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
                             <li><a href="admin_profile.php"class="btn">Profile</a></li>
                            <li><a href="admin_home.php"class="btn">Home</a></li> 
                            
                            <li><a href="logout.php"class="btn">Logout</a></li>
                            
                        </ul> 
                        <?php
include '../control/config.php';
 // select or read data start
$sql = "SELECT id, name, email,user_type FROM user_form
where user_type='rider'";
$result = $conn->query($sql);





if ($result->num_rows > 0) {
    echo "<table>
    <tr> 
    <th>ID</th> 
    <th>Name</th> 
    <th>Email</th>
    <th>User_type</th>
    <th colspan='2' >Operation</th>

    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr > 
        <td>" . $row["id"]. "</td> 
         <td>" . $row["name"]. "</td>
         <td>" . $row["email"]. "</td>
         <td>" . $row["user_type"]. "</td>
         <td><a href='../forms/update_rider_form.php?rn= $row[id]&na=$row[name]&em=$row[email]&us=$row[user_type]'>Edit/update </td>
           <td><a href='../forms/delete_rider_form.php?rn= $row[id]&na=$row[name]&em=$row[email]&us=$row[user_type]'>Delete </td>
        
        </tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
<br>     
                    </nav>    
            </div> 
            
        </div>
     </div>  
     
<?php include 'footer.php';?>

</body>
</html>