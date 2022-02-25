<?php
session_start();
echo sprintf("CURRENT USER <br><br> name: %s<br>
surname: %s<br>
age: %s<br>", $_SESSION['name'], $_SESSION['surname'], $_SESSION['age']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User info</title>
</head>
<body>
<br><br>
<a href="one.php"><-- Back</a>
</body>
</html>