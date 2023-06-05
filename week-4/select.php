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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Hoe je alles selecteert in een query zonder variabele</h1><br>
    <?php
    $data = $pdo->query("SELECT * FROM winkel")->fetchAll();
    foreach ($data as $row) {
        echo $row['product_naam']."<br />\n";
        echo $row['prijs_per_stuk']."<br />\n";
        echo $row['omschrijving']."<br />\n " . "<br />\n";
    }
    ?>
    <h1>Hoe je een single row selecteert met placeholders</h1>
    <?php
    $productnaam = 1;
    $stmt = $pdo->prepare("SELECT * FROM winkel WHERE product_code=?");
    $stmt->execute([$productnaam]); 
    $row = $stmt->fetch();

    if (isset($row)) {
        echo $row['product_naam']."<br />\n";
        echo $row['prijs_per_stuk']."<br />\n";
        echo $row['omschrijving']."<br />\n " . "<br />\n";
    }
    ?>
<h1>Hoe je een single row selecteert met named parameters</h1>
<?php
    $product_code = 2;
    $stmt = $pdo->prepare("SELECT * FROM winkel WHERE product_code=:product_code");
    $stmt->execute(['product_code' => $product_code]); 
    $row = $stmt->fetch();

    if (isset($row)) {
        echo $row['product_naam']."<br />\n";
        echo $row['prijs_per_stuk']."<br />\n";
        echo $row['omschrijving']."<br />\n " . "<br />\n";
    }
?>

</body>
</html>