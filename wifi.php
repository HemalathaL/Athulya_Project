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
/*                 background-color: rgb(241,241,241);*/

        }
        #home
        {
            color:rgb(236,64,122);
            
        }
        label
        {
           color: rgb(5,99,150);
           font-size: 12px;
           
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
          input[type=date] 
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
         input[type=date]:hover
         {
          box-shadow: 0 5px 10px wheat;
         }
        input[type=date]:focus 
        {
          box-shadow: 0 5px 10px wheat;
          outline: none;
        }
/*       select :hover
        {
           box-shadow: 0 5px 10px wheat; 
        }
        select :focus{
            box-shadow: 0 5px 10px wheat;
          outline: none;  
        }*/
         .sub
       {
            float: right;
            padding: 6px;
            height: 39px;
            width:100px;
            margin-right: 124px;
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
/*            .sub
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
/*           select
           {
               width:289px;
               line-height: 50px;
                background: #fafafa; 
                box-shadow: inset 0 1px 3px 0 rgb(0 0 0 / 8%);
 box-shadow: 0 5px 10px wheat; 
                border-radius:5px;
                font-size: 20px;
                color: #666;
                transition: all .4s ease;
               
           }*/
           select
           {       
            padding: 5px;
            margin-top: 6px;
            font-size: 12px;
            border: 1px solid;
            border-color: wheat;
/*             box-shadow: 0 5px 10px wheat; */
            border-radius: 2px;
            width:289px;

           }
           
       input[type="radio"]{
            accent-color: rgb(236,64,122);
        }

     </style>
     <body onload="loaded();">
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
             
                <div class="col-md-4 col-md-offset-4 " id="form">
                    <h3 class="text-center" id="home"><b>WiFi Password</b></h3><br>
                    <form action="#" method="POST">                   
                    <div class="form-group">
                        <div class="row h">
                        <div class="col-md-6 pp">
                            <div class="col-md-6 col-md-offset-2" >
                                <label class="form-label">Branch</label> <br>
                                 <?php
                                  $conn=  mysqli_connect('localhost', 'root','','master');
                                  $query=mysqli_query($conn,"Select * from branch");
                                 ?>
                               <select name="branch" class="st1">           
                                     <?php
                                     while($r=mysqli_fetch_array($query))
                                     {
                                        
                                         ?>
                                     <option class="form-control"><?php echo $r['Abbreviation'] ?></option>
                                      
                                     <?php
                                     }
                                     ?>
                                 </select>
                            </div>
                        </div>
                        </div> <br>
                        <div class="row h">
                          <div class="col-md-12 pp">
                            <div class="col-md-8 col-md-offset-1">
                                <label class="form-label">Status</label> <br>
                                <input type="radio" name="a" value="Room" onclick="text(0)" checked> &nbsp;&nbsp;<span style="color: rgb(5,99,150);font-size: 12px;font-weight: bold;">Room</span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="a" value="Office" onclick="text(1)" >&nbsp;&nbsp;<span style="color: rgb(5,99,150);font-size: 12px;font-weight: bold;">Office</span>
                            </div>
                         </div>
                       </div> <br>
                       <div class="input" id="mycode">
                           <div class="row h">
                               <div class="col-md-12 pp">
                                    <div class="col-md-8 col-md-offset-1" >
                                        <label class="form-label">Floor</label> <br>
                                        <input type="text" class="but1" name="floor">
                                    </div>
                              </div>    
                           </div><br>
                            <div class="row h">
                               <div class="col-md-12 pp">
                                    <div class="col-md-8 col-md-offset-1" >
                                        <label class="form-label">Room</label> <br>
                                        <input type="text" class="but1" name="room">
                                    </div>
                              </div>  
                           </div><br>
                           <div class="row h">
                               <div class="col-md-12 pp">
                                    <div class="col-md-8 col-md-offset-1" >
                                        <label class="form-label">Password</label> <br>
                                        <input type="text" class="but1" name="pass">
                                    </div>
                              </div>  
                           </div><br>
                       </div>
                       <div class="input1" id="mycode1">
                            <div class="row h">
                               <div class="col-md-12 pp">
                                    <div class="col-md-8 col-md-offset-1" >
                                        <label class="form-label"></label> <br>
                                        <select name="sts" class="st1">           
                                          <option class="form-control">Reception</option>   
                                          <option class="form-control">Conference</option> 
                                          <option class="form-control">Kitchen</option> 
                                          <option class="form-control">Canteen</option> 
                                          <option class="form-control">Physiotherapy</option> 
                                          <option class="form-control">Activity</option> 
                                          <option class="form-control">Library</option> 
                                          <option class="form-control">Counciling</option> 
                                          <option class="form-control">Discussion</option> 
                                          <option class="form-control">Office</option> 
                                          <option class="form-control">Corridor</option> 
                                          <option class="form-control">Pharmacy</option> 
                                        </select>
                                    </div>
                              </div>  
                           </div><br>
                           <div class="row h">
                               <div class="col-md-12 pp">
                                    <div class="col-md-8 col-md-offset-1" >
                                        <label class="form-label">Password</label> <br>
                                        <input type="text" class="but1" name="pass">
                                    </div>
                              </div>  
                           </div><br>
                       </div>
            </div> 
              </form>   
          </div>
       </div>
          </div> 
         <script>
          function loaded()
          {
              document.getElementById("mycode1").style.display="none";
          }
         </script>
         <script>
          
          function text(x)
          {
              if(x==0) document.getElementById("mycode").style.display="block";
              else document.getElementById("mycode").style.display="none";
              if(x==1) document.getElementById("mycode1").style.display="block";
              else document.getElementById("mycode1").style.display="none";
              return;
          }
        
         </script>
          </body>
    </html>