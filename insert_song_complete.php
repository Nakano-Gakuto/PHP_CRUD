<?php
	$albumname = $_POST["insert_albumname"];
	$songtitle = $_POST["insert_songtitle"];
	$memon = $_POST["insert_memon"];
	$registration = $_POST["insert_registration"];
	$image = $_POST["insert_image"];
	$sql ="insert into revue
	(albumname,songtitle,memon,registration,image)value 
	('".$albumname."','".$songtitle."','".$memon."','".$registration."','".$image."')";
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
		<div class="insert_song_box2">
			<h3>楽曲登録完了</h3>
			<p>登録完了しました</p><br>
			<div class="insert_new_song2">
				<a href="index.php"><input type="submit" class="btn" value="ログイン"></a>
			</div>
		</div>
		<div class="footer">
		</div>
	</body>
</html>