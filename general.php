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

	//	// �N�b�L�[�œ��[�ς��ǂ����𔻒f����
	//	if (!isset($_COOKIE['voted_' . $id])) {

	//		// GET�����s���ꂽ�Ƃ��ɉ��L�����s
	//		if (isset($_GET['vote'], $_GET['id'])) {
	//			$query = "UPDATE tb1 SET votes = votes + 1 WHERE id = $id";
	//			$mysqli->query($query);

	//			// �N�b�L�[�̕t�^
	//			// �Q�l�Fhttp://php.net/manual/ja/function.setcookie.php#refsect1-function.setcookie-examples
	//			setcookie("voted_" . $id, "voted_" . $id, time() + 86400);  // �L�������͈���ł�

	//		}
	//	} else {
	//		//echo "���[�ςł�";
	//	}
	//}
}
