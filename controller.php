 <?php
	class controller{
		function login(){
			require_once 'koneksi.php';
			if (isset($_POST['submit'])) {
				$username 	= $_POST['username'];
				$password 	= $_POST['password'];
				$sql	= mysqli_query($conn, "SELECT * FROM user WHERE username='$username' && password='$password'");
				$row	= mysqli_num_rows($sql);
				if ($row == 1) {
				session_start();
				$_SESSION['username'] = $username;
					header('Location: dashboard.php');
				}else{
				echo "Maaf akun anda belum terdaftar";
				echo "<a href= register.php> Create Account";
				}
			}
		}

		function register(){
			require_once 'koneksi.php';
			if (isset($_POST['buat'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				$sql	= "INSERT INTO user(username, password) VALUES ('$username', '$password')";
				if (mysqli_query($conn, $sql)) {
					header('Location: index.php');
				}else{
					echo "Anda gagal membuat akun";
				}
			}
		}

		function dashboard(){
			require_once 'koneksi.php';
			$sql	= "SELECT * FROM mahasiswa";
			$result	= mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$nim = $row['nim'];
					echo "<tr>";
					echo "<td>".$row['nim']."</td>";
					echo "<td>".$row['nama_depan']."</td>";
					echo "<td>".$row['nama_belakang']."</td>";
					echo "<td>".$row['kelas']."</td>";
					echo "<td>".$row['hobi']."</td>";
					echo "<td>".$row['genre_film']."</td>";
					echo "<td>".$row['wisata']."</td>";
					echo "<td>".$row['ttl']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>" ."<a href='edit.php?nim=$nim'>Edit</a> | <a href='controller.php?delete=true&nim=$nim'>Hapus</a>" . "</td>";
					echo "</tr>";
				}
			} else {
				echo "0 Result";
			}
			mysqli_close($conn);
		}

		function newData(){
			require_once 'koneksi.php';
			if (isset($_POST['tambah'])) {
				$nim = $_POST['nim'];
				$nama_depan = $_POST['nama_depan'];
				$nama_belakang = $_POST['nama_belakang'];
				$kelas = $_POST['kelas'];
				$hobi = $_POST['hobi'];
				$genre_film = $_POST['genre_film'];
				$wisata = $_POST['wisata'];
				$ttl = $_POST['ttl'];
				$email = $_POST['email'];

				$kesukaan	= implode(", ", $hobi);
				$film 		= implode(", ", $genre_film);
				$tempat 	= implode(", ", $wisata);

				$sql = "INSERT INTO mahasiswa(nim, nama_depan, nama_belakang, kelas, hobi, genre_film, wisata, ttl, email) VALUES ('$nim', '$nama_depan', '$nama_belakang', '$kelas', '$kesukaan', '$film', '$tempat', '$ttl', '$email')";

				if (mysqli_query($conn, $sql)) {
					header('Location: index.php');
				}else{
					echo "Error";
				}
			}
			mysqli_close($conn);
		}

		function profile(){
			require_once 'koneksi.php';
			session_start();
			$username	= $_SESSION['username'];
			$sql		= "SELECT * FROM user WHERE username='$username'";
			$result		= mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$username = $row['username'];
					echo "<tr>";
					echo "<td>".$row['username']."</td>";
					echo "<td>".$row['password']."</td>";
					echo "<td>" ."<a href=edit-pass.php?username=$username'>Edit Password</a>" . "</td>";
					echo "</tr>";
				}
			}
		}

		function delete($nim){
			if (!empty($_GET['nim'])) {
			require_once 'koneksi.php';
				$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
				if (mysqli_query($conn, $sql)) {
					header("Location: dashboard.php");
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($conn);
				}
			}
			mysqli_close($conn);
		}

		function ambil_data($nim){
			require_once 'koneksi.php';
			$sql = "SELECT * from mahasiswa where nim='$nim'";
			return mysqli_query($conn, $sql);
		}

		function edit(){
			if (isset($_POST['edit'])) {
				$nim 			= $_POST['nim'];
				$nama_depan		= $_POST['nama_depan'];
				$nama_belakang	= $_POST['nama_belakang'];
				$kelas 			= $_POST['kelas'];
				$hobi 			= $_POST['hobi'];
				$genre_film 	= $_POST['genre_film'];
				$wisata 		= $_POST['wisata'];
				$ttl 			= $_POST['ttl'];
				$email 			= $_POST['email'];

				$kesukaan 	= implode(", ", $hobi);
				$film 		= implode(", ", $genre_film);
				$tempat 	= implode(", ", $wisata);

				$sql = "UPDATE mahasiswa SET nama_depan='$nama_depan', nama_belakang='$nama_belakang', kelas='$kelas', hobi='$kesukaan', genre_film='$film', wisata='$tempat', ttl='$ttl', email='$email' WHERE nim=$nim";
				if (mysqli_query($conn, $sql)) {
					header('Location: index.php');
				}else {
				    echo "Error updating record: " . $sql . "<br>" . mysql_error($conn);
				}
				mysqli_close($conn);
			}
		}

		function datapass($username){
			require_once 'koneksi.php';
			$sql = "SELECT * FROM user WHERE username='$username'";
			return mysqli_query($conn, $sql);

		}

		function editpass(){
			if (isset($_POST['ubah'])) {
				$username = $_POST['username'];
				$newpass = $_POST['newpassword'];
				$db = new mysqli("localhost", "root", "", "praktikum8");
				$sql = "UPDATE `user` SET password='$newpass' WHERE username='$username'";

				if (mysqli_query($conn, $sql)) {
					echo "<br>";
					echo "Password Berhasil Diubah";
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($conn);
				}
				mysqli_close($conn);
			}
		}

		function cari(){
			require_once 'koneksi.php';
			$cari	= $_POST['input'];
			$sql	= "SELECT * FROM mahasiswa WHERE nim LIKE '%$cari%'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$nim = $row['nim'];
					echo "<tr>";
					echo "<td>".$row['nim']."</td>";
					echo "<td>".$row['nama_depan']."</td>";
					echo "<td>".$row['nama_belakang']."</td>";
					echo "<td>".$row['kelas']."</td>";
					echo "<td>".$row['hobi']."</td>";
					echo "<td>".$row['genre_film']."</td>";
					echo "<td>".$row['wisata']."</td>";
					echo "<td>".$row['ttl']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>" ."<a href='edit.php?nim=$nim'>Edit</a> | <a href='controller.php?delete=true&nim=$nim'>Hapus</a>" . "</td>";
					echo "</tr>";
				}
			}
		}

		function logout(){
			session_start();
			session_destroy();
			header("Location: index.php");
		}
	}

	$controller = new Controller();
	if (isset($_GET['logout'])) {
		$controller->logout();
	}

	if (isset($_GET['delete'])) {
		$nim = $_GET['nim'];
		$controller->delete($nim);
	}
?>