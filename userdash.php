<?php
include "dbcon.php";

    //Total Voting
    $qry = "select * from votes";
    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);

	
	session_start();

	if($_SESSION['uid'])
	{
		echo "";
	}
	else
	{
		header('location: index.php');
	}


		//Total Count

		$total1 = "select * from votes;";
		$runtotal = mysqli_query($con,$total1);
		$total = mysqli_num_rows($runtotal);
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
      <div style="color: white">
       
      </div>
      <ul class="tab-group" style="margin-top: 35px;">

       <li class="tab active"><a href="#welcome"><?php echo $_SESSION['fname']; ?></a></li>
		<li class=""><a href="vote_mp.php?position=mp" id="mp">MP</a></li>
		<li class=""><a href="vote_mla.php?position=mla" id="mla">MLA</a></li>
    	  <li class=""><a href="vote_dc.php?position=dc" id="dc">District Council</a></li>
    	  <li class=""><a href="vote_block.php?position=block" id="bs">Block Samiti</a></li>

      </ul>
      
      <div class="tab-content">

      	 <div id="welcome" style="display: block;">

       <form method="post" enctype="multipart/form-data">

        	<h1>Welcome To Your Dashboard</h1>

          <table border="1px" id="mla" style="width: 550px; color: white; text-align: center; font-size: 30px;">
            <tr>
              <td>Total Votes is = <?php echo $row ?></td>
            </tr>
          </table>

          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>

</html>
