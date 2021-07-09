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
                        <li ><a href="customer.php"><span class=" glyphicon glyphicon-user "></span>  Customers</a></li>
                        <li> <a href="transaction.php"><span class=" glyphicon glyphicon-list "></span>  Transactions</a></li>
                      <!--  <li> <a href="aboutme.html"><span class=" glyphicon glyphicon-user "></span> aboutme</a></li> -->

                    </ul>
                </div>
            </div>
        </div> 
      
         <?php
        
           $con =mysqli_connect("localhost","root","","bank") or die(mysqli_error($con));
           $sql= "SELECT * FROM customers";
           $result=mysqli_query($con,$sql)or die(mysqli_error);
           if(mysqli_num_rows($result) > 0){
               
         ?>
        
        
        
        
        
    <center>
        <div class="container panel-margin">
            
            <table class="table table-hover table table-bordered  table table-striped" >
                
                
                <br> <br>
                  <h1 class="c-heading"> Customers Details </h1>
                <br> <br>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>BALANCE</th>
                </tr>
                <?php
                while($row=mysqli_fetch_assoc($result)) {
                ?> 
                <tr class="success">
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Balance']; ?></td>
                </tr>
                <?php } ?> 
            </table>
        </div>
    </center>
               <?php } else {
                    echo "NO CUSTOMER IN THE BANK";
                        }
               ?>
                <footer id="foot">
                       <div class="container">
                           <center>
                               <p>Copyright © Akhil@SparksFoundation. All Rights Reserved | Contact Us :+91 7989236722 </p>  
                           </center>
                       </div>
                </footer>
    </body>
    
</html>

