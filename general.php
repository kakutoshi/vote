<?php

function update_vote($mysqli)
{
	$id = $_GET['id'];
	if (isset($_GET['votes'], $_GET['id'])) {
		$query = "update tb1 set votes = votes + 1 where id =$id";
		$mysqli->query($query);
	} else {
	}





	//	$id = $_GET['id'];

	//	// クッキーで投票済かどうかを判断する
	//	if (!isset($_COOKIE['voted_' . $id])) {

	//		// GETが実行されたときに下記を実行
	//		if (isset($_GET['vote'], $_GET['id'])) {
	//			$query = "UPDATE tb1 SET votes = votes + 1 WHERE id = $id";
	//			$mysqli->query($query);

	//			// クッキーの付与
	//			// 参考：http://php.net/manual/ja/function.setcookie.php#refsect1-function.setcookie-examples
	//			setcookie("voted_" . $id, "voted_" . $id, time() + 86400);  // 有効期限は一日です

	//		}
	//	} else {
	//		//echo "投票済です";
	//	}
	//}
}
