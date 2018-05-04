<?php

			include "dbcon.php";

			 $id = $_REQUEST['user'];
			 $party = $_REQUEST['party'];
			 $position = $_REQUEST['position'];

			$sel = "select * from votes where user_id = '$id' and position = '$position'";
			$run = mysqli_query($con,$sel);
			$row =  mysqli_num_rows($run);
			if($row == 1)
			{
				?>
				<script>
					alert('Your Vote Already Submit');
					window.open("userdash.php","_self");
				</script>
				<?php
				
				
			}
			else
			{
				$insert3 = "insert into votes(user_id,party,position) values ('$id','$party','$position')";
				$runbsp1 = mysqli_query($con,$insert3);
				if($runbsp1)
			{
				
				?>
				<script>
					alert('Your Vote Submit Successfully');
					window.open("userdash.php","_self");
				</script>
				<?php
			}
			else
			{
				echo "error";
			}
		}
		
			
			
?>	