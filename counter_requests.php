<?php
	// database connect
    function db_connect($hostname, $username, $password, $database){
        $dsn = "mysql:host=".$hostname.";dbname=".$database;
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try{
            $pdo = new PDO($dsn, $username, $password, $options);
            return $pdo;
        }
        catch(PDOException $e){
            return null;
        }
    }
	
	// select order by sentTime
	function select_rows($pdo, $table, $where="1"){
		try{
			// select
			$sql = "SELECT * FROM `".$table."` WHERE ".$where;
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
		catch(PDOException $e){
			echo "error: select row";
			var_dump($e);
			return false;
		}
		return true;
	}

	// update table - where key0 = value0
	function update_row($pdo, $table, $query){
		// where
		
		try{
			// update
			$stmt = $pdo->prepare($query);
			// $stmt->execute(array_push($values, $values[0]));
			$stmt->execute();
		}
		catch(PDOException $e){
			echo "error: update row";
			var_dump($e);
			return false;
		}

		return true;
	}
	
	$pdo = db_connect("localhost", "root", "", "test");
	$table_name = "test_counter";
	
	$rows = select_rows($pdo, $table_name, "`test_key` LIKE 'current' ORDER BY `id` DESC LIMIT 0,1");
	
	if(!empty($rows)){
		$counter = $rows[0]['test_val'];
		$counter ++;
		update_row($pdo, $table_name, "UPDATE `".$table_name."` SET `test_val` = '".$counter."' WHERE `id` = '".$rows[0]['id']."'");
	}

	// request analysis
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$browser = get_browser(null, true);
	$server = $_SERVER;
	
?>
<html>
	<head>
		<title>Counter of Requests</title>
	</head>
	<body>
		<h1>Current : <b><?php echo $counter; ?></b></h1>
		<h2>User Agent:</h2>
		<p><?php echo $user_agent; ?></p>
		<h2>Browser:</h2>
		<p><?php var_dump($browser); ?></p>
		<h2>Server:</h2>
		<p><?php var_dump($server); ?></p>
		<script>
			document.onkeydown = function(e) { 
				console.log(e.keyCode);
			}; 
		</script>
	</body>
</html>