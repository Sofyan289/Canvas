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
$sql = "select * from winkel";
$stmt = $pdo->query($sql);

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
    <table>
        <tr>
            <th>product</th>
            <th>prijs</th>
            <th>omschrijving</th>
        </tr>
        <?php foreach ($stmt as $row) {?>
            <tr>
                <td><?php echo $row['product_naam']; ?></td>
                <td><?php echo $row['prijs_per_stuk']; ?></td>
                <td><?php echo $row['omschrijving']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>