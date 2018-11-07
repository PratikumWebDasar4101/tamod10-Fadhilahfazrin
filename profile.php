<?php 
require_once 'controller.php';
$controller	= new controller();
 ?>
<html>
<body>
<table border="1">
	<thead>
	<th>Username</th>
	<th>Password</th>
	<th>Action</th>
	</thead>
	<?php $controller->profile(); ?>
</table><br>
<button><a href="logout.php">Logout</a></button>
</body>
</html>