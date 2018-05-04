<?php
  
include "dbcon.php";
	
	session_start();

	if($_SESSION['aid'])
	{
		echo "";
	}
	else
	{
		header('location: admin.php');
	}

?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>View Position</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
       <a href="logout.php" style="float: right;">Logout</a>
        <a href="admindash.php">Back To Admin Page</a>
      <ul class="tab-group" style="margin-top: 35px;">

        <li class="tab active"><a href="addblog.php">All Positions</a></li>
       
      </ul>
      
      <div class="tab-content">
        <div id="signup" style="display: block;">   
          <h1>All Positions Are Here</h1>
          
          <form method="post" enctype="multipart/form-data">
          
          
           <table border="ipx" style="width: 550px; color: white; text-align: center;">
             <tr>
                  <td colspan="2" style="font-size: 30px;">All Positions</td>
              </tr>
            
            <?php

              $sel = "select * from position";
              $run = mysqli_query($con,$sel);
              while($data=mysqli_fetch_assoc($run))
              {
                ?>
               
                
                 <tr>
                  <td style="font-size: 25px;"><?php echo $data['position'];?></td>
                 </tr>
               

                <?php
              }

            ?>
             
           </table>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>

</html>