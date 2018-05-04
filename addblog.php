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
  <title>Add Blog</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

      <style type="text/css">
	input, textarea, select {
    font-size: 22px;
    display: block;
    width: 100%;
    height: 100%;
    padding: 5px 10px;
    background: none;
    background-image: none;
    border: 1px solid #a0b3b0;
    color: #ffffff;
    border-radius: 0;
    -webkit-transition: border-color .25s ease, -webkit-box-shadow .25s ease;
    transition: border-color .25s ease, -webkit-box-shadow .25s ease;
    transition: border-color .25s ease, box-shadow .25s ease;
    transition: border-color .25s ease, box-shadow .25s ease, -webkit-box-shadow .25s ease;
}

</style>

  
</head>

<body>

  <div class="form">
     <a href="admindash.php">Back To Admin Page</a>
       <a href="logout.php" style="float: right;">Logout</a>
      <ul class="tab-group" style="margin-top: 35px;">
        <li class="tab active"><a href="#signup">Add Blog</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup" style="display: block;">   
          <h1>Fill Blog Details Here</h1>
          
          <form method="post" enctype="multipart/form-data">
          
          
            <div class="field-wrap">
              <label>
                Title<span class="req">*</span>
              </label>
              <input type="text" name="title" id="title" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Name<span class="req">*</span>
              </label>
              <input type="text" required name="name" id="name" autocomplete="off"/>
            </div>
          

          <div class="field-wrap">
            <label>
              Designation<span class="req">*</span>
            </label>
            <input type="text" name="desi" id="desi" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Job Profile<span class="req">*</span>
            </label>
            <input type="text" name="jobp" id="jobp" required autocomplete="off"/>
          </div>

           <div class="field-wrap">
              <label>
                Mobile<span class="req">*</span>
              </label>
              <input type="text" name="mob" id="mob" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Email Id<span class="req">*</span>
              </label>
              <input type="email" required name="email" id="email" autocomplete="off"/>
            </div>
          

          <div class="field-wrap">
            <label>
              Address Line 1<span class="req">*</span>
            </label>
            <input type="text" name="add1" id="add1" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Address Line 2<span class="req">*</span>
            </label>
            <input type="text" name="add2" id="add2" required autocomplete="off"/>
          </div>


          <div class="field-wrap">
            <label style="margin-left: 250px; margin-bottom:15px">
             <span class="req"></span>
            </label>
            <select id="sel" name="sel" onchange="change_country()"  required autocomplete="off" style="color: #a0b3b0;">
					<option>Select Country</option>
					
						<?php
						$sel = "select * from country";
						$run = mysqli_query($con,$sel);
						while($data = mysqli_fetch_array($run))
							{
								?>
								<option value="<?php echo $data['country_id'];?>"><?php echo $data['country']; ?></option>
								<?php
							}
						?>
					
			</select>
          </div>

           <div class="field-wrap">
            <label style="margin-left: 250px; margin-bottom:15px">
             <span class="req"></span>
            </label>
            <div id="ds">
				<select id="sels" name="sels" style="color: #a0b3b0;">
					<option>Select State</option>
				</select>
			</div>
        </div>

        <div class="field-wrap">
            <label style="margin-left: 250px; margin-bottom:15px">
             <span class="req"></span>
            </label>
           <div id="dc">
				<select id="selc" name="selc" style="color: #a0b3b0;">
					<option>Select City</option>
				</select>
			</div>
        </div>

          <div class="field-wrap">
            <label>
              PIN Code<span class="req">*</span>
            </label>
            <input type="text" name="pin" id="pin" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label style="margin-left: 330px;">
             Select Image<span class="req">*</span>
            </label>
            <input type="file" name="image" id="image" required autocomplete="off" style="color: #a0b3b0;"/>
          </div>

		  <div class="field-wrap">
            <label>
              Description<span class="req">*</span>
            </label>
            <input type="text" name="des" id="des" required autocomplete="off"/>
          </div>          
          
          <button type="submit" name="sub" id="sub" class="button button-block"/>Submit</button>
          
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

	$title = $_POST['title'];
	$name = $_POST['name'];
	$desi = $_POST['desi'];
	$jobp = $_POST['jobp'];
	$mob = $_POST['mob'];
	$email = $_POST['email'];
	$add1 = $_POST['add1'];
	$add2 = $_POST['add2'];
	$sel = $_POST['sel'];
	$sels = $_POST['sels'];
	$selc = $_POST['selc'];
	$pin = $_POST['pin'];

	$image = $_FILES['image'] ['name'];
	$temp_image = $_FILES['image'] ['tmp_name'];

	move_uploaded_file($temp_image,"dataimg/$image");

	$des = $_POST['des'];

	$sel1 = "select * from blog where email = '$email'";
	$run = mysqli_query($con,$sel1);
	$check = mysqli_num_rows($run);
	if($check == 1)
	{
		?>
		<script>
			alert("Email is all ready exist");
		</script>
		<?php
	}
	else
	{
		$ins = "insert into blog (title,name,desi,jobp,mob,email,add1,add2,sel,sels,selc,pin,image,des) values ('$title','$name','$desi','$jobp','$mob','$email','$add1','$add2','$sel','$sels','$selc','$pin','$image','$des')";
		$run2 = mysqli_query($con,$ins);
		if($run2)
		{
			?>
				<script>
					alert("Blog Add Successfully");
				</script>
			<?php
		}
		else
		{
			?>
				<script>
					alert("Blog not inserted ERROR");
				</script>
			<?php
		}
	}
}
?>


	<script>
		
		function change_country()
		{
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.open("GET","ajax.php?country="+document.getElementById('sel').value,false);
			xmlhttp.send(null);
			document.getElementById('ds').innerHTML=xmlhttp.responseText;

			if(document.getElementById('sel').value=="Select")
			{
				document.getElementById('dc').innerHTML="<select><option>Select</option></select>";
			}
		}

		function change_state()
		{
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.open("GET","ajax.php?state_name="+document.getElementById('sels').value,false);
			xmlhttp.send(null);
			document.getElementById('dc').innerHTML=xmlhttp.responseText;
		}

	</script>