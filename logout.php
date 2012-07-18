<?php
        unset($_SESSION['nome']);
	unset($_SESSION['login']);
	unset($_SESSION['id']);
	session_destroy();
	header("Location: index.php");
?>
