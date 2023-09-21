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
		<div class="insert_box">
			<h3>新規会員登録</h3>
			<form action="insert_complete.php" method="post">
				<div class="insert_email">
					<label for="email"  id="label_email">Email</label><br>
					<input type="text" id="email" name="email" required>
				</div>
				<div class="insert_password">
					<label for="password"  id="label_password">Password</label><br>
					<input type="text" id="password" name="password" required>
				</div>
				<div class="insert_name">
					<label for="name"  id="label_name">名前</label><br>
					<input type="text" id="name" name="name" required>
				</div>
				<div class="insert_new">
					<input type="submit" class="btn" value=" 登録">
				</div>
			</form>
		</div>
		<div class="footer">
		</div>
	</body>
</html>	