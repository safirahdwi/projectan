<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 <title>Smart PPKU</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  <link href="css/creative.min.css" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">Smart PPKU</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <!-- <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul> -->
        </div>
      </div>
    </nav>
  <div class="form">
  <center><span class="welcome">Daftar</span></center>
  <form action="" method="post">
     <br>
     <center><input class="input" type="text" name="fullname" placeholder="Full Name"><br></center>
     <center><input class="input" type="text" name="username" placeholder="Username"><br></center>
     <center><input class="input" type="password" name="password" placeholder="Password"><br></center>
     <center><input class="input" type="password" name="confirm" placeholder="Confirm Password"><br></center>
  <center><input class="submit" type="submit" value="Sign Up" name="save"></center>
</form>
</div>
<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
</body>
</html>

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