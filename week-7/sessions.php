<?php
session_start();
?>
<?php
$host = 'localhost:3306';
$db   = 'product';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
     $pdo = new PDO($dsn, $user, $pass, $options);
} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
<!DOCTYPE html>
<html>
<body>

<h1>alle data uit mijn tabel </h1><br>
<?php
    $namen = array('');
    $data = $pdo->query("SELECT * FROM winkel")->fetchAll();
    foreach ($data as $row) {
        echo $row['product_naam']."<br />\n";
        array_push($namen, $row['product_naam']);
    }

    $_SESSION['namen'] = $namen;
    var_dump($_SESSION);
?>


</body>
</html>