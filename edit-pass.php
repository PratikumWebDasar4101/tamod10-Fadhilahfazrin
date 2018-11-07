<?php 
require_once 'controller.php';
$controller	= new controller();
$username	= $_GET['username'];
$result		= $controller->datapass($username);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$username	= $row['username'];
		$password	= $row['password'];
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
	<h2>Edit Password</h2>
	Username : <input type="text" name="username" value="<?php echo $username; ?>"><br>
	Password : <input type="password" name="password" value="<?php echo $password; ?>"><br>
	New Password : <input type="password" name="newpassword"><br>
	<input type="submit" name="ubah">
</form>
<?php $controller->editpass(); ?>
</body>
</html>