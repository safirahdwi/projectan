<?php
	include "db.php";
	
	$nama = $_POST['fullname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$ipk = $_POST['ipk'];
	$foto_size = $_FILES["photouser"]["size"];
	$folder = "images";
	$foto_loc = $_FILES["photouser"]["tmp_name"];
	$foto_name = $folder."/".$_FILES["photouser"]["name"];
	if($foto_size < 1000000){
		move_uploaded_file($foto_loc, $foto_name);
		$sql_tambah = "INSERT INTO mentor
					   VALUES ('','$nama', '$username', '$email', '$password', '$ipk', '$foto_name')";
		mysqli_query($connect,$sql_tambah);
	?>
		<script language="javascript">alert("Register Successful");</script>
			<script>document.location.href='beranda.html';</script>
	<?php
	}
	else {
		?>
		<script language="javascript">alert("Register Failed");</script>
			<script>document.location.href='daftarmentor.html';</script>
	<?php
	}
mysqli_close($connect);
?>