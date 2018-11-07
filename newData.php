<?php 
require_once 'controller.php';
$controller	= new controller();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	<table>
		<h2>Tambahkan Data Anda</h2>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" maxlength="10"></td>
		</tr>
		<tr>
			<td>Nama Depan</td>
			<td>:</td>
			<td><input type="text" name="nama_depan" maxlength="25"></td>
		</tr>
		<tr>
			<td>Nama Belakang</td>
			<td>:</td>
			<td><input type="text" name="nama_belakang" maxlength="25"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="text" name="kelas"></td>
		</tr>
		<tr>
			<td valign="top">Hobi</td>
			<td valign="top">:</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Merindu">Merindu<br>
				<input type="checkbox" name="hobi[]" value="Menyanyi">Menyanyi<br>
				<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
				<input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
				<input type="checkbox" name="hobi[]" value="Melukis">Melukis<br>
			</td>
		</tr>
		<tr>
			<td valign="top">Genre Film Favorit</td>
			<td valign="top">:</td>
			<td>
				<input type="checkbox" name="genre_film[]" value="Comedy">Comedy<br>
				<input type="checkbox" name="genre_film[]" value="Horror">Horror<br>
				<input type="checkbox" name="genre_film[]" value="Adventure">Adventure<br>
				<input type="checkbox" name="genre_film[]" value="Fantasy">Fantasy<br>
				<input type="checkbox" name="genre_film[]" value="Romance">Romance<br>
				<input type="checkbox" name="genre_film[]" value="Action">Action<br>
			</td>
		</tr>
		<tr>
			<td valign="top">Tempat Wisata Favorit</td>
			<td valign="top">:</td>
			<td>
				<input type="checkbox" name="wisata[]" value="Bandung">Bandung<br>
				<input type="checkbox" name="wisata[]" value="Yogyakarta">Yogyakarta<br>
				<input type="checkbox" name="wisata[]" value="Lombok">Lombok<br>
				<input type="checkbox" name="wisata[]" value="Jakarta">Jakarta<br>
				<input type="checkbox" name="wisata[]" value="Bali">Bali<br>
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input type="date" name="ttl"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email" placeholder="example@gmail.com"></td>
		</tr>
		<tr>
			<td><input type="submit" name="tambah" value="Tambah"></td>
		</tr>
	</table>
</form>
<?php $controller->newData(); ?>
</body>
</html>