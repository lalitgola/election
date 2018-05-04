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
  <title>Add Position</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
       <a href="logout.php" style="float: right;">Logout</a>
       <a href="admindash.php">Back To Admin Page</a>
      <ul class="tab-group" style="margin-top: 35px;">

        <li class="tab active"><a href="addblog.php">Add Position</a></li>
       
      </ul>
      
      <div class="tab-content">
        <div id="signup" style="display: block;">   
          <h1>Fill Position Details Here</h1>
          
          <form method="post" enctype="multipart/form-data">
          
        
            <div class="field-wrap">
              <label>
                Position Name<span class="req">*</span>
              </label>
              <input type="text" required name="position" id="position" autocomplete="off"/>
            </div>
          
          <button type="submit" name="sub" id="sub" class="button button-block"/>Add Position</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>

</html>

<?php

	if(isset($_POST['sub']))
	{
		
		$position = $_POST['position'];
		

		$sel = "select * from position where position = '$position'";
		$run = mysqli_query($con,$sel);
		$check = mysqli_num_rows($run);

		if($check == 1)
		{
			?>
			<script>
				alert("This Position Is All Ready Exist");
			</script>
			<?php
		}
		else
		{
			$insert = "insert into position (position) values ('$position')";
			$run1 = mysqli_query($con,$insert);
			if($run1)
			{
				?>
				<script>
					alert("Position Details Add Succcessfully");
				</script>
				<?php
			}
			else
			{
				echo "Error";
			}
		}
	}


?>