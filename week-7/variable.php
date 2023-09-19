<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$namen = $_SESSION['namen'];
foreach($namen as $value) {
    echo $value . "<br\n>";
}
?>

</body>
</html>