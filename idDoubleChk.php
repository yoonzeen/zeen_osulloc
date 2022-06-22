<?php
	include "00_conn.php";
	$q = $_REQUEST['q'];

	$mSql = "SELECT * FROM joinmember WHERE userid='$q'";
	$result = mysqli_query($conn, $mSql);

	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	if($row['userid'] == $q) {
		echo "<img src='img/idchk_no.png' style='display:inline-block; padding-left:10px; vertical-align:middle;' width='20' height='20'alt='no'/>";
	}
	else {
		echo "<img src='img/idchk_ok.png' style='display:inline-block; padding-left:10px; vertical-align:middle;' width='20' height='20' alt='ok'/>";
	}
?>
