<?php
	$userid = $_POST["userid"];
	$db = mysqli_connect("localhost", "root", "admin", "uver");
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
		<div class="delete_box_next">
			<h3>確認</h3>
			<p>本当に削除しますか？</p>
			<div class="select_complete">
				<div class="yes_delete">
					<?php
						echo'<form action="delete_complete.php" method="post">';
							echo'<input type="hidden" name="userid" value="'.$userid.'">';
							echo'<input type="submit" class="btn" value=" はい">';
						echo'</form>';
					?>
				</div>
				<div class="not_delete">
					<form action="index.php" method="post">
						<input type="submit" class="btn" value="いいえ"</a>
					</form>
				</div>
			</div>
		</div>
		<div class="footer">
		</div>
	</body>
</html>