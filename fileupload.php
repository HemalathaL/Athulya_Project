<html>
<head>
<meta charset="UTF-8">
        <link rel="icon" type="image/png" sizes="96x96" href="logo.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<title>Athulya Assisted Living</title>
<style>
   body {
  margin: auto;
/*  padding-left: 54px;
  padding-top: 154px;*/
  color:rgb(242,34,131);
/*  background-color: rgb(241,241,241);*/
  }
   #form
        {
            background-color: white;
            border:2px solid white;
            margin-top: 65px;
            border-radius: 8px;
            padding: 24px;
            box-shadow: 0 5px 10px wheat;
        }
/* button
 {
     padding:9px;
     color:white;
     background-color: green;
     border-radius:6px;
 }*/
 input[type=file] 
         {
            padding: 5px;
            margin-top: 6px;
            font-size: 12px;
            border: 1px solid;
            border-color: wheat;
            border-radius: 2px;
/*            width:709px;*/
         }
           input[type=file]:hover 
           {
            box-shadow: 0 5px 10px wheat;
          }
        input[type=file]:focus 
        {
          box-shadow: 0 5px 10px wheat;
          outline: none;
        }
  .sub
       {

            padding: 8px;
            height: 40px;
            width:100px;
            margin-right: 54px;
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
        h1
        {
             color:rgb(23,98,147);
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
    <div class="col-md-4 col-md-offset-4" id="form" style="">
         <h1>Excel Upload</h1>
        <form method="POST" action="excelUpload.php" enctype="multipart/form-data">
            <div class="form-group">
                <label>Upload Excel File</label>
                <input type="file" name="file" class="form-control">
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <button type="submit" name="Submit" class="sub">Upload</button>
                    </div>
                </div>
       
                <div class="col-md-6">
                    <div class="form-group">
                        <button type="submit" name="Go back!" class="sub" onclick="history.back()">Go Back</button>
                    </div>
                </div>
            </div>
             </form>
            </div>
        </div>
</div>
</body>
</html>	