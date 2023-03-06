<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WG LAUNDRY</title>
	<link rel="stylesheet" href="assets/login/css/style.css">
	<link rel="icon" type="image/png" href="assets/login/images/ikon.png" />
</head>
<body>
	<div class="box">
		<form action="ceklogin.php" method="POST">
			<?php if (isset($_GET['msg'])) : ?>
						<div class="alert alert-danger w-100 text-center" role="alert">
							<small class="text-danger"><?= $_GET['msg'];  ?></small>
						</div>
					<?php endif ?>
			<h2>Login WG Laundry</h2>
			<div class="inputBox">
				<input type="text" name="username" autocomplete="off">
				<span>Username</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" name="password" autocomlete="off">
				<span>Password</span>
				<i></i>
			</div>
			<input type="submit" value="login">
		</form>
	</div>
</body>
</html>