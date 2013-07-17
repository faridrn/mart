<?php
if (isset($_GET['logout'])) $_POST['task'] = 'logout';
if (isset($_POST['task'])) {
	$task = $_POST['task'];
	switch ($task) {
		case 'login':
			if (!empty($_POST['username']) && $_POST['username'] == '1') {
				$username = 'فرید';
				setcookie('mart-login', $username, time() + 604800);
				header('Location: index.php');
			}
			break;
		case 'logout':
			if (!empty($_COOKIE['mart'])) {
				setcookie('mart-login', '', time() - 604800);
				header('Location: index.php');
			}
			break;
	}
}