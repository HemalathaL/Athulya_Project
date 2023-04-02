<html>
    <head>
        <meta charset="UTF-8">
          <link rel="icon" type="image/png" sizes="96x96" href="logo.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <title>Athulya Assisted Living</title>
    </head>
    <style>
        body
        {
/*            background-image: url(1.jpg);*/
/*                background-color: rgb(241,241,241);*/
          
        }
        #home
        {
            color: rgb(239,72,130);
        }
         #form
        {
            background-color: white;
            border:2px solid white;
            border-radius: 8px;
            margin-top: 94px;
         box-shadow: 0 8px 20px 0 ;
/*           font-family: 'Poppins', sans-serif;*/
            
        }
        .form-label
        {
           color:rgb(23,98,147);
        }
         input[type=text] 
         {
            padding: 5px;
            margin-top: 6px;
            font-size: 12px;
            border: 1px solid;
            border-color: wheat;
            border-radius: 2px;
            width:289px;
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
            float: right;
            padding: 8px;
            height: 50px;
            width:100px;
            margin-right: 344px;
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
           select
           {
               padding: 5px;
            margin-top: 6px;
            font-size: 12px;
            border: 1px solid;
            border-color: wheat;
            border-radius: 2px;
            width:289px;
               
           }
         .select1 :hover
         {
            box-shadow: 0 5px 10px wheat; 
         }
         .select1 :focus
         {
            box-shadow: 0 5px 10px wheat;
          outline: none; 
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
/*        .but
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
                padding: 10px;
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
                 
                <div class="col-md-9 col-md-offset-2" id="form">
                    <h3 class="text-center" id="home">Vendor Details</h3><br>
                    <form action="vendordb.php" method="POST" enctype="multipart/form-data">          
                    <div class="form-group">
                        <div class="col-md-6">
                            <div class="col-md-6 col-md-offset-2" >
                                <label for="inputname" class="form-label">Vendor Code</label> 
                                <input type="text" class="but" name="code">
                            </div>
                        </div>
                        <div class="col-md-6" >
                           <div class="col-md-6 col-md-offset-2">
                                 <label class="form-label">Vendor Name</label> 
                                 <input type="text" class="but" name="name">
                            </div> 
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2" >
                                 <label class="form-label">GST/UIN No</label> 
                                 <input type="text" class="but" name="gst">
                            </div> 
                        </div>
                         <div class="col-md-6" >
                           <div class="col-md-6 col-md-offset-2">
                                 <label class="form-label">VAT No</label> 
                                 <input type="text" class="but" name="vat">
                            </div> 
                        </div>
                        <div class="col-md-6" >
                           <div class="col-md-6 col-md-offset-2">
                                 <label class="form-label">CST No</label> 
                                 <input type="text" class="but" name="cst">
                            </div> 
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2">
                                 <label class="form-label">Pan No</label> 
                                 <input type="text" class="but" name="pan">
                            </div> 
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2" >
                                 <label class="form-label">Contact No</label> 
                                 <input type="text" class="but" name="contact">
                            </div> 
                        </div>
                        <div class="col-md-6" >
                           <div class="col-md-6 col-md-offset-2" >
                                 <label class="form-label">Address1</label> 
                                 <input type="text" class="but" name="add1">
                            </div> 
                        </div>
                        <div class="col-md-6" >
                           <div class="col-md-6 col-md-offset-2" >
                                 <label class="form-label">Address2</label> 
                                 <input type="text" class="but" name="add2">
                            </div> 
                        </div>
                        <div class="col-md-6" >
                           <div class="col-md-6 col-md-offset-2">
                                 <label class="form-label">Address3</label> 
                                 <input type="text" class="but" name="add3">
                            </div> 
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2" >
                                 <label class="form-label">Address4</label> 
                                 <input type="text" class="but" name="add4">
                            </div> 
                        </div>
                        <div class="col-md-6" >
                           <div class="col-md-6 col-md-offset-2" >
                                 <label class="form-label">Mobile</label> 
                                 <input type="text" class="but" name="mob">
                            </div> 
                        </div>
                        <div class="col-md-6" >
                           <div class="col-md-6 col-md-offset-2" >
                                 <label class="form-label">Contact Person</label> 
                                 <input type="text" class="but" name="contact">
                            </div> 
                        </div>
                        <div class="col-md-6" >
                           <div class="col-md-6 col-md-offset-2">
                                 <label class="form-label">Email Id</label> 
                                 <input type="text" class="but" name="email">
                            </div> 
                        </div>
                        <div class="row text-center">
                            <div class="col-md-12"><br><br>
                                <input type="submit" class="sub" name="save" value="Save">
                        </div>
                        </div>
                      
                    </div>    
             </form>
                </div>
                

            </div>
        </div>
        
    </body>
</html>