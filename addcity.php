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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script>
    $(document).ready(function(){

      $("#bb1").click(function(){

        $("#dss1").toggle();
      });

    });
  </script>
  <meta charset="UTF-8">
  <title>Add City</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
      <a href="admindash.php">Back To Admin Page</a>
      <a href="logout.php" style="float: right;">Logout</a>
      <ul class="tab-group" style="margin-top: 20px;">
        <li class="tab active"><a href="#signup">Add City</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup" style="display: block;">   
          <h1>Fill Detail</h1>
          
          <form method="post" enctype="multipart/form-data">
          
          
            <div class="field-wrap">
              <label>
                City Name<span class="req">*</span>
              </label>
              <input type="text" name="city_name" id="city_name" required autocomplete="off" />
            </div>

             <div class="field-wrap">
              <label>
                State ID<span class="req">*</span>
              </label>
              <input type="text" name="state_id" id="state_id" required autocomplete="off" />
            </div>

              <button type="submit" name="sub3" id="sub3" class="button button-block"/>Submit</button><br>
              <input type="button" name="bb1" id="bb1" value="Click To Show State ID">
          
           
  <div id="dss1" style="display: none; color: white;">
  <?php

    $sel1 = "select * From state";
    $run3 = mysqli_query($con,$sel1);
    ?>
    <table border="1px" style="text-align: center;">
      <tr>
        <th>State_id</th>
        <th>State_Name</th>
      </tr>
      <?php
      while($data = mysqli_fetch_array($run3))
      {
        ?>
        <tr>
          <td><?php echo $data['state_id']?></td>
          <td><?php echo $data['state_name']?></td>
        </tr>
        <?php
      }
      ?>
    </table>
  </div>

          </form>

        </div>
        
      </div><!-- tab-content -->
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>

</body>
</html>

<?php

      //Add City Detail

  if(isset($_POST['sub3']))
  {
    $city_name = $_POST['city_name'];
    $state_id = $_POST['state_id'];
    $sel = "select * from city where city_name = '$city_name'";
    $run = mysqli_query($con,$sel);
    $check = mysqli_num_rows($run);
    if($check == 1)
    {
      ?>
      <script>
        alert("This City Name Allready Exist");
      </script>
      <?php
    }
    else
    {
      $ins1 = "insert into city (city_name,state_id) value ('$city_name','$state_id')";
      $run1 = mysqli_query($con,$ins1);
      if($run1)
      {
      ?>
      <script>
        alert("City Add Successfully");
      </script>
      <?php
      }
      else
      {
        ?>
      <script>
        alert("State ID is not Exist");
      </script>
      <?php
      }

    }

  }


    // fetch state and state id
  ?>
 