 <?php
 session_start();
 if(!isset($_SESSION['username'])) {
  header("Location: homapage.php?access_denied");
 }

?>
<!DOCTYPE html>
<html>
<head>
 <title>User</title>
</head>
<body>

<h1 class="welcome">Selamat Datang <?php echo $_SESSION['username']; ?>!</h1>

<a href="logout.php"> Log Out </a>

</body>
</html> 