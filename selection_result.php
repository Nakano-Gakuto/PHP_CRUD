<?php
	$albumname = $_POST["albumname"];
	$userid = $_POST["userid"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$name = $_POST["name"];
	$sql = "select*from revue where albumname='".$albumname."'";
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
			<a href="../test/index.php"><h3>UVERworldアルバム検索</h3></a>
		</div>
		<div class="header">
			<a href="https://www.uverworld.jp/"><img src="/test/image/image2.jpg"></a>
		</div>
		<div class="result">
			<h3 id="result_h3">アルバム詳細</h3>
			<div class="back">
				<?php
					echo'<form action="choice.php " method="post">';
						echo'<input type="hidden" name="userid" value="'.$userid.'">';
						echo'<input type="hidden" name="email" value="'.$email.'">';
						echo'<input type="hidden" name="password" value="'.$password.'">';
						echo'<input type="hidden" name="name" value="'.$name.'">';
						echo'<input type="submit" class="btn" value="検索に戻る">';
					echo'</form>';
					echo'<div class="rogu_out_1">';
						echo'<a href="index.php"><input type="submit" class="btn" value="ログアウト"><a>';
					echo'</div>';
				?>
			</div>
				<table border="1" id="result_table">
					<tr>
						<th>アルバム写真</th><th>アルバム名</th><th>曲名</th><th>紹介文</th><th>更新日時</th><th>登録日時</th><th>詳細</th>
					</tr>
					<?php
						$color="";
						while($data = mysqli_fetch_assoc($result)){
							if($data["albumname"]=="Timeless") {
								$color="#CCFFCC";
							} else if($data["albumname"]=="BUGRIGHT") {
								$color="#99FFCC";
							} else if($data["albumname"]=="プログリューション") {
								$color="#A4C6FF";
							} else if($data["albumname"]=="AwakEVE") {
								$color="#75A9FF";
							} else if($data["albumname"]=="Neo SOUND BEST") {
								$color="#B384FF";
							} else if($data["albumname"]=="LAST") {
								$color="#FF82B2";
							} else if($data["albumname"]=="LIFE 6 SENSE") {
								$color="#FF8856";
							} else if($data["albumname"]=="THE ONE") {
								$color="#CC33FF";
							} else if($data["albumname"]=="Φ CHOIR") {
								$color="#FF367F";
							} else if($data["albumname"]=="TYCOON") {
								$color="#00ECFF";
							} else if($data["albumname"]=="UNSER") {
								$color="red";
							}
								echo'<tr style="background-color:'.$color.';">';
									echo'<td><img src="/test/image/'.$data["image"].'"></td>';
									echo'<td>'.$data["albumname"].'</td>';
									echo'<td>'.$data["songtitle"].'</td>';
									echo'<td>'.$data["memon"].'</td>';
									echo'<td>'.$data["updateday"].'</td>';
									echo'<td>'.$data["registration"].'</td>';
									echo'<td>';
									echo'<form action="update_selection.php" method="post">';
										echo'<input type="hidden" name="id" value="'.$data["id"].'" >';
										echo'<input type="submit" class="btn" value=" 編集">';
										echo'<input type="hidden" name="userid" value="'.$userid.'">';
										echo'<input type="hidden" name="email" value="'.$email.'">';
										echo'<input type="hidden" name="password" value="'.$password.'">';
										echo'<input type="hidden" name="name" value="'.$name.'">';
									echo'</form>';
								echo'</td>';
							echo '</tr>';
						}
					?>
				</table>
		</div>

		<div class="footer">
		</div>
	</body>
</html>