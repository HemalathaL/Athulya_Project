<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <style>
        body
        {
            background-image: url(1.jpg);
/*              background-color:white;
          */
        }
        #form
        {
            background-color:rgb(5,99,150);
            background-color: white;
            border:2px solid white;
            border-radius: 8px;
            margin-top: 194px;
            padding: 24px;
           
            
        }
        .but
            {
/*                background: linear-gradient(to right,rgb(236,64,122) 50%,white 50%);*/
              background: linear-gradient(to right, #6da0ed 50%, white 50%);
              background-size: 200% 100%; 
              background-position: right bottom;
              transition: all .5s ease-out;   
              font-size: 15px;
              
            }
        .but:hover
        {
            font-weight:bold;
            background-position: left bottom;
            color:#ffff;
            border-bottom:1px solid #6da0ed;       
        }
        
      
    </style>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4" id="form">
                    <h3 class="text-center" id="home">Asset Management</h3><br>
                    <div class="form-group">
                        <a href="product.php" style="text-decoration:none;"><input type="button" class="form-control but" value="Product Details" id="product"></a>
                    </div>    
                    <br>
                     <div class="form-group">
                         <a href="vendor.php" style="text-decoration:none;"><input type="button" class="form-control but" value="Vendor Details" id="product"></a>
                    </div>    
                </div>
            </div>
        </div>
        
    </body>
</html>
