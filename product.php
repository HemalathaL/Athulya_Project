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
/*                background: linear-gradient(90deg, rgba(5,99,150,0.79) 4%, rgba(236,64,122,0.79) 66%);*/
/*             background-color: rgb(207, 216, 220);*/
/*             background-color: rgb(241,241,241);*/

        }
        #home
        {
            color:rgb(236,64,122);
            font-weight: bold;
        }
        label
        {
           color: rgb(5,99,150);
        }
         #form
        {
            
            background-color: white;
/*            border:2px solid white;*/
            border-radius: 8px;
            margin-top: 34px;
/*            box-shadow: 0 8px 20px 0 ;*/
            box-shadow: 0 5px 10px wheat;
/*           font-family: 'Poppins', sans-serif;*/
            
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
       
/*        .but
            {
                line-height: 50px;
                background: #fafafa; 
                box-shadow: inset 0 1px 3px 0 rgb(0 0 0 / 8%);
                box-shadow: 0 5px 10px wheat;
                border-radius: 5px;
                padding: 0 20px;
                font-size: 16px;
                color: #666;
               
                width: 289px;               
            }*/
/*         .but1
         {
             box-shadow: 0 5px 10px wheat;
             width: 289px;    
             height: 38px;
             border-radius: 5px;
              border-color: wheat;
             line-height: 50px;
              padding: 0 20px;
             font-size: 16px;
              color: #666;
            transition: all .4s ease;
         }*/
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
            margin-right: 64px;
            background-color: rgb(239,72,130);
            color: white;
            font-size: 13px;
            font-weight: 700;
            border: 1px solid;
            cursor: pointer;
            border-radius: 5px;
       }
/*            .sub
            {
                padding: 10px;
                background-color: green;
                opacity: 0.7;
                text-align: center;
                color: white; 
                border:none;
                border-radius: 2px;
            }*/
/*            .sub:hover
            {
                background-color: green;
                opacity: 1;
                text-align: center;
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
                color: white; 
            } */
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
           #code
           {
               width: 85px;
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
                
                <div class="col-md-9 col-md-offset-2 " id="form">
                    <h3 class="text-center" id="home"><b>Product Details</b></h3><br>
              <form action="productdb.php" method="POST" enctype="multipart/form-data">                   
                    <div class="form-group">
                        <div class="row h">
                        <div class="col-md-6 pp">
                            <div class="col-md-6 col-md-offset-2" >
                                <label for="inputname" class="form-label">Vendor</label> 
                                <input type="text" class="but1" name="vendor">
                            </div>
                        </div>
                         <div class="col-md-6 pp">
                           <div class="col-md-4 col-md-offset-2">
                               <label class="form-label">Product Code</label> <br>
                                 <?php
                                  $conn=  mysqli_connect('localhost', 'root','','master');
                                  $query=mysqli_query($conn,"Select * from branch");
                                 ?>
                               <select name="productcode" class="select1" style="width:190px;">           
                                     <?php
                                     while($r=mysqli_fetch_array($query))
                                     {
                                         $a="ATH-"
                                         ?>
                                     <option class="form-control"><?php echo $a."".$r['Abbreviation'] ?></option>
                                      
                                     <?php
                                     }
                                     ?>
                                 </select>
                                  
                            </div> 
                             <div class="col-md-4 col-md-offset-2" style="margin-top:23px;">
                                <input type="text" class="but1" name="code" id="code"> 
                             </div>
                        </div>
                        </div>
                           
                        <div class="row h">
                         <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2" >
                               <label class="form-label" >Device Type</label> <br>
                               <?php
                                  $conn=  mysqli_connect('localhost', 'root','','master');
                                  $query=mysqli_query($conn,"Select * from device");
                                 ?>
                               <select name="devicetype" class="select1">
                                     <?php
                                     while($r=mysqli_fetch_array($query))
                                     {
                                         
                                         ?>
                                     <option class="but1"><?php echo $r['Device'] ?></option>
                                     <?php
                                     }
                                     ?>
                                     
                                 </select>
<!--                                 <input type="text" class="form-control but" name="devicetype" id="product">-->
                            </div> 
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2">
                                 <label class="form-label">Description</label> 
                                 <input type="text" class="but1" name="desc">
                            </div> 
                        </div>
                        </div>
                        <div class="row h">
                         <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2" >
                                 <label class="form-label">HSN/SAC</label> 
                                 <input type="text" class="but1" name="hsn">
                            </div> 
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2">
                                 <label class="form-label">Invoice No</label> 
                                 <input type="text" class="but1" name="invoiceno">
                            </div> 
                        </div>
                        </div>
                       
                        <div class="row h">
                         <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2" >
                                 <label class="form-label">Invoice Date</label> 
                                 <input type="text" class="but1" name="invoicedate">
                            </div> 
                        </div>
                         <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2">
                                 <label class="form-label">Sup Ref No</label> 
                                 <input type="text" class="but1" name="supref">
                            </div> 
                        </div>
                        </div>
                        <div class="row h">
                         <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2" >
                                 <label class="form-label">Quantity</label> 
                                 <input type="text" class="but1" name="qty">
                            </div> 
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2">
                                 <label class="form-label">Amount</label> 
                                 <input type="text" class="but1"name="amt">
                            </div> 
                        </div>    
                        </div>
                        <div class="row h">
                         <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2" >
                                 <label class="form-label">CGST 9%</label> 
                                 <input type="text" class="but1" name="cgst">
                            </div> 
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2">
                                 <label class="form-label">SGST 9%</label> 
                                 <input type="text" class="but1" name="sgst">
                            </div> 
                        </div>
                        </div>
                        <div class="row h">
                         <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2" >
                                 <label class="form-label">Warranty</label> 
                                 <input type="text" class="but1" name="warranty">
                            </div> 
                        </div>
                          <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2">
                                 <label class="form-label">Expiry Date</label> 
                                 <input type="text" class="but1" name="expiry">
                            </div> 
                        </div>
                        </div>
                        <div class="row h">
                         <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2">
                                 <label class="form-label">Emp Code</label> 
                                 <input type="text" class="but1" name="empcode">
                            </div> 
                        </div>
                         <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2">
                                 <label class="form-label">Emp Name</label> 
                                 <input type="text" class="but1" name="empname">
                            </div> 
                        </div>
                        </div>
                        <div class="row h">
                         <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2" >
                                 <label class="form-label">Facility</label> 
                                 <input type="text" class="but1" name="facility">
                            </div> 
                        </div>
                        </div>
                        <div class="row h">  
                            <div class="col-md-6">
                                 <div class="col-md-6 col-md-offset-5"><br><br>
                                     <input type="submit" class="sub" value="Edit" name="update">
                                 </div>
                              </div>
                            <div class="col-md-6">
                                <div class="col-md-6 col-md-offset-5"><br><br>
                                    <input type="submit" class="sub" value="Add Product" name="add">
                                </div>
                            </div>
                        </div>
                     </div>
                    </form>    
                </div>
            </div>
          </div>
     </body>
    </html>