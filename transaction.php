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
         
         <?php
        
           $con =mysqli_connect("localhost","root","","bank") or die(mysqli_error($con));
           $sql= "SELECT * FROM transactions";
           $result=mysqli_query($con,$sql)or die(mysqli_error);
           if(mysqli_num_rows($result) > 0){
               
         ?>
        
        
    <center>
        <div class="container panel-margin">
            
            <table class="table table-hover table table-bordered  table table-striped" >
                
                
                <br> <br> <br><!-- comment -->
                <h1> <strong> <b> Transactions </b> </strong> </h1>
                <br> <br>
                <tr>
                    <th>S.NO</th>
                    <th>SENDER</th>
                    <th>RECEIVER</th>
                    <th>AMOUNT</th>
                </tr>
                 
                <?php
                while($row=mysqli_fetch_assoc($result)) {
                ?>
                
                 <tr class="success">
                    <td><?php echo $row['S.NO']; ?></td>
                    <td><?php echo $row['SENDER']; ?></td>
                    <td><?php echo $row['RECEIVER']; ?></td>
                    <td><?php echo $row['AMOUNT']; ?></td>
                </tr>
                <?php } ?> 
               
            </table>
        </div>
    </center>
          
           
                  <?php } else {  ?>
  <!-- comment -->
          <center style="color:red; 
                  position: absolute; margin: 0;
    top: 50%;
    left: 50%;   margin-right: -50%;
    transform: translate(-50%, -50%) 
  "> 
              <h1> <b> <strong>
                 <?php
                    echo "NO TRANSACTION IS AVAILABLE";
                        }
                        ?>
                  </b> </strong> </h1>
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


