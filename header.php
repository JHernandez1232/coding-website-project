<php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
            <button>
                    <Li><a href="index.php">home</a></li>
                    </button>
                <button>
                    <Li><a href="array.php">array</a></li>
                    </button>
                    <button>
                    <Li><a href="calculator.php">calculator</a></li>
                    </button>
                    <button>
                    <Li><a href="calendar.php">calendar</a></li>
                    </button>
                    <button>
                    <Li><a href="switch.php">switch</a></li>
                </button>
            </ul>
        </mav>
    </header>

    <?php
    echo $_POST['name'];
    ?>




<?php
setcookie("name", "juan", time() - 172800000);

$_SESSION['username'] = "mahs_jhernandez"; 
echo $_SESSION['username'];

if (!isset($_SESSION['username'])) {
    echo "You are not logged in!";
}   else {
    echo "You are logged in!";
}

?>
    
<form method="POST">
    <input type="hidden" name="name" value="juan">
    <button type="submit">PRESS ME</button>
</form>

</body>
</html>



