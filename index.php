<?php
ob_start();

require_once('init.php');
require_once('general.php')
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>天皇賞春　勝ち馬予想投票[</title>
</head>

<body>

	<h2>天皇賞春　勝ち馬予想投票</h2>

	<?php

	if ($_GET) {
		update_vote($mysqli);
	}




	//現在の投票数を取得する
	$query = "select id,name,votes from tb1";
	$result = $mysqli->query($query);
	while ($row = $result->fetch_assoc()) { ?>

		<!-- <a href="?vote=up&amp;id=1">アイアンバローズ</a> -->

		<a href="?vote=up&amp;id=<?php echo $row["id"] ?>">

			<?php echo $row["id"]; ?> :
			<?php echo $row["name"]; ?> :
			<?php echo $row["votes"]; ?>

		</a>
		<br />

	<?php }








	?>
</body>

</html>