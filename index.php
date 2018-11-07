<?php 
	require_once 'controller.php';
	$controller = new controller();
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<?php $controller->login(); ?>
<form action="" method="post">
	<table>
		<h2>LOGIN</h2>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><button><a href="register.php">Create Akun</a></button></td>
			<td></td>
			<td><input type="submit" name="submit" class="tombol-merah" value="Login"></td>
		</tr>
	</table>
</form>
</body>
</html>
