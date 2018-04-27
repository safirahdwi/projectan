<html>
<head>
 <title>Sign Up</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form">
<center><span class="welcome">Sign Up</span></center>
 <form action="" method="post">
     <br>
     <center><input class="input" type="text" name="fullname" placeholder="Full Name"><br></center>
     <center><input class="input" type="text" name="username" placeholder="Username"><br></center>
     <center><input class="input" type="password" name="password" placeholder="Password"><br></center>
     <center><input class="input" type="password" name="confirm" placeholder="Confirm Password"><br></center>
  <center><input class="submit" type="submit" value="Sign Up" name="save"></center>
</form>
</div>

</body>
</html>

<?php
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
 ?> 