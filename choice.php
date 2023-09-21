<?php
	$userid = $_POST["userid"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$name = $_POST["name"];
	$db = mysqli_connect("localhost", "root", "admin", "uver");
	$sql = "select*from revue";
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
		<div class="search_box">
			<h3>楽曲検索</h3>
			<div class="inputs">
				<div class="search_input">
					<div class="select_name">
						<form action="selection_result.php" method="post">
								<label for="albumname">楽曲検索</label>
									<select name="albumname">
										<option value="Timeless">Timeless</option>
										<option value="BUGRIGHT">BUGRIGHT</option>
										<option value="プログリューション">プログリューション</option>
										<option value="AwakEVE">AwakEVE</option>
										<option value="Neo SOUND BEST">Neo SOUND BEST</option>
										<option value="LAST">LAST</option>
										<option value="LIFE 6 SENSE">LIFE 6 SENSE</option>
										<option value="THE ONE">THE ONE</option>
										<option value="Φ CHOIR">Φ CHOIR</option>
										<option value="TYCOON">TYCOON</option>
										<option value="UNSER">UNSER</option>
									</select>
							<?php
								echo'<input type="submit" class="btn" value=" 検索">';
								echo'<input type="hidden" name="userid" value="'.$userid.'">';
								echo'<input type="hidden" name="email" value="'.$email.'">';
								echo'<input type="hidden" name="password" value="'.$password.'">';
								echo'<input type="hidden" name="name" value="'.$name.'">';
							?>
						</form>
					</div>
					<div class="rogu_out_1">
						<a href="index.php"><input type="submit" class="btn" value="ログアウト"><a>
					</div>
				</div>
			</div>
				<table border="1">
						<tr>
							<th> アルバム画像 </th><th>アルバム名</th><th> 曲名 </th><th> 紹介文 </th><th> 登録日時 </th><th> 更新日時 </th><th>詳細</th>
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
								echo'<td id="songtitle">'.$data["songtitle"].'</td>';
								echo'<td>'.$data["memon"].'</td>';
								echo'<td>'.$data["registration"].'</td>';
								echo'<td>'.$data["updateday"].'</td>';
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
							echo' </tr>';
				}
						?>
				</table>
		</div>
		<div class="footer">
		</div>
	</body>
</html>