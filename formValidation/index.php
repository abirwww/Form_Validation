
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method="post">
    <button type="submit">Show My IP</button>
</form>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ip = $_SERVER["REMOTE_ADDR"];
    echo "Your IP Address is: ".$ip;
}
?>


<?php

?>

</body>
</html>



