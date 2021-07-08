<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Bootstrap Introduction</title>
         <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css"  type="text/css" >
         <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js" ></script>
         <script type="text/javascript" src="bootstrap/js/bootstrap.min.js" ></script>
         <link rel="stylesheet" type="text/css" href="index.css" >   
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header"  >
                    <a href="index.html"  class="navbar-brand">SPARK BANK</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li ><a href="customers.php"><span class=" glyphicon glyphicon-user "></span>  Customers</a></li>
                        <li> <a href="transaction.php"><span class=" glyphicon glyphicon-list "></span>  Transactions</a></li>
                      <!--  <li> <a href="aboutme.php"><span class=" glyphicon glyphicon-user "></span> aboutme</a></li> -->

                    </ul>
                </div>
            </div>
        </div> 
        <div id="banner_image">
            <div class="container">
                <div id="banner_content"><br> <br>
                    <center>
                        
					<h1>Welcome to Sparks Bank</h1>
                                        <br><br>
					<a href="products.php">
						<button class="btn btn-danger btn-lg active">Transfer Now</button>
					</a>
                    </center>
				</div>
            </div>
        </div>
                <footer id="foot">
            <div class="container">
                <center>
                    <p>Copyright © Akhil@SparksFoundation. All Rights Reserved | Contact Us :+91 7989236722 </p>  
                </center>
            </div>
        </footer>
    </body>
    
</html>


