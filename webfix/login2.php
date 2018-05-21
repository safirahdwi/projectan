<?php
include 'db.php';
	
	$email = $_POST['email'];//dapetin data email sesuai dengan nama atribut
	$username= $_POST['username'];
	$password = $_POST ['password'];
	
	$result	= mysqli_query ($connect, "SELECT * FROM mentor WHERE email = '$email' OR username= '$username' and password= '$password'") ;
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC); //lu fetching(ngambil satu2) data yang ada database, array karena databes bentuknya array
	
	$result	= mysqli_query ($connect, "SELECT * FROM mahasiswa WHERE email = '$email' OR username= '$username' and password= '$password'") ;
	$r = mysqli_fetch_array($result, MYSQLI_ASSOC); //lu fetching(ngambil satu2) data yang ada database, array karena databes bentuknya array
	
	IF ($row) {
			$_SESSION ['id'] = $row['id_mentor'] ;//sesion untuk mengenali ada akun atau ngga
			$_SESSION ['status'] = "mentor";
			?>
				<script language = "javascript" > alert ("logging successfull"); </script>
				<script> document.location.href = 'beranda.html' ; </script>
			<?php
		}
	ELSE IF($r){
			$_SESSION ['id'] = $r['id_mahasiswa'] ;//sesion untuk mengenali ada akun atau ngga
			$_SESSION ['status'] = "mahasiswa";

			?>
				<script language = "javascript" > alert ("logging successfull"); </script>
				<script> document.location.href = 'beranda.html' ; </script>
			<?php
	}
		?>
			<script language ="javascript"> alert("logging unsuccessful"); </script>
				<script> document.location.href = 'masuk.html' ; </script>
		<?php
		mysqli_close ($connect);
		