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
     <center><input class="input" type="email" name="email" placeholder="email"><br></center>
     <center><input class="input" type="password" name="password" placeholder="Password"><br></center>
     <center><input class="input" type="password" name="confirm" placeholder="Confirm Password"><br></center>
  <center><input class="submit" type="submit" value="Sign Up" name="save"></center>
  <a href="login.php" class="submit"> Sign in </a>
</form>

</div>

</body>
</html>

<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>