<?php
	$id = $_POST["id"];
	$albumname = $_POST["albumname"];
	$songtitle = $_POST["songtitle"];
	$memon = $_POST["memon"];
	$updateday = $_POST["updateday"];
	$image = $_POST["image"];
	$userid = $_POST["userid"];
		$password = $_POST["password"];
		$email = $_POST["email"];
		$name = $_POST["name"];
		$sql = "update revue set
		albumname='".$albumname."', songtitle='".$songtitle."', memon='".$memon."', updateday='".$updateday."', image='".$image."' where id=".$id;
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
		<div class="update_box2">
			<h3>更新完了</h3>
			<p>更新完了しました</p>
			<div class="select_btn">
				<?php
					echo'<form action="choice.php" method="post">';
						echo'<input type="submit" class="btn" value="検索画面">';
						echo'<input type="hidden" name="userid" value="'.$userid.'">';
						echo'<input type="hidden" name="email" value="'.$email.'">';
						echo'<input type="hidden" name="password" value="'.$password.'">';
						echo'<input type="hidden" name="name" value="'.$name.'">';
					echo'</form>';
					echo'<div class="rogu_out_3">';
						echo'<a href="index.php"><input type="submit" class="btn" value="ログアウト"><a>';	
					echo'</div>';
				?>
			</div>
		</div>
		<div class="footer">
		</div>
	</body>
</html>