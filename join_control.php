<?php
	include "00_conn.php";

	$userid = $_POST['userid'];
	$userpw = $_POST['userpw'];
	$username = $_POST['username'];
	$userbirth = $_POST['userbirth'];
	$useremailid = $_POST['useremailid'];
	$userphone = $_POST['userphone'];

	if(!empty($userid) && !empty($userpw) && !empty($username) && !empty($userbirth) && !empty($useremailid) && !empty($userphone)){
		$sql = "INSERT INTO joinmember (userid, userpw, username, userbirth, useremailid, userphone) VALUES ('$userid','$userpw','$username','$userbirth','$useremailid','$userphone')";
	}
	$result = mysqli_query($conn, $sql) or die (mysqli_error());

	if($result){
		echo "<meta http-equiv='Refresh' content='1; url=login.php'/>";
	}
	else {
		echo "<p style='text-align:center; color:red;'>Fail.</p>";
	}
?>
