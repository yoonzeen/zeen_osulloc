<?php
	header("content-type:text/html; charset=utf-8");

	session_start();
	session_unset();
	session_destroy();

	echo "<meta http-equiv='Refresh' content='1; url=index.php'/>";
?>
