<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go-Buy.com || Ecommerce Website </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet"> 
</head>
<body>
    <style>
   
        .logo{
            height: 1050px;
            font-size: large ;
            font-style: italic;
            font-weight: 100000;
            color: blueviolet;
            
            
            }
            .navbar{
                display: flex;
                align-items: center;
                padding: 10px;
                
            }
            nav{
                flex: 1;
                text-align: right;
                height: 1000px;
            }
            nav ul{
                display: inline-block;
                list-style-type: none;
            }
            nav ul li{
                display: inline-block;
                margin-right: 20px;
            }
          
            .container{
                max-width: 1300px;
                margin: auto;
                padding-left: 10px;
                padding-right: 10px;
                padding-top: 20px;
               
            }
            .btn{
                display: inline-block;
                background: #ff523b;
                color: #fff;
                padding: 8px 30px;
                margin: 30px 0 ;
                border-radius: 30px;
                transition: 0.5s;
            }
            .btn:hover{
                background: #563434;
            }
            .header{
                margin-top: 10px;
            }

           
    </style>
 <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <h1>Go-Buy</h1>           
            </div>
           
                <nav>
                    <ul>
                        <li><a href="user_home.php"class="btn">Home</a></li>
                           
                        <li><a href="contact.php"class="btn">Contact</a></li>
                        <li><a href="logout.php"class="btn">Logout</a></li>
                        
                    </ul>
                </nav>
        
               
            
        </div>
             
    </div>
      
    </div>

 </div>   

</body>
</html>