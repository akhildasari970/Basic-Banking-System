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
        </div>   <br> <br> <br> <br> <br> <br> <br>
    <center>
        <div class="container"> 
          
             <form  name='f1' action= "checking.php" method="post">
                    <div class="form-group">
                   <h1> From</h1> <input type="text" name="t1" class="form-control" placeholder="SENDER NAME">
                    </div>
                    <div class="form-group">
                <h1> T0 </h1><input type="text" name="t2" class="form-control"placeholder="RECEIVER NAME">
                      </div>
                 <div class="form-group">
                <h3 style="color:green">AMOUNT</h3><input type="number" name="t3" min="100" max="1000" class="form-control" placeholder="ENTER AMOUNT TO BE TRANSFERED"><br><br>
                 </div>
                <button  type="submit" value="submit" name="submit" class="btn btn-primary mb-2">submit</button>
                
              </form>
 
                 
	
         
        </div>
    </center>
            
    
    
                <footer id="foot">
                       <div class="container">
                           <center>
                               <p>Copyright © Akhil@SparksFoundation. All Rights Reserved | Contact Us :+91 7989236722 </p>  
                           </center>
                       </div>
                </footer>
    </body>
    
</html>



