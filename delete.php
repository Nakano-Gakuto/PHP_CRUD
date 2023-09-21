<?php
	$userid = $_POST["userid"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$sql = "select*from revue where userid='".$userid."'";
	$db = mysqli_connect("localhost", "root", "admin", "uver");
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
			<h3>UVERworldアルバム検索</h3>
		</div>
		<div class="header">
			<img src="/test/image/image2.jpg">
		</div>
		<div class="delete_box">
			<h3>アカウント情報</h3>
				<?php
					echo'<div class="delete_id">';
						echo'<label for="id">ID</label><br>';
						echo'<input type="text" id="userid" name="userid" placeholder="'.$userid.'"><br>';
					echo'</div>';
					echo'<div class="delete_email">';
						echo'<label for="email">Email</label><br>';
						echo'<input type="text" id="email" name="email" placeholder="'.$email.'"><br>';
					echo'</div>';
					echo'<div class="delete_password">';
						echo'<label for="password">Password</label><br>';
						echo'<input type="text" id="password" name="password" placeholder="'.$password.'"><br>';
					echo'</div>';
					echo'<div class="delete_name">';
						echo'<label for="name">名前</label><br>';
						echo'<input type="text" id="name" name="name" placeholder="'.$name.'"><br>';
					echo'</div>';
					echo'<div class="delete_input">';
						echo'<form action="delete_choice.php" method="post">';
							echo'<input type="hidden" name="userid" value="'.$userid.'">';
							echo'<input type="submit" class="btn" value=" 削除">';
						echo'</form>';
					echo'</div>';
				?>
			</div>
			<div class="footer">
			</div>
		</body>
	</html>	