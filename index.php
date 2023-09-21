<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="../test/style.css" rel="stylesheet" type="text/css">
		<title>UVERworldアルバム検索</title>
	</head>
	<body>
		<div class="rogo_box">
			<a href="../test/index.php"><h3>UVERworldアルバム検索</h3></a>
		</div>
		<div class="login_box">
			<h3 id="index_login">ログイン</h3>
			<form action="login_check.php" method="post">
				<div class="login_email">
					<label for="email">Email</label><br>
					<input type="text" id="email" name="email" required><br>
				</div>
				<div class="login_password">
					<label for="password">Password</label><br>
					<input type="password" id="password" name="password" required><br>
				</div>
				<div class="login">
					<input type="submit" class="btn" value="ログイン">
				</div>
			</form>
			<div class="insert_new btn">
				<form action="insert.php" method="post">
					<input type="submit" class="btn" value="会員登録">
				</form>
			</div>
		</div>
		<div class="footer">
		</div>
	</body>
</html>