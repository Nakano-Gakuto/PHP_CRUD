<?php
	$email = $_POST["email"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$sql ="insert into userdata
	(email,password,name)value 
	('$email','$password','$name')";
	$db = mysqli_connect("localhost", "root", "admin","uver");
	$result = mysqli_query($db, $sql);
	mysqli_close($db);
?>
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
		<div class="insert_box2">
			<h3>会員登録完了</h3>
			<p>登録完了しました</p><br>
			<div class="new_login">
				<a href="index.php"><input type="submit" class="btn" value="ログイン"></a>
			</div>
		</div>
		<div class="footer">
		</div>
	</body>
</html>