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
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="product_naam">Product:</label><br>
        <input type="text" id="product_naam" name="product_naam"><br>
        <label for="product_naam">prijs:</label><br>
        <input type="number" id="prijs_per_stuk" name="prijs_per_stuk"><br>
        <label for="product_naam">omschrijving:</label><br>
        <input type="text" id="omschrijving" name="omschrijving"><br>
        <input type="submit" name="submit" value="opsturen">
    </form>

    <?php

    if(isset($_POST['submit'])) {
        $product = $_POST["product_naam"];
        $prijs = $_POST["prijs_per_stuk"];
        $omschrijving = $_POST["omschrijving"];
        $product_code= 2;
        $sql = "UPDATE winkel SET product_naam=?, prijs_per_stuk=?, omschrijving=? WHERE product_code=?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$product, $prijs, $omschrijving, $product_code]);
    }

    ?>
</body>
</html>