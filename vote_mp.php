<?php
  include "dbcon.php";
	
	session_start();

	if($_SESSION['uid'])
	{
		echo "";
	}
	else
	{
		header('location: index.php');
	}

     //Total Count of MP

    $total1 = "select * from votes where position = 'mp'";
    $runtotal = mysqli_query($con,$total1);
    $total = mysqli_num_rows($runtotal);
    
    //BJP COUNT

    $bjp1 = "select * from votes where party = 'bjp' and position = 'mp'";
    $count = mysqli_query($con,$bjp1);
    $bjpr = mysqli_num_rows($count);
    
    //INC COUNT

    $inc1 = "select * from votes where party = 'inc' and position = 'mp'";
    $count1 = mysqli_query($con,$inc1);
    $incr = mysqli_num_rows($count1);

    //BSP COUNT

    $bsp1 = "select * from votes where party = 'bsp' and position = 'mp'";
    $count2 = mysqli_query($con,$bsp1);
    $bspr = mysqli_num_rows($count2);

    //AAP COUNT

    $aap1 = "select * from votes where party = 'aap' and position = 'mp'";
    $count3 = mysqli_query($con,$aap1);
    $aapr = mysqli_num_rows($count3);

    //INLD COUNT

    $inld1 = "select * from votes where party = 'inld' and position = 'mp'";
    $count4 = mysqli_query($con,$inld1);
    $inldr = mysqli_num_rows($count4);
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>User Dashboard</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
       <a href="logout.php" style="float: right;">Logout</a>
       <a href="userdash.php">Back To User Dashboard</a>
      <ul class="tab-group" style="margin-top: 35px;">

      
		<li class="tab active"><a href="#mp">Vote For MP</a></li>
    
     </ul>
      
      <div class="tab-content">

        <div id="mp" style="display: block;">


          <form method="post" enctype="multipart/form-data">
          	
          	<table border="1px"  style="width: 550px; color: white; text-align: center;">
          		<tr>
          		<td colspan="5" style="text-align:center;background-color:#2962FF;font-size:25px;">Total Count of MP Votes is = <?php echo $total ?> </td>
          		</tr>
          		<tr style="text-align:center;background-color:#1E88E5;font-size:20px;">
          			<th>BJP = <?php echo $bjpr ?></th>
          			<th>INC = <?php echo $incr ?> </th>
          			<th>BSP = <?php echo $bspr ?> </th>
          			<th>AAP = <?php echo $aapr ?> </th>
          			<th>INLD = <?php echo $inldr ?> </th>
          		</tr>
          		<tr>
          			<th colspan="5" style="text-align:center;background-color:#424242;font-size:25px;">Please Press Button of Your Party</th>
          		</tr>
          		<?php

          		$sql = "select * from party"; 

          		$query=mysqli_query($con,$sql) or die(mysqli_error());
          		while($data=mysqli_fetch_assoc($query)){
          		?>
          		<tr>
          			<th colspan="4" style="font-size: 25px;"><?php echo $data['pname']; ?></th>
          			<td><a href="user_voting.php?user=<?php echo $_SESSION['uid'].'&& party='.$data['pshort_name'].'&&position='.$_REQUEST['position'];?>"><img src="dataimg/<?php echo $data['logo'];?>" style="max-width: 70px; max-height: 60px;"></button></td>
          		</tr>
          		<?php }?>
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