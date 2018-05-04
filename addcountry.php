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
  <title>Add Country</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
      <a href="admindash.php">Back To Admin Page</a>
       <a href="logout.php" style="float: right;">Logout</a>
      <ul class="tab-group" style="margin-top: 20px;">
        <li class="tab active"><a href="#signup">Add Country</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup" style="display: block;">   
          <h1>Fill The Country Name</h1>
          
          <form method="post" enctype="multipart/form-data">
          
          
            <div class="field-wrap">
              <label>
                Country<span class="req">*</span>
              </label>
              <input type="text" name="country" id="country" required autocomplete="off" />
            </div>

              <button type="submit" name="sub1" id="sub1" class="button button-block"/>Submit</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>
</html>


  <?php
  if(isset($_POST['sub1']))
  {
    $country = $_POST['country'];
    $sel = "select * from country where country = '$country'";
    $run = mysqli_query($con,$sel);
    $check = mysqli_num_rows($run);
    if($check == 1)
    {
      ?>
      <script>
        alert("Country allready Exist");
      </script>
      <?php
      //exit();
    }
    else
    {
      $ins = "insert into country (country) value ('$country')";
      $run2 = mysqli_query($con,$ins);
      ?>
      <script>
        alert("Country Add Successfully");
      </script>
      <?php
      //exit();
    }

  }
        
?>