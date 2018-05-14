<?php
	if(issert($_POST['save'])){
$filename = $_FILES['gambar']['save'];

$sql = "insert into simpan (gambar, keterangan) values ('$fileName', '".$_POST['keterangan']."')";
mysql_query($sql);
// simpan di gambar
move_uploaded_file($_FILES['gambar']['tmp_name'],"gambar/".$_FILES['gambar']['name']);
echo"<script>alert('Gambar telah berhasil di upload!');history.go(-1);</script>"
	}
?>