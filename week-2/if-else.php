<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="if-else.php" method="POST">
<label for="email">E-mail</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="password">Password:</label><br>
  <input type="text" id="password" name="password"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

<?php 
    // $variabele1 = 10;
    // $variabele2 = 10;

    // if($variabele1 == $variabele2) {
    //     echo "De twee waarden zijn gelijk";
    // } else {
    //     echo "De twee waarden zijn ongelijk";
    // }

    // $variabele1 = 10;
    // $variabele2 = 12;
    
    //     if($variabele1 <> $variabele2) {
    //         echo "De twee waarden zijn ongelijk";
    //     }

    // $variabele1 = 10;
    // $variabele2 = 10;
        
    // if($variabele1 == $variabele2){
    //     echo "De twee waarden zijn gelijk";
    // } else {
    //     echo "De twee waarden zijn ongelijk";
    // }

    $email = $_POST['email'];
    $password =$_POST['password'];


    if(isset($_POST['submit'])) {
    echo $email;
    echo "<br/>";
    echo $password;

    }

    ?>