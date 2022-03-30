<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $x = 4;

    switch ($x) {
        case 1:
            echo "harsh is dumb";
        break;
        case 2:
            echo "harsh is smart";
        break;
        case 3:
            echo "harsh is funny";
        break;
        case 4:
            echo "harsh is slow";
        break;
        default:
            echo "harsh is nothing";
    }

    include 'header.php';

?>
</body>
</html>