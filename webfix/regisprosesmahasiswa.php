<?php
include 'db.php';

  $fullname = @$_POST['fullname'];
  $username = @$_POST['username'];
  $email = @$_POST['email'];
  $password = @$_POST['password'];

if($fullname != "" && $username != "" && $email != "" && $password != ""){
		$sql_tambah = "INSERT INTO mahasiswa
					   VALUES ('','$fullname', '$username', '$email', '$password')";
		mysqli_query($connect,$sql_tambah);
	?>
		<script language="javascript">alert("Register Successful");</script>
			<script>document.location.href='beranda.html';</script>
	<?php
	}
	else {
		?>
		<script language="javascript">alert("Register Failed");</script>
			<script>document.location.href='daftarmahasiswa.html';</script>
	<?php
	}
mysqli_close($connect);
?>