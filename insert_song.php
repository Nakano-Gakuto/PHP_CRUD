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
		<div class="insert_song_box1">
			<h3>楽曲登録</h3>
			<form action="insert_song_complete.php" method="post">
				<div class="insert*albumname">
					<label for="insert_albumname"  id="insert_albumname">アルバム名</label><br>
					<input type="text" id="insert_albumname" name="insert_albumname"  required>
				</div>
				<div class="insert*songtitle">
					<label for="insert_songtitle"  id="insert_songtitle">曲名</label><br>
					<input type="text" id="insert_songtitle" name="insert_songtitle" required>
				</div>
				<div class="insert*memon">
					<label for="insert_memon" id="insert_memon">紹介文</label><br>
					<textarea name="insert_memon" rows="10"cols="57" maxlength="570" id="insert_memon" required></textarea><br>
				</div>
				<div class="insert*registration ">
					<label for="insert_registration" id="insert_registration">登録日時</label><br>
					<input type="text" id="insert_registration" name="insert_registration"placeholder="2021-01-01 00:00:00" required>
				</div>
				<div class="insert*image">
					<label for=insert_image" id="insert_image">アルバム画像</label><br>
					<input type="text" id="insert_image" name="insert_image" placeholder="aaa.jpg" required>
				</div>
				<div class="insert_new_song1">
					<input type="submit" class="btn" value="登録">
				</div>
			</form>
		</div>
		<div class="footer">
		</div>
	</body>
</html>	