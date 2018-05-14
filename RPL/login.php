<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Halaman Login </title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
<div class="form">
    <img src="user.jpg" class="avatar">
    <center><span class="welcome"> Login </span></center>
    <br>
 <form action="" method="post">
         <input class="input" type="text" name="username" placeholder="Username">
         <input class="input" type="password" name="password" placeholder="Password">
     <br>
 <center><input class="submit" type="submit" value="Login" name="login"></center> 
    </form>
        <a href="#"> Forgot Password </a>
        <a href="register.php" class="submit"> Sign Up </a><br>
    </div>
    </body>
    </head>
</html>
