<?php
//start the session
sision_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
//set session variables
$_SESSION["color"] = "xanh";
$_SESSION["anomal"] = "meo";
echo "Cac biến Session duoc thiet lap";
?>
</body>
</html>