<?php
  

  session_start();

  if(isset($_SESSION['uid']))
  {

    header('location:userdash.php');
  }


  include "dbcon.php";

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
      
      
      <a href="admin.php" style="float: right;">Admin Login</a>
      <ul class="tab-group" style="margin-top: 40px;">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>New Registration</h1>
          
          <form method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fname" id="fname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required name="lname" id="lname" autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" id="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="pass" id="pass" required autocomplete="off"/>
          </div>
          
          <button type="submit" name="register" id="register" class="button button-block"/>Register</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>All Ready Register Login Here</h1>
          
          <form method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required name="email1" id="email1" autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="pass1" id="name1" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button type="submit" name="login" id="login" class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
  
<?php

    //New Registration
  
  if(isset($_POST['register']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sel = "select * from user where email = '$email'";
    $run2 = mysqli_query($con,$sel);
    $check = mysqli_num_rows($run2);
    if($check == 1)
    {
      ?>
      <script>
        alert("this email is allready exist");
      </script>
      <?php
      exit();
    } 

    $qry = "insert into user (fname,lname,email,pass) value('$fname','$lname','$email','$pass')";
    $run = mysqli_query($con,$qry);
    if($run)
    {
      ?>
      <script>
        alert("Record submit Successfully");
        window.open("index.php","_self");
      </script>
      <?php
    }
    else
    {
      echo "Error";
    }
  }


    //Login

    if(isset($_POST['login']))
    {
      $user_name = $_POST['email1'];
      $password = $_POST['pass1'];

      $qry1 = "select * from user where email = '$user_name' and pass = '$password'";
      $run1 = mysqli_query($con,$qry1);
      $check1 = mysqli_num_rows($run1);

        if($check1==1)
          {
            $data = mysqli_fetch_assoc($run1);
            $id = $data['id'];
            $fname = $data['fname'];
            $email = $data['email'];
            //session_start();
             $_SESSION['uid'] = $id;
             $_SESSION['fname'] = $fname;
             $_SESSION['email']=$email;
            header('location:userdash.php');
          }
        else
          {
            ?>
            <script>
              alert("Incorrect User_Name and Password");
              window.open("index.php","_self");
            </script>
            <?php
          }
    }
  

?>