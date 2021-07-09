
<?php
              $con =mysqli_connect("localhost","root","","bank") or die("connection Unsuccessful");

            
              if(isset($_POST['submit'])) 
              {
                  $sen= $_POST['t1'];
                  $rec= $_POST['t2'];
                  $amo= $_POST['t3'];
                 
                  
                 
                $sql = "SELECT * FROM customers WHERE name = '{$sen}'";
                $query = mysqli_query($con, $sql) or die("Query Unsuccessful");
                $sql1 = mysqli_fetch_array($query);

                $sql = "select * from customers where Name = '{$rec}'";
                $query = mysqli_query($con, $sql) or die("Query Unsuccessful");
                $sql2 = mysqli_fetch_array($query);

                            
                $newbalance = $sql1['Balance'] - $amo;
                $sql = "UPDATE customers set Balance=$newbalance where Name='{$sen}'";
                mysqli_query($con,$sql);

             
                $newbalance = $sql2['Balance'] + $amo;
                $sql = "UPDATE customers set Balance=$newbalance where Name='{$rec}'";
                mysqli_query($con,$sql);
                
            
                $sql="INSERT INTO transactions(SENDER,RECEIVER,AMOUNT) VALUES ('$sen','$rec','$amo')";
                $query=mysqli_query($con,$sql);
                
                $newbalance=0;
                $amo=0;
                // 
            } 
   ?>    
    
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
                    <a href="index.php"  class="navbar-brand">SPARK BANK</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li ><a href="customers.php"><span class=" glyphicon glyphicon-user "></span>  Customers</a></li>
                        <li> <a href="transaction.php"><span class=" glyphicon glyphicon-list "></span>  Transactions</a></li>
                      <!--  <li> <a href="aboutme.html"><span class=" glyphicon glyphicon-user "></span> aboutme</a></li> -->

                    </ul>
                </div>
            </div>
        </div> 
        
        
         <div class="container">
                <div id="banner_content"><br> <br>
                    <center>
                        
					<h1 style="color:white"> Your Transaction is Successful</h1>
                          		
                    </center>
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




