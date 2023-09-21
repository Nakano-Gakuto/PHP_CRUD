<?php
	$email = $_POST["email"];
	$password = $_POST["password"];
	$db = mysqli_connect("localhost", "root", "admin", "uver");
	$sql = "select*from userdata where email='".$email."'and password='".$password."'";
	$result = mysqli_query($db, $sql);
	$loginFlug = false;
	$name = "";
	while($data = mysqli_fetch_assoc($result)) {
		$name = $data['name'];
		$loginFlug = true;
		$userid= $data["userid"];
		$password= $data["password"];
		$email= $data["email"];
	}
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
		<div class="checkbox">
			<h3>マイページ</h3>
			<?php
				if ($loginFlug) {
						echo'<p>'.$name.'さん、ログインできました。</p>';
						echo'<p>アルバム検索又は紹介文閲覧、編集可能です。</p>';
						echo'<p>サイトができたてなので、紹介文の書き込み協力お願いします!</p>';
						echo'<div class="checkbox_button">';
							echo'<div class="checkbox_button_1">';
								echo'<form action="choice.php" method="post">';
									echo'<a href="choice.php"><input type="submit" class="btn" value="楽曲一覧"></a>';
									echo'<input type="hidden" name="userid" value="'.$userid.'">';
									echo'<input type="hidden" name="email" value="'.$email.'">';
									echo'<input type="hidden" name="password" value="'.$password.'">';
									echo'<input type="hidden" name="name" value="'.$name.'">';
								echo'</form>';
							echo'</div>';
							echo'<div class="checkbox_button_2">';
								echo'<form action="insert_song.php" method="post">';
									echo'<a href="insert_song.php"><input type="submit" class="btn" value="楽曲登録"></a>';
									echo'<input type="hidden" name="userid" value="'.$userid.'">';
									echo'<input type="hidden" name="email" value="'.$email.'">';
									echo'<input type="hidden" name="password" value="'.$password.'">';
									echo'<input type="hidden" name="name" value="'.$name.'">';
								echo'</form>';
							echo'</div>';
							echo'<div class="checkbox_button_3">';
								echo'<form action="delete.php" method="post">';
									echo'<input type="hidden" name="userid" value="'.$userid.'">';
									echo'<input type="submit" class="btn" value=" 退会">';	
									echo'<input type="hidden" name="email" value="'.$email.'">';
									echo'<input type="hidden" name="password" value="'.$password.'">';
									echo'<input type="hidden" name="name" value="'.$name.'">';
								echo'</form>';
							echo'</div>';
							echo'<div class="checkbox_button_4">';
								echo'<a href="index.php"><input type="submit" class="btn" value="ログアウト"><a>';	
							echo'</div>';
						echo'</div>';
					} else {
						echo'<div class="checkbox_else">';
							echo'<p>Email又はPasswordが正しくありません。</p>';
								echo'<div class="back_btn">';
									echo'<a href="index.php"><input type="submit" class="btn" value=" 戻る"></a>';
								echo'</div>';
						echo'</div>';
					}
			?>
		</div>
		<div class="footer">
		</div>
	</body>
</html>