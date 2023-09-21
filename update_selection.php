<?php
	$id = $_POST["id"];
	$userid = $_POST["userid"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$db = mysqli_connect("localhost", "root", "admin","uver");
	$sql = "select*from revue where id= ".$id;
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
		<div class="update1_box">
			<h3>編集</h3>
			<?php
				while($data = mysqli_fetch_assoc($result)) {
					echo'<form action="update.php" method="post">';
						echo'<div class="update_albumname">';
							echo'<label for="update_albumname">アルバム名</label><br>';
							echo'<input type="text" id="update_albumname" name="albumname" placeholder="'.$data["albumname"].'"><br>';
						echo'</div>';
						echo'<div class="update_songtitle">';
							echo'<label for="update_songtitle">曲名</label><br>';
							echo'<input type="text" id="update_songtitle" name="songtitle" placeholder="'.$data["songtitle"].'"><br>';
						echo'</div>';
						echo'<div class="update_memon">';
							echo'<label for="memon">紹介文</label><br>';
							echo'<textarea name="memon" rows="10"cols="57" maxlength="570" placeholder="'.$data["memon"].'"required></textarea><br>';
						echo'</div>';
						echo'<div class="update_day">';
						echo'<label for="updateday" id="updateday">更新日時</label><br>';
							echo'<input type="text" id="updateday" name="updateday" placeholder="2021-01-01 00:00" required>';
						echo'</div>';
						echo'<div class="update_image">';
							echo'<label for=update_image" id="update_image">アルバム画像</label><br>';
							echo'<input type="text" id="update_image" name="image" placeholder="'.$data["image"].'" required>';
						echo'</div>';
						echo'<div class="update">';
							echo'<input type="hidden" name="id" value="'.$id.'">';
							echo'<input type="submit" class="btn" value=" 更新">';
							echo'<input type="hidden" name="userid" value="'.$userid.'">';
							echo'<input type="hidden" name="email" value="'.$email.'">';
							echo'<input type="hidden" name="password" value="'.$password.'">';
							echo'<input type="hidden" name="name" value="'.$name.'">';
						echo'</div>';
				echo'</form>';
				echo'<div class="rogu_out_2">';
					echo'<a href="index.php"><input type="submit" class="btn" value="ログアウト"><a>';
				echo'</div>';
				
				}
			?>
			</table>
		</div>
		<div class="footer">
		</div>
	</body>
</html>