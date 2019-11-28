<?php
	session_start();
	if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

</body>
	<?php
		echo $_SESSION['user'];
		echo $_SESSION['pass'];
	?>
	<a href="home.php?logout=yes">
		Logout
	</a>
	<table border="1">
		<tr>
			<td>
				<a href="home.php?menu=profil">
					profil
				</a>
			</td>
			<td>
				<a href="home.php?menu=about">
					about
				</a>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php
					if ( isset($_GET['menu'])) {
						if ($_GET['menu'] == "profil") {
							include_once('profil.php');
						}else if($_GET['menu'] == "about"){
							include_once('about.php');
						}
					}
				?>
			</td>
		</tr>
	</table>

	<?php
	if (isset($_GET['logout'])) {
		session_destroy();
		header('location: index.php');
	}
	?>
</html>


<?php
	}else{
		echo "

		<script>
			alert('Anda harus login!');
		</script>

		";
		header('Location: index.php');
	}
?>