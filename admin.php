<?php
  

  session_start();

  if(isset($_SESSION['aid']))
  {

    header('location:admindash.php');
  }


  include "dbcon.php";

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">

    <a href="index.php">Back To User Login Page</a>
       
      <ul class="tab-group" style="margin-top: 30px;">
        
        <li class="tab active"><a href="#login">Admin Log In</a></li>
      </ul>
      
      <div class="tab-content">
         <div id="login" style="display: block">   
          <h1>All Ready Register Login Here</h1>
          
          <form method="post">
          
            <div class="field-wrap">
            <label>
              Admin Id<span class="req">*</span>
            </label>
            <input type="text"required name="adminid" id="adminid" autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="pass" id="pass" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button type="submit" name="login1" id="login1" class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>


<?php

  //Login

    if(isset($_POST['login1']))
    {
      $adminid = $_POST['adminid'];
      $password = $_POST['pass'];

      $qry1 = "select * from admin where adminid = '$adminid' and pass = '$password'";
      $run1 = mysqli_query($con,$qry1);
      $check1 = mysqli_num_rows($run1);

        if($check1==1)
          {
            $data = mysqli_fetch_assoc($run1);
            $id = $data['id'];
        
            //session_start();
            $_SESSION['aid'] = $id;

            header('location:admindash.php');
          }
        else
          {
            ?>
            <script>
              alert("Incorrect User_Name and Password");
              window.open("admin.php","_self");
            </script>
            <?php
          }
    }
  

?>