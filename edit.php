<?php 
	require_once 'controller.php';
	$controller	= new controller();
	$nim 	= $_GET['nim'];
	$result	= $controller->ambil_data($nim);

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$nim 			= $row['nim'];
			$nama_depan		= $row['nama_depan'];
			$nama_belakang	= $row['nama_belakang'];
			$kelas 			= $row['kelas'];
			$ttl 			= $row['ttl'];
			$email 			= $row['email'];
			$kesukaan 		= explode(", ", $row['hobi']);
			$film 			= explode(", ", $row['genre_film']);
			$tempat 		= explode(", ", $row['wisata']);
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="proses-edit.php" method="post">
	<?php $controller->edit(); ?>
	<table>
		<h2>Ubah Data Anda</h2>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $nim;?>" disabled>
				<input type="hidden" name="nim" value="<?php echo $nim;?>">
			</td>
		</tr>
		<tr>
			<td>Nama Depan</td>
			<td>:</td>
			<td><input type="text" name="nama_depan" maxlength="25" value="<?php echo $nama_depan;?>"></td>
		</tr>
		<tr>
			<td>Nama Belakang</td>
			<td>:</td>
			<td><input type="text" name="nama_belakang" maxlength="25" value="<?php echo $nama_belakang;?>"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="text" name="kelas" value="<?php echo $kelas;?>"></td>
		</tr>
		<tr>
			<td valign="top">Hobi</td>
			<td valign="top">:</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Merindu" <?php if(in_array('Merindu', $kesukaan)):echo 'checked="checked"'; endif ?>>Merindu<br>
				<input type="checkbox" name="hobi[]" value="Menyanyi" <?php if(in_array('Menyanyi', $kesukaan)):echo 'checked="checked"'; endif ?>>Menyanyi<br>
				<input type="checkbox" name="hobi[]" value="Menulis" <?php if(in_array('Menulis', $kesukaan)):echo 'checked="checked"'; endif ?>>Menulis<br>
				<input type="checkbox" name="hobi[]" value="Membaca" <?php if(in_array('Membaca', $kesukaan)):echo 'checked="checked"'; endif ?>>Membaca<br>
				<input type="checkbox" name="hobi[]" value="Melukis" <?php if(in_array('Melukis', $kesukaan)):echo 'checked="checked"'; endif ?>>Melukis<br>
			</td>
		</tr>
		<tr>
			<td valign="top">Genre Film Favorit</td>
			<td valign="top">:</td>
			<td>
				<input type="checkbox" name="genre_film[]" value="Comedy" <?php if(in_array('Comedy', $film)):echo 'checked="checked"'; endif ?>>Comedy<br>
				<input type="checkbox" name="genre_film[]" value="Horror" <?php if(in_array('Horror', $film)):echo 'checked="checked"'; endif ?>>Horror<br>
				<input type="checkbox" name="genre_film[]" value="Adventure" <?php if(in_array('Adventure', $film)):echo 'checked="checked"'; endif ?>>Adventure<br>
				<input type="checkbox" name="genre_film[]" value="Fantasy" <?php if(in_array('Fantasy', $film)):echo 'checked="checked"'; endif ?>>Fantasy<br>
				<input type="checkbox" name="genre_film[]" value="Romance" <?php if(in_array('Romance', $film)):echo 'checked="checked"'; endif ?>>Romance<br>
				<input type="checkbox" name="genre_film[]" value="Action" <?php if(in_array('Action', $film)):echo 'checked="checked"'; endif ?>>Action<br>
			</td>
		</tr>
		<tr>
			<td valign="top">Tempat Wisata Favorit</td>
			<td valign="top">:</td>
			<td>
				<input type="checkbox" name="wisata[]" value="Bandung" <?php if(in_array('Bandung', $tempat)):echo 'checked="checked"'; endif ?>>Bandung<br>
				<input type="checkbox" name="wisata[]" value="Yogyakarta" <?php if(in_array('Yogyakarta', $tempat)):echo 'checked="checked"'; endif ?>>Yogyakarta<br>
				<input type="checkbox" name="wisata[]" value="Lombok" <?php if(in_array('Lombok', $tempat)):echo 'checked="checked"'; endif ?>>Lombok<br>
				<input type="checkbox" name="wisata[]" value="Jakarta" <?php if(in_array('Jakarta', $tempat)):echo 'checked="checked"'; endif ?>>Jakarta<br>
				<input type="checkbox" name="wisata[]" value="Bali" <?php if(in_array('Bali', $tempat)):echo 'checked="checked"'; endif ?>>Bali<br>
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input type="date" name="ttl" value="<?php echo $ttl;?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email" placeholder="example@gmail.com" value="<?php echo $email;?>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="edit" value="Simpan"></td>
		</tr>
	</table>
</form>
</body>
</html>