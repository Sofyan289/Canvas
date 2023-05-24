<?php

$host = 'localhost';
$username = 'bit_academy';
$password = 'bit_academy';
$dbname = 'Winkel';
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

try {
	$conn = new PDO($dsn, $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected to database ($dbname).";
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>