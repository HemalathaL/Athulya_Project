<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
          <link rel="icon" type="image/png" sizes="96x96" href="logo.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="96x96" href="logo.png">
         
        <title>Athulya Assisted Living</title>
    </head>
    <style>
        body
        {
/*            background-image: url(1.jpg);
            font-family: 'Poppins', sans-serif;*/
        }
        #form
        {
            background-color: white;
            border:2px solid white;
            border-radius: 8px;
            margin-top: 134px;
            padding: 24px;
            box-shadow: 0 5px 10px wheat;
        }
        #home
        {
            color:rgb(239,72,130);
        }
        .form-label
        {
            color: rgb(5,99,150);
        }
        input[type=text] 
         {
            padding: 5px;
            margin-top: 6px;
            font-size: 12px;
            border: 1px solid;
            border-color: wheat;
            border-radius: 2px;
            width:300px;
         }
           input[type=text]:hover 
           {
            box-shadow: 0 5px 10px wheat;
          }
        input[type=text]:focus 
        {
          box-shadow: 0 5px 10px wheat;
          outline: none;
        }
     .sub
       {

            padding: 8px;
            height: 50px;
            width:100px;
            margin-right: 34px;
            background-color: rgb(239,72,130);
            color: white;
            font-size: 13px;
            font-weight: 700;
            border: 1px solid;
            cursor: pointer;
            border-radius: 5px;
       }
        .sub:hover
            {
                background-color:rgb(23,98,147);
            }
        .header
        {
            height: 100vh;
        }
       .navbar-style
       {
         box-shadow: 0 5px 10px wheat;
       }
        .logo
        {
            height: 48px;
            padding: 2px 10px;
        }
/*       .but
            {
                line-height: 50px;
                background: #fafafa; 
                box-shadow: inset 0 1px 3px 0 rgb(0 0 0 / 8%);
                border-radius: 5px;
                padding: 0 20px;
                font-size: 16px;
                color: #666;
                transition: all .4s ease;
                width: 289px;
               
            }
         .sub
            {
                padding: 10px 25px;
                background-color: green;
                opacity: 0.7;
                text-align: center;
                color: white; 
                border:none;
                border-radius: 2px;
            }
            .sub:hover
            {
                background-color: green;
                opacity: 1;
                text-align: center;
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
                color: white; 
            } */
      
    </style>
    <body>
        <header>
        <nav class="navbar navbar-style">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href=""><img class="logo" src="logo.png"></a>
                     </div>
                </div>
        </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4" id="form">
                    <h3 class="text-center" id="home">Facility</h3><br>
                    <form action="masterdb.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                         <label for="inputname" class="form-label">Location</label> 
                         <input type="text" class="but"id="product" name="loc">
                    </div>    
                    <div class="form-group">
                         <label for="inputname" class="form-label">Branch</label> 
                         <input type="text" class="but"id="product" name="branch">
                    </div>    
                    <br>
                     <div class="form-group">
                         <label for="inputname" class="form-label">Abbreviation</label> 
                         <input type="text" class="but" id="product" name="abb">
                    </div>
                    <div class="col-md-6 col-md-offset-4"><br><br>
                        <button class="sub">Submit</button> 
                        
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>
