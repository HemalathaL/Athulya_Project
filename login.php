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
        <title>Athulya Assisted Living</title>
    </head>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: 'poppins',sans-serif;
            box-sizing: border-box;
        }
        
        /*img
        {
          position: relative;
          width:50%;
          height:100%;
        }*/
       section
       {
           position:relative;
           width:100%;
           height:100vh;
           display:flex;   
       }
       section .imgbx
       {
           position: relative;
           width:50%;
           height: 100%;
       }
       section .imgbx:before
       {
           content:'';
           position: absolute;
           top:0;
           left:0;
           width:100%;
           height:100%;
           background: linear-gradient(225deg,#e91e63,#03a9f4);
           z-index: 1;
           mix-blend-mode:screen;
        
       }
       section .imgbx img
       {
            position: absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            object-fit: cover;
       }  
       section .contentbx
       {
           display: flex;
           width: 50%;
           height: 100%;
           justify-content: center;
           align-items: center;
       }
       section .contentbx .formbx
       {
           width: 50%;
       }
       section .contentbx .formbx h2  /* for heading <login>*/
       {
           color: #607d8b;
           font-weight: 600;
           font-size: 1.5em;
           text-transform: uppercase;
           margin-bottom: 20px;
           border-bottom: 4px solid #ff4584;
           display: inline-block;
           letter-spacing: 1px;
       }
       section .contentbx .formbx .inputbx  /* space for each div tag*/
       {
           margin-bottom: 20px;
       }
       section .contentbx .formbx .inputbx span  /*for each heading*/
       {
           font-size: 16px;
           margin-bottom: 5px;
           display: inline-block;
           color:#607d8b;
           font-weight: 300;
           font-size: 16px;
           letter-spacing: 1px;
       }
       section .contentbx .formbx .inputbx  input
       {
           width: 100%;
           padding: 10px 20px;
           outline: none;
           font-weight: 400;
           border:1px solid #607d8b;
           font-size: 16px;
           letter-spacing: 1px;
           color:#607d8b;
           background: transparent;
           border-radius: 30px;
       }
        section .contentbx .formbx .inputbx  input[type="submit"]
        {
            background: #ff4584;
            color: #fff;
            outline: none;
            border:none;
            font-weight: 500;
            cursor: pointer;
        }
        section .contentbx .formbx .inputbx  input[type="submit"]:hover
        {
            background: #f53677;
        }
        @media (max-width:746px)
        {
            section .imgbx 
            {
            position: absolute;
            top:0;
            left:0;
            width: 100%;
            height: 100%;
            }
            section .contentbx 
            {
              display: flex;
              width: 100%;
              height: 100%;
              justify-content: center;
              align-items: center;
              z-index: 1;
           }
         section .contentbx .formbx 
         {
            width: 50%;
            padding: 40px;
            background: rgb(255 255 255 / 90%);
            margin: 50px;
         } 
        }
    </style>
    <body>
        <section>
            <div class="imgbx">
                <img src="img.jpeg"style="">  
            </div>
            <div class="contentbx">
                <div class='formbx'>
                    <h2>Login</h2>
                    <form action="test.php" method="POST">
                        <div class="inputbx">
                            <span>Username</span>
                            <input type="text" name="user">
                        </div> 
                        <div class="inputbx">
                            <span>Password</span>
                            <input type="Password" name="pass">
                        </div> 
                        <br>
                        <div class="inputbx">
                            <input type="Submit" value="Submit" name="">
                        </div> 
                    </form>
                </div>   
            </div>
        </section>
       
    </body>
</html>
