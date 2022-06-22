<?php
	include "00_conn.php";

	$userid = $_POST['userid'];
	$userpw = $_POST['userpw'];

	$sql = "SELECT * FROM joinmember WHERE userid='$userid' AND userpw='$userpw'";
	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_array($result);

	if($row['userid'] == $userid && $row['userpw'] == $userpw) {
		session_start();
		$_SESSION['userid'] = $userid;
		echo "<p style='color:#669966; text-align:center; margin-top:100px; font-size:15px;'>로그인 성공 !</p>;";
	}
	else {
		echo "<script>alert('아이디 또는 비밀번호가 일치하지 않습니다.');
		history.go(-1); </script>";
	}

	mysqli_close($conn);

	echo "<meta http-equiv='Refresh' content='1; url=index.php' title='메인 페이지'/>";

?>
