<?php
	session_start();
	unset($_SESSION['session_username']);
	session_destroy();
	header("Location: login.php?lang=".$_GET['lang']);
?>