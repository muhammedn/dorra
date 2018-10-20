<?php
	session_start();
	session_unset();
	session_destroy();
	header('Location: ../manager/index.php');
	exit;
?>