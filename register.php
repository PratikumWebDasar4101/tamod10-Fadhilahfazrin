<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<form action="" method="post">
	<table>
		<h2>CREATE ACCOUNT</h2>
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
			<td>Re-type Password</td>
			<td>:</td>
			<td><input type="password" name="re-pass"></td>
		</tr>
		<tr>
			<td><input type="submit" name="buat" value="Create"></td>
		</tr>
	</table>
</form>
<?php $controller->register(); ?>
</body>
</html>
