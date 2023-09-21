<?php
	$userid = $_POST["userid"];
	$sql ="delete from userdata where userid='".$userid."'";
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
		<div class="header">
			<a href="https://www.uverworld.jp/"><img src="/test/image/image2.jpg"></a>
		</div>
		<div class="delete_box_complete">
			<h3>削除完了</h3>
			<p>会員削除しました。</p>
			<a href="index.php"><input type="submit" class="btn" value="ログイン"></a>
		</div>
		<div class="footer">
		</div>
	</body>
</html>