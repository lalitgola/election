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

      $("#bb").click(function(){
        $("#dss").toggle();
      });

    });
  </script>

  <meta charset="UTF-8">
  <title>Add State</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
      <a href="admindash.php">Back To Admin Page</a>
       <a href="logout.php" style="float: right;">Logout</a>
      <ul class="tab-group" style="margin-top: 20px;">
        <li class="tab active"><a href="#signup">Add State</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup" style="display: block;">   
          <h1>Fill Detail</h1>
          
          <form method="post" enctype="multipart/form-data">
          
          
            <div class="field-wrap">
              <label>
                State Name<span class="req">*</span>
              </label>
              <input type="text" name="state_name" id="state_name" required autocomplete="off" />
            </div>

             <div class="field-wrap">
              <label>
                Country ID<span class="req">*</span>
              </label>
              <input type="text" name="country_id" id="country_id" required autocomplete="off" />
            </div>

              <button type="submit" name="sub2" id="sub2" class="button button-block"/>Submit</button><br>
              <input type="button" name="bb" id="bb" value="Click To Show Country ID" >


  <div id="dss" style="display: none; color: white;">
  <?php

    $sel2 = "select * From country";
    $run4 = mysqli_query($con,$sel2);
    ?>
    <table border="1px">
      <tr>
        <th>Country_id</th>
        <th>Country_Name</th>
      </tr>
      <?php
      while($data = mysqli_fetch_array($run4))
      {
        ?>
        <tr>
          <td><?php echo $data['country_id']?></td>
          <td><?php echo $data['country']?></td>
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

    //Add State Details

  if(isset($_POST['sub2']))
  {
    $state_name = $_POST['state_name'];
    $country_id = $_POST['country_id'];
    $sel = "select * from state where state_name = '$state_name'";
    $run = mysqli_query($con,$sel);
    $check = mysqli_num_rows($run);
    if($check == 1)
    {
      ?>
      <script>
        alert("This State Name is Allready Exist");
      </script>
      <?php
    }
    else
    {
      $ins = "insert into state (state_name,country_id) value ('$state_name','$country_id')";
      $run2 = mysqli_query($con,$ins);
      if($run2)
      {
        ?>
      <script>
        alert("State Add Successfully");
        window.open("addstate.php","_self")
      </script>
        <?php
        exit();
      }
      else
      ?>
      <script>
        alert("Country_id is not Exist");
      </script>
      <?php
    }

  }

  // fetch state and state id
  ?>
 