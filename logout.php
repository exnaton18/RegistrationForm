<?php
	session_start();
	unset($_SESSION['session_username']);
	session_destroy();
	if ($_GET['lang'])
		echo "<script>ok</script>";
	else
	header("Location: login.php?lang=".$_GET['lang']);
?>