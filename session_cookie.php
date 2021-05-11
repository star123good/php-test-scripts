<?php
	// session
	session_start();
	$_SESSION['key_session'] = 'value session test';
	echo"session:<br/>";
	var_dump($_SESSION);
	
	// cookie
	setcookie('key_cookie', 'value cookie test');
	echo"<br/>cookie:<br/>";
	var_dump($_COOKIE);