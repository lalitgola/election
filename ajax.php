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
<div style="color: #a0b3b0;">
<?php
	$country = isset($_GET['country'])?  $_GET['country'] : false;
	$state_name = isset($_GET['state_name'])?  $_GET['state_name'] : false;

	if($country!="")
	{
		$res = mysqli_query($con,"select * from state where country_id='$country'");
		echo "<select id='sels' name='sels' onchange='change_state()'>";
		echo "<option>Select State</option>";
		while($row = mysqli_fetch_array($res))
		{
			echo "<option value='$row[state_id]'>";echo $row['state_name'];echo "</option>";
		}
		echo "</select>";
	}

	
	if($state_name!="")
	{
		$res1 = mysqli_query($con,"select * from city where state_id='$state_name'");
		echo "<select id='selc' name='selc'>";
		echo "<option>Select City</option>";
		while($row1 = mysqli_fetch_array($res1))
		{
			echo "<option value='$row1[city_id]'>";echo $row1['city_name'];echo "</option>";
		}
		echo "</select>";
	}

?>
</div>