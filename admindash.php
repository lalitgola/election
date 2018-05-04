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
  <title>Admin Dashboard</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
       <a href="logout.php" style="float: right;">Logout</a>
      <ul class="tab-group" style="margin-top: 35px;">
        <li class=""><a href="addblog.php">Add Blog</a></li>
        <li class=""><a href="addcountry.php">Add Country</a></li>
        <li class=""><a href="addstate.php">Add State</a></li>
        <li class=""><a href="addcity.php">Add City</a></li>
        <li class=""><a href="addparty.php">Add Party</a></li>
        <li class=""><a href="addposition.php">Add Position</a></li>
        <li class=""><a href="viewparty.php">View All Party</a></li>
        <li class=""><a href="view.php">View Blogs</a></li>
        <li class=""><a href="viewposition.php">View Positions</a></li>
         <li class=""><a href="t_votes.php">Voting Counter</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Fill Blog Detais Here</h1>
          
          <form method="post" enctype="multipart/form-data">
          
          
            <div class="field-wrap">
              <label>
                Title<span class="req">*</span>
              </label>
              <input type="text" name="title" id="title" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Name<span class="req">*</span>
              </label>
              <input type="text" required name="name" id="name" autocomplete="off"/>
            </div>
          
          <button type="submit" name="sub" id="sub" class="button button-block"/>Submit</button>
          
          </form>

        </div>
        
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>

