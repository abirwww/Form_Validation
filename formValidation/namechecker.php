<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method="post">
    Enter your name: <input type="text" name="name">
    <button type="submit"></button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $name = trim($_POST["name"]);

    if (empty($name)){
        echo "Please Enter Your Name";
    } else {
        echo "Welcome ".htmlspecialchars($name) . "!";
    }
}

?>
</body>
</html>