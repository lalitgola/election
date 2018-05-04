<?php
 include "dbcon.php";
	
	session_start();

	if($_SESSION['aid'])
	{
		echo "";
	}
	else
	{
		header('location: index.php');
	}
?>

<?php
		
		//include'dbcon.php';


		$SQL="SELECT * FROM blog,country,state,city WHERE blog.sel=country.country_id AND blog.sels=state.state_id AND blog.selc=city.city_id";	

		$QUERY=mysqli_query($con,$SQL) or die(mysqli_error());

		while($data=mysqli_fetch_assoc($QUERY))
		{
	//		print_r($data);
	
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
  <title>Blog View</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
      <a href="admindash.php">Back To Admin Page</a>
      <a href="logout.php" style="float: right;">Logout</a>
      <ul class="tab-group" style="margin-top: 20px;">
        <li class="tab active"><a href="#signup">Blog View</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup" style="display: block;">   
          <h1></h1>
          
          <form method="post" enctype="multipart/form-data">
           
 
  <?php

  		$SQL="SELECT * FROM blog,country,state,city WHERE blog.sel=country.country_id AND blog.sels=state.state_id AND blog.selc=city.city_id";	

		$QUERY=mysqli_query($con,$SQL) or die(mysqli_error());
    ?>
    <table border="1px" style="text-align: left;color: white;width: 530px;">

      <?php
      while($data = mysqli_fetch_assoc($QUERY))
      {
        ?>
        <tr style="background-color: #BDBDBD; color: #D21B7F; text-align: center;">
				<th>Blog Id</th><td colspan="3"><?php echo $data['id']?></td>
		</tr>
        <tr>
			<th>Title</th><td colspan="3"><?php echo $data['title']?></td>
		</tr>
		<tr>
				<th>Name</th><td colspan="2"><?php echo $data['name']?></td>
				<td rowspan="4"><img src="dataimg/<?php echo $data['image']?>" style="max-width: 100px;max-height: 150px;"></td>
		</tr>
		<tr>
				<th>Designation</th><td colspan="2"><?php echo $data['desi']?></td>
		</tr>
		<tr>
				<th>job Profile</th><td colspan="2"><?php echo $data['jobp']?></td>
		</tr>
		<tr>
				<th>Mobile No.</th><td colspan="2"><?php echo $data['mob']?></td>
		</tr>
		<tr>
				<th>Email Id</th><td colspan="3"><?php echo $data['email']?></td>
		</tr>
		<tr>
				<th>Address Line 1</th><td colspan="3"><?php echo $data['add1']?></td>
		</tr>
		<tr>
				<th>Address Line 2</th><td colspan="3"><?php echo $data['add2']?></td>
		</tr>
		<tr>
				<th>Country_name</th><td colspan="3"><?php echo $data['country']?></td>
		</tr>
		<tr>
				<th>State_Name</th><td colspan="3"><?php echo $data['state_name']?></td>
		</tr>
		<tr>
				<th>City_Name</th><td colspan="3"><?php echo $data['city_name']?></td>
		</tr>
		<tr>
				<th>Pin Code</th><td colspan="3"><?php echo $data['pin']?></td>
		</tr>
		<tr>
				<th>Description</th><td colspan="3"><?php echo $data['des']?></td>
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
