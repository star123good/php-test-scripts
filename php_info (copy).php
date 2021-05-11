<?php
	// session
	session_start();
    
    if (!isset($_GET['show'])) {
        $_SESSION['key_session'] = 'value session test';
        echo"save and show session:<br/>";
    }
    else {
        echo"only show session:<br/>";
    }
	var_dump($_SESSION);
?>