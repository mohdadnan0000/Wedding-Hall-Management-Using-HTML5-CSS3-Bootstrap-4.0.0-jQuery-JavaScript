<?php
	session_start();
	unset($_SESSION['user']);
	session_destroy();
	header("Refresh:0,url=index.php");
?>