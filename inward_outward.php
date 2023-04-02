<?php
  $id=NULL;
  $conn=mysqli_connect('localhost','root','','master');
  $query="select * from inout order by Id DESC limit 1";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_array($result);
  $lastid=$row['Id'];
  if($lastid == " ")
  {
       $id="ENT1";
  }
  else
  {
        $id=  substr($lastid, 3);
        $id=  intval($id);
        $id="ENT".($id+1);
  }
?>
<?php
   $conn = mysqli_connect('localhost', 'root', '', 'master');
   if ($_SERVER["REQUEST_METHOD"] == "POST") 
     {
            $id=$_POST["id"];
            $date=$_POST["date"];
            $from=$_POST["from"];
            $to=$_POST["to"];
            $dept=$_POST["department"];
            $desc=$_POST["desc"];
            $name=$_POST["person"];
            $status=$_POST["sts"];
            $qty=$_POST["qty"];
         if (!$conn)
            {
                die("Connection failed: " . mysqli_connect_error());
            }
          $sql="INSERT INTO `inout`(`Id`, `Date`, `From`, `To`, `Department`, `Description`, `Name`, `Status`, `Qty`) VALUES ('$id','$date','$from','$to','$dept','$desc','$name','$status','$qty')";
         if (mysqli_query($conn, $sql)) 
            {
                echo "<script type='text/javascript'>alert('Data Inserted!!'); location='inward_outward.php';</script>";
            }
         else 
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        } 
 
?>
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
           
        .sample
        {
           
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
                <form action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST">      
                <div class="col-md-3 col-md-offset-9">          
                    <?php if(!empty($id)) {?>
                            <input type="text" name="id" id="id" value="<?php echo $id;?>" readonly><?php } ?>
                 </div>
                <div class="col-md-9 col-md-offset-2 " id="form">
                    <h3 class="text-center" id="home"><b>Inward & Outward Details</b></h3><br>
                         
                    <div class="form-group">
                        <div class="row h">
                        <div class="col-md-6 pp">
                            <div class="col-md-6 col-md-offset-2" >
                                <label for="inputname" class="form-label">Date</label> 
                                <input type="date" class="but1" name="date">
                            </div>
                        </div>
                         <div class="col-md-6 pp">
                           <div class="col-md-6 col-md-offset-2">
                                <label for="inputname" class="form-label">Name/Emp Code</label> 
                                <input type="text" class="but1" name="person">

                                  
                            </div> 
                          
                        </div>
                        </div>
                           
                        <div class="row h">
                         <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2" >
                              <label class="form-label">From</label> <br>
                                 <?php
                                  $conn=  mysqli_connect('localhost', 'root','','master');
                                  $query=mysqli_query($conn,"Select * from branch");
                                 ?>
                               <select name="from" class="st1">           
                                     <?php
                                     while($r=mysqli_fetch_array($query))
                                     {
                                        
                                         ?>
                                     <option class="form-control"><?php echo $r['Abbreviation'] ?></option>
                                      
                                     <?php
                                     }
                                     ?>
                                 </select>
                          
<!--                                 <input type="text" class="form-control but" name="devicetype" id="product">-->
                            </div> 
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6 col-md-offset-2">
                                <label class="form-label">To</label> <br>
                                 <?php
                                  $conn=  mysqli_connect('localhost', 'root','','master');
                                  $query=mysqli_query($conn,"Select * from branch");
                                 ?>
                               <select name="to" class="st1">           
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
                        </div>
                        <div class="row h">
                        <div class="col-md-6 pp">
                            <div class="col-md-6 col-md-offset-2" >
                              <label class="form-label" >Department</label> <br>
                                <?php
                                  $conn=  mysqli_connect('localhost', 'root','','master');
                                  $query=mysqli_query($conn,"Select * from department");
                                 ?>
                               <select name="department" class="st1">
                                     <?php
                                     while($r=mysqli_fetch_array($query))
                                     {
                                         
                                         ?>
                                     <option class="but1"><?php echo $r['department'] ?></option>
                                     <?php
                                     }
                                     ?>
                                     
                                 </select>
                            </div>
                        </div>
                         <div class="col-md-6 pp">
                           <div class="col-md-6 col-md-offset-2">
                               <label class="form-label">Status</label> <br>
   
                               <select name="sts" class="st1">           
                                     <option class="form-control">IN</option>   
                                     <option class="form-control">OUT</option> 
                                     <option class="form-control">SCRAP</option> 
                                 </select>
                                  
                            </div> 
                          
                        </div>
                        </div>
                       
                         <div class="row h">
                        <div class="col-md-6 pp">
                            <div class="col-md-6 col-md-offset-2" >
                                 <label class="form-label">Description</label> 
                                 <input type="text" class="but1" name="desc">
                            </div>
                        </div>
                              <div class="col-md-6 pp">
                                  <div class="col-md-6 col-md-offset-2">
                                      <label class="form-label">Quantity</label> 
                                       <input type="text" class="but1" name="qty">  
                                  </div>
                              </div>
                         </div>
                               
                        </div>
                        
                            <br><br><br>
                        <div class="row">  
                            <div class="col-md-6">

                                     <input type="submit" class="sub" value="Edit" name="update">
                                
                              </div>
                            <div class="col-md-6">
                               
                                    <input type="submit" class="sub" value="Save" name="add">
                              
                            </div>
                      
                     </div>
                   
                </div>
              </form>              
            </div> 
            
          </div>
       </div>
          </div>              
          </body>
    </html>
<!--         <script type="text/javascript">
            function incrementButton()
            {
                var element = document.getElementById('incrementText');
                var value = element.innerHTML;
                ++ value;
                console.log(value);
                document.getElementById('incrementText').innerHTML=value;
            }
         </script>                 -->
    