<html>
    <head>
        <title>Athulya Assisted Living</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" sizes="96x96" href="logo.png">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        

*{
    margin: 0;
    padding: 0;
    
    
}




.header{
    height: 100vh;
  
    
}

.navbar-style{
    box-shadow: 0 5px 10px wheat;
    display: flex;
    align-items:center;
    margin-top: 1px;
}

.logo{
    height: 48px;
    padding: 2px 10px;
}
.login-container {
    float: right;
  }
  
 input[type=text] {
    padding: 5px;
    margin-top: 6px;
    font-size: 12px;
    border: 1px solid;
    border-color: wheat;
    border-radius: 2px;
    width:200px;
    
  }
  input[type=password] {
    padding: 5px;
    margin-top: 6px;
    font-size: 12px;
    border:1px solid;
    border-radius: 2px;
    border-color: wheat;
    width:200px;
  }
  
  .login-container button {
    float: right;
    padding: 6px 8px;
    margin-top: 4px;
    margin-right: 15px;
    background-color: rgb(239,72,130);
    color: white;
    font-size: 12px;
    border: 1px solid;
    cursor: pointer;
    border-radius: 5px;
  }
  #title1{
    color: rgb(23,98,147);
    font-weight: 700;
    margin-left:34px;
    padding-bottom: 7px;
    border-bottom: none;
  }
  #title1:hover{
    color:rgb(239,72,130)
  }
  .login-container button:hover {
    background-color:rgb(23,98,147);
  }
  input[type=text]:hover {
    box-shadow: 0 5px 10px wheat;
  }
  input[type=text]:focus {
    box-shadow: 0 5px 10px wheat;
    outline: none;
  }
  input[type=password]:hover {
    box-shadow: 0 5px 10px wheat;
  }
  input[type=password]:focus {
    box-shadow: 0 5px 10px wheat;
    outline: none;
  }
  .navbar-links {
    list-style-type: none;
    display: flex;
    float:right;
    
    
    height: 28px;
  }
  
  .navbar-links li a {
    display: block;
    text-decoration: none;
    color: rgb(23,98,147);
    padding: 20px 20px;
    font-weight: 700;
    transition: 0.4s all;
    border-bottom: 1px dotted gray;
  }
  .navbar-links li a:last-child{
    border-bottom: none;
  
    
  }
  
  .navbar-links li.navbar-dropdown {
    position: relative;
  }
  
  .navbar-links li.navbar-dropdown:hover .dropdown {  
    visibility: visible;
    opacity: 1;
    transform: translateY(0px);
  }
  
  .navbar-links li.navbar-dropdown .dropdown {   
    visibility: hidden;
    opacity: 0;
    position: absolute;
    padding: 20px 0;
    
    transform: translateY(50px);
    left: 0;
    width: 250px;
    background-color: white;
    box-shadow: 0px 10px 10px 3px wheat;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    z-index: 111;
    transition: 0.4s all;
    
    
  }
  .navbar-links li.navbar-dropdown .dropdown a {   
    padding-top: 10px;
    padding-bottom: 10px;
    font-weight: 400;
  }
  .navbar-dropdown .dropdown a:hover {    
    padding-left: 30px;
  }
  .navbar-links li a:hover {   
    color:rgb(239,72,130) ;
  
  }
 
  
    </style>
    <body>
        <header>
                   <nav class="navbar navbar-style">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href=""><img class="logo" src="logo.png"></a>

                            <ul class="navbar-links">
                              <li class="navbar-dropdown">
                                <a href="#" id="title1">Asset</a> 
                                <div class="dropdown">
                                    <a href="branchmaster.php">Branch Master</a>
                                    <a href="devicemaster.php">Device Master</a>
                                    <a href="product.php">Product Entry</a>
                                       
                                            <a href="#">F&B</a>
                                            <a href="#">Clinical</a>
                                            <a href="#">IT</a>
                                            <a href="#">Operations</a>
                                       
                                    
                                    
                                    <a href="vendor.php">Vendor Entry</a>
                                    <a href="fileupload.php">Import</a>
                                    <a href="productexport.php">Export</a>
                                    <a href="inward_outward.php">Inward & Outward</a>
                                    <a href="login.php">Login Settings</a>
                      
                                </div>
                              </li> 
                              <li class="navbar-dropdown">
                                <a href="#" id="title1">Application</a>
                                <div class="dropdown">
                                  <a href="https://www.theathulya.com/">Assisted Living</a>
                                  <a href="https://www.theathulya.net">Homecare</a>
                                  <a href="https://www.athulyaliving.in/cms/">CMS</a>
                                  <a href="https://athulyahomecare.com/feedback-report-v2/">Feedback</a>
                                </div>
                              </li>
        <li class="navbar-dropdown">
          <a href="#" id="title1">Websites</a>
          <div class="dropdown">
            <a href="https://www.athulyaliving.com/">Athulya Assisted Livig</a>
            <a href="https://athulyahomecare.com/">Athulya Homecare</a>
            <a href="https://www.athulyaliving.com/perungudi.php">Athulya Assited living - Perungudi</a>
            <a href="https://www.athulyaliving.com/arumbakkam.php">Athulya Assited living - Arumbakkam</a>
            <a href="https://www.athulyaliving.com/pallavaram.php">Athulya Assited living - Pallavaram</a>
            <a href="https://www.athulyaliving.com/neelankarai.php">Athulya Assited living - Neelankarai</a>
            <a href="https://www.athulyaliving.com/Kasavanahalli.php">Athulya Assited living - Bangalore</a>
            <a href="https://www.athulyaseniorcare.com/">Athulya Seniorcare</a>
            <a href="https://www.ambulanceoncall.com/">Emergency 24/7</a> 
          </div>
        </li>
        <li class="navbar-dropdown">
            <a href="#" id="title1">Report</a>
            <div class="dropdown">
                <a href="inwardreport.php">Inward & Outward</a>
                   
            </div>
        </li> 
                           
        </ul>
                         
                    </div>
                    <div class="login-container">
                        <form>
                          <input type="text"  placeholder="Username" name="username">&nbsp;&nbsp;
                          <input type="password" placeholder="Password" name="psw">&nbsp;&nbsp;
                          <button type="submit">Login</button>
                        </form>
                </div>
                </div>
                     
            </nav>
            </header>
</body>
</html>  