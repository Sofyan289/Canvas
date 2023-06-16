<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["naam"] = "Sofyan";
$_SESSION["email"] = "Sofyan289@gmail.com";
echo "Session variables are set.";
?>

</body>
</html>