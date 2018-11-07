<?php 
require_once 'controller.php';
$controller	= new controller();
 ?>
<html>
<body>
	<h2>Selamat Datang</h2>
	<form method="post">
		Cari :<input type="text" name="input" placeholder="masukkan nim">
		<input type="submit" name="cari" value="Cari">
	</form>
	<h4>Data Mahasiswa</h4>
<table border="1">
	<thead>
		<th>NIM</th>
		<th>Nama Depan</th>
		<th>Nama Belakang</th>
		<th>Kelas</th>
		<th>Hobi</th>
		<th>Genre Film</th>
		<th>Tempat Wisata</th>
		<th>Tanggal Lahir</th>
		<th>Email</th>
		<th>Action</th>
	</thead>
	<?php 
	if (isset($_POST['cari'])) {
		$controller->cari();
	}else{
		$controller->dashboard();
	}

	 ?>
</table>
<br><br>
<a href="newData.php">Input Data</a>
<br>
<a href="profile.php">Profil</a>
</body>
</html>