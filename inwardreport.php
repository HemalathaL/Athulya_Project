<html>
    <head>
        <meta charset="UTF-8">
          <link rel="icon" type="image/png" sizes="96x96" href="logo.png">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
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
            color:rgb(242,34,131);/*
*/            margin:auto;
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
           table thead
        {
            background-color:rgb(242,34,131);
            color: white;
            
        }
        table
        {
             box-shadow: 0 5px 10px wheat;
             border-radius: 5px;
             
        }
/*        .k
        {
             flex: 60%;
             padding: 5px;
        }
        .row
        {
            display: flex;
            margin-left:5px;
            margin-right:5px;
        }*/


       
          input[type=date] 
         {
            padding: 5px;
            margin-top: 6px;
            font-size: 12px;
            border: 1px solid;
            border-color: wheat;
            border-radius: 2px;
            width:220px;
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

         .sub
       {
            float: right;
            padding: 6px;
            height: 39px;
            width:100px;
            margin-right: 70px;
            margin-top: 25px;
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
          
        <div class="col-md-8 col-md-offset-2" id="form" style="">
            <center><h3>Inward & Outward Report</h3></center><br>
          <form action="" method="GET">
              <div class="row">
                  <div class="col-md-4">
                        <label>From</label><br>
                        <input type="date" name="from_date" class="form-control">
                    </div>
                  <div class="col-md-4">
                        <label>To</label><br>
                        <input type="date" name="to_date" class="form-control"><br>
                    </div>
                  <div class="col-md-4">
                        <button type="submit" name="Submit" class="sub">Submit</button>
                    </div>
              </div>
          </form>
        </div>
     </div>
   </div>
         <br><br>
         
           <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-6">
                    <table class="table table-bordered display nowrap table-responsive" cellspacing="0" width="100%">
                     <thead>
                         <tr>
                             <th>Date</th>
                             <th>From</th>
                             <th>To</th>
                             <th>Department</th>
                             <th>Description</th>
                             <th>Name/Emp Code</th>
                             <th>Status</th>
                             <th>Quantity</th> 
                         </tr>
                     </thead>
                     <tbody>
                         
                 <?php
                    $conn=  mysqli_connect('localhost', 'root','','master');
                    if($conn)
                    {  
                        if(isset($_GET['from_date']) && isset($_GET['to_date']))
                        {
                            $fromdate=$_GET['from_date'];
                            $todate=$_GET['to_date'];
                            $query="SELECT * FROM `inout` WHERE Status='IN' AND Date BETWEEN '$fromdate' AND '$todate'";
                            $query_in=mysqli_query($conn,$query);
                            if(mysqli_num_rows($query_in)>0)
                            {
                                foreach ($query_in as $row)
                                {
                                    //echo $row['Date'];
                                    ?>
                                    <tr>
                                        <td><?=$row['Date'];?></td>
                                        <td><?=$row['From'];?></td>
                                        <td><?=$row['To'];?></td>
                                        <td><?=$row['Department'];?></td>
                                        <td><?=$row['Description'];?></td>
                                        <td><?=$row['Name'];?></td>
                                        <td><?=$row['Status'];?></td>
                                        <td><?=$row['Qty'];?></td>
                                    </tr>
                     
                                    <?php
                                }
                            }
                            else
                            {
                                echo 'Record Not Found';
                            }
                        }
                        
                    }
                else {
                        echo 'Database Not Connected';
                }
                    
                 ?>
                 </tbody>
                 </table>
         </div>
       
     
                   <div class="col-lg-6">
             <!--                 //OUT-->
                <table class="table table-bordered display nowrap table-responsive" cellspacing="0" width="100%">
                     <thead>
                         <tr>
                             <th>Date</th>
                             <th>From</th>
                             <th>To</th>
                             <th>Department</th>
                             <th>Description</th>
                             <th>Name/Emp Code</th>
                             <th>Status</th>
                             <th>Quantity</th>
                             
                         </tr>
                     </thead>
                     <tbody>
                         
                 <?php
                    $conn=  mysqli_connect('localhost', 'root','','master');
                    if($conn)
                    {  
                        if(isset($_GET['from_date']) && isset($_GET['to_date']))
                        {
                            $fromdate=$_GET['from_date'];
                            $todate=$_GET['to_date'];
                            $query="SELECT * FROM `inout` WHERE Status='OUT' AND Date BETWEEN '$fromdate' AND '$todate'";
                            $query_in=mysqli_query($conn,$query);
                            if(mysqli_num_rows($query_in)>0)
                            {
                                foreach ($query_in as $row)
                                {
                                    //echo $row['Date'];
                                    ?>
                                    <tr>
                                        <td><?=$row['Date'];?></td>
                                        <td><?=$row['From'];?></td>
                                        <td><?=$row['To'];?></td>
                                        <td><?=$row['Department'];?></td>
                                        <td><?=$row['Description'];?></td>
                                        <td><?=$row['Name'];?></td>
                                        <td><?=$row['Status'];?></td>
                                        <td><?=$row['Qty'];?></td>
                                    </tr>
                     
                                    <?php
                                }
                            }
                            else
                            {
                                echo 'Record Not Found';
                            }
                        }
                        
                    }
                else {
                        echo 'Database Not Connected';
                }
                    
                 ?>
                 </tbody>
                 </table>
            </div>     
         </div> 
     </div>
       


     </body>
</html>

