<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="get.php">
        <input type="text" name="naam" placeholder="Naam?"><br>
        <input type="text" name="achternaam" placeholder="achternaam?"><br>
        <input type="number" name="leeftijd" placeholder="Je leeftijd in cijfers?"><br>
        <input type="adres" name="adres" placeholder="adres"><br>
        <input type="email" name="email" placeholder="voorbeeld@email.com"><br>
        <input type="submit" value="Verstuur"><br>
    </form>
</body>
</html>

<?php

$naam = $_GET["naam"];
$achternaam = $_GET["achternaam"];
$leeftijd = $_GET["leeftijd"];
$adres = $_GET["adres"];
$email = $_GET["email"];

echo $naam . PHP_EOL;
echo $achternaam . PHP_EOL;
echo $leeftijd . PHP_EOL;
echo $adres . PHP_EOL;
echo $email . PHP_EOL;
?>