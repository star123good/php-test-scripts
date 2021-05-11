<?php
	session_start();
	echo"session:<br/>";
	var_dump($_SESSION);
	echo"<br/>cookie:<br/>";
	var_dump($_COOKIE);