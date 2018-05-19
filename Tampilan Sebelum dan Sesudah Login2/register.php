<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Custom Theme files -->
<link href="css/register.css" rel="stylesheet" type="text/css"/>
<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body style="background-image: url(img/bg-masthead.jpg);">
  <!-- main -->
  <div class="main-w3layouts wrapper">
    <h1>Sign Up</h1>
    <div class="main-agileinfo">
      <div class="agileits-top"> 
        <form action="" method="post"> 
          <input class="text" type="text" name="fullname" placeholder="Full Name" required="">
          <input class="text email" type="text" name="username" placeholder="Username" required="">
          <input class="text" type="password" name="password" placeholder="Password" required="">
          <input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required="">
          <div class="wthree-text">  
            <label class="anim">
              <input type="checkbox" class="checkbox" required="">
              <span>I Agree To The Terms & Conditions</span> 
            </label>  
            <div class="clear"> </div>
          </div>   
          <input type="submit" value="Sign Up" name="save">
        </form>
        <p>Don't have an Account? <a href="login.php"> Login Now!</a></p>
      </div>   
    </div>  
    <!-- copyright -->
    <div class="w3copyright-agile">
      <p>© 2017 Bubble SignUp Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
    </div>
    <!-- //copyright -->
  <!-- //main --> 
    </div>
</body>
<!-- <?php
include 'db.php';

if (@$_POST['save']) {

  $fullname = @$_POST['fullname'];
  $username = @$_POST['username'];
  $passwordold = @$_POST['password'];
  $confirmold = @$_POST['confirm'];
    
  $password = md5($passwordold); 
  $confirm = md5($confirmold);

  mysqli_query($connect, "INSERT INTO user(fullname,username,password,confirm) VALUES ('$fullname','$username', '$password','$confirm')");

?>

<script type="text/javascript">
  alert("hacked By Fikri Al Wahid");
  window.location.href="index.php"

</script>

<?php  }
 ?>  -->