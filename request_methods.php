<?php
	$server = $_SERVER;
	$method = strtoupper($_SERVER['REQUEST_METHOD']);
	if( $method === 'POST' && isset($_REQUEST['REQUEST_METHOD'])) {
		$tmp = strtoupper((string)$_REQUEST['REQUEST_METHOD']);
		if( in_array( $tmp, array( 'PUT', 'DELETE', 'HEAD', 'OPTIONS' ))) {
			$method = $tmp;
		}
		if($method == 'PUT'){
			if (($stream = fopen('php://input', "r")) !== FALSE)
			$put_content = stream_get_contents($stream);
		}
	}
?>
<html>
	<head>
		<title>Methods of Requests</title>
	</head>
	<body>
		<h1>Method : <b><?php echo $method; ?></b></h1>
		<p><?php var_dump($server); ?></p>
		<p><?php if($method == 'PUT') var_dump($put_content); ?></p>
		<div style="border:1px solid #ff00ff margin: 30px;">
			<form action="" method="POST">
				<input type="hidden" name="REQUEST_METHOD" value="PUT" />
				<button type="submit">Submit</button>
			</form>
		</div>
	</body>
</html>