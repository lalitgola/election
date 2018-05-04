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



    //Total Voting
    $qry = "select * from votes";
    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);


    //Total Count of MP

    $total1 = "select * from votes where position = 'mp'";
    $runtotal = mysqli_query($con,$total1);
    $total = mysqli_num_rows($runtotal);
    
    //BJP COUNT MP

    $bjp1 = "select * from votes where party = 'bjp' and position = 'mp'";
    $count = mysqli_query($con,$bjp1);
    $bjpr = mysqli_num_rows($count);
    
    //INC COUNT MP

    $inc1 = "select * from votes where party = 'inc' and position = 'mp'";
    $count1 = mysqli_query($con,$inc1);
    $incr = mysqli_num_rows($count1);

    //BSP COUNT MP

    $bsp1 = "select * from votes where party = 'bsp' and position = 'mp'";
    $count2 = mysqli_query($con,$bsp1);
    $bspr = mysqli_num_rows($count2);

    //AAP COUNT MP

    $aap1 = "select * from votes where party = 'aap' and position = 'mp'";
    $count3 = mysqli_query($con,$aap1);
    $aapr = mysqli_num_rows($count3);

    //INLD COUNT MP

    $inld1 = "select * from votes where party = 'inld' and position = 'mp'";
    $count4 = mysqli_query($con,$inld1);
    $inldr = mysqli_num_rows($count4);


    //Total Count of MLA

    $total1mla = "select * from votes where position = 'mla'";
    $runtotalmla = mysqli_query($con,$total1mla);
    $totalmla = mysqli_num_rows($runtotalmla);
    
    //BJP COUNT MLA

    $bjp1mla = "select * from votes where party = 'bjp' and position = 'mla'";
    $countmla = mysqli_query($con,$bjp1mla);
    $bjprmla = mysqli_num_rows($countmla);
    
    //INC COUNT MLA

    $inc1mla = "select * from votes where party = 'inc' and position = 'mla'";
    $count1mla = mysqli_query($con,$inc1mla);
    $incrmla = mysqli_num_rows($count1mla);

    //BSP COUNT MLA

    $bsp1mla = "select * from votes where party = 'bsp' and position = 'mla'";
    $count2mla = mysqli_query($con,$bsp1mla);
   $bsprmla = mysqli_num_rows($count2mla);

    //AAP COUNT MLA

    $aap1mla = "select * from votes where party = 'aap' and position = 'mla'";
    $count3mla = mysqli_query($con,$aap1mla);
    $aaprmla = mysqli_num_rows($count3mla);

    //INLD COUNT MLA

    $inld1mla = "select * from votes where party = 'inld' and position = 'mla'";
    $count4mla = mysqli_query($con,$inld1mla);
    $inldrmla = mysqli_num_rows($count4mla);


    //Total Count of DC

    $total1dc = "select * from votes where position = 'dc'";
    $runtotaldc = mysqli_query($con,$total1dc);
    $totaldc = mysqli_num_rows($runtotaldc);
    
    //BJP COUNT DC

    $bjp1dc = "select * from votes where party = 'bjp' and position = 'dc'";
    $countdc = mysqli_query($con,$bjp1dc);
    $bjprdc = mysqli_num_rows($countdc);
    
    //INC COUNT DC

    $inc1dc = "select * from votes where party = 'inc' and position = 'dc'";
    $count1dc = mysqli_query($con,$inc1dc);
    $incrdc = mysqli_num_rows($count1dc);

    //BSP COUNT DC

    $bsp1dc = "select * from votes where party = 'bsp' and position = 'dc'";
    $count2dc = mysqli_query($con,$bsp1dc);
    $bsprdc = mysqli_num_rows($count2dc);

    //AAP COUNT DC

    $aap1dc = "select * from votes where party = 'aap' and position = 'dc'";
    $count3dc = mysqli_query($con,$aap1dc);
    $aaprdc = mysqli_num_rows($count3dc);

    //INLD COUNT DC

    $inld1dc = "select * from votes where party = 'inld' and position = 'dc'";
    $count4dc = mysqli_query($con,$inld1dc);
    $inldrdc = mysqli_num_rows($count4dc);



    //Total Count Block

    $total1blk = "select * from votes where position = 'block'";
    $runtotalblk = mysqli_query($con,$total1blk);
    $totalblk = mysqli_num_rows($runtotalblk);
    
    //BJP COUNT Block

    $bjp1blk = "select * from votes where  party = 'bjp' and position = 'block'";
    $countblk = mysqli_query($con,$bjp1blk);
    $bjprblk = mysqli_num_rows($countblk);
    
    //INC COUNT Block

    $inc1blk = "select * from votes where party = 'inc' and position = 'block'";
    $count1blk = mysqli_query($con,$inc1blk);
    $incrblk = mysqli_num_rows($count1blk);

    //BSP COUNT Block

    $bsp1blk = "select * from votes where  party = 'bsp' and position = 'block'";
    $count2blk = mysqli_query($con,$bsp1blk);
    $bsprblk = mysqli_num_rows($count2blk);

    //AAP COUNT Block

    $aap1blk = "select * from votes where  party = 'aap' and position = 'block'";
    $count3blk = mysqli_query($con,$aap1blk);
    $aaprblk = mysqli_num_rows($count3blk);

    //INLD COUNT Block

    $inld1blk = "select * from votes where party = 'inld' and position = 'block'";
    $count4blk = mysqli_query($con,$inld1blk);
    $inldrblk = mysqli_num_rows($count4blk);
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
     <a href="admindash.php">Back To Admin Page</a>
       <a href="logout.php" style="float: right;">Logout</a>
      
      <ul class="tab-group" style="margin-top: 35px;">

       <li class="tab active"><a href="#welcome">Total Vote Counting </a></li>
		

      </ul>
      
      <div class="tab-content">

      	 <div id="welcome" style="display: block;">

       <form method="post" enctype="multipart/form-data">

        	<h1>Welcome To Voting Counter Dashboard</h1>

          <table border="1px" id="mla" style="width: 550px; color: white; text-align: center; font-size: 25px;">
            <tr>
              <td colspan="2" style="font-size: 30px;">Total Votes is = <?php echo $row ?></td>
            </tr>
            <tr>
              <td colspan="2" style="background-color: #949494;">MP Votes Detail</td>
            </tr>
            <tr>
              <td rowspan="5">Total MP Votes = <?php echo $total ?> </td>
              <td>BJP = <?php echo $bjpr ?> </td>
            </tr>
            <tr>
              <td>INC = <?php echo $incr ?> </td>
            </tr>
            <tr>
              <td>BSP = <?php echo $bspr ?> </td>
            </tr>
            <tr>
              <td>AAP = <?php echo $aapr ?> </td>
            </tr>
            <tr>
              <td>INLD = <?php echo $inldr ?> </td>
            </tr>
            <tr>
              <td colspan="2" style="background-color: #949494;">MLA Votes Detail</td>
            </tr>
             <tr>
              <td rowspan="5">Total MLA Votes = <?php echo $totalmla ?> </td>
              <td>BJP = <?php echo $bjprmla ?> </td>
            </tr>
            <tr>
              <td>INC = <?php echo $incrmla ?> </td>
            </tr>
            <tr>
              <td>BSP = <?php echo $bsprmla ?> </td>
            </tr>
            <tr>
              <td>AAP = <?php echo $aaprmla ?> </td>
            </tr>
            <tr>
              <td>INLD = <?php echo $inldrmla ?> </td>
            </tr>
            <tr>
              <td colspan="2" style="background-color: #949494;">Destrict Council Votes Detail</td>
            </tr>
             <tr>
              <td rowspan="5">Total District Council Votes = <?php echo $totaldc ?> </td>
              <td>BJP = <?php echo $bjprdc ?> </td>
            </tr>
            <tr>
              <td>INC = <?php echo $incrdc ?> </td>
            </tr>
            <tr>
              <td>BSP = <?php echo $bsprdc ?> </td>
            </tr>
            <tr>
              <td>AAP = <?php echo $aaprdc ?> </td>
            </tr>
            <tr>
              <td>INLD= <?php echo $inldrdc ?> </td>
            </tr>
            <tr>
              <td colspan="2" style="background-color: #949494;">Block Samiti Votes Detail</td>
            </tr>
             <tr>
              <td rowspan="5">Total Block Samiti Votes = <?php echo $totalblk ?> </td>
              <td>BJP = <?php echo $bjprblk ?> </td>
            </tr>
            <tr>
              <td>INC = <?php echo $incrblk ?> </td>
            </tr>
            <tr>
              <td>BSP = <?php echo $bsprblk ?> </td>
            </tr>
            <tr>
              <td>AAP = <?php echo $aaprblk ?> </td>
            </tr>
            <tr>
              <td>INLD = <?php echo $inldrblk ?> </td>
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
