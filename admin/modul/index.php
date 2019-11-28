<html>
<head>
	<title>.:: Halaman Login Administrator ::.</title>
	<link href="../include/style_admin.css" rel="stylesheet" type="text/css">
</head>
<body>
	<form action="" method="post">
		username
		<input type="text" name="username">
		<br>
		password
		<input type="password" name="password">
		<br>
		<input type="submit" value="Log in" name="submit">
</form>
<?php
if (isset($_POST['submit'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if ( ($user == "admin") && ($pass == "admin") ){
		session_start();
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;
		header('Location: home.php');

	}
}
?>
</body>
</html>
