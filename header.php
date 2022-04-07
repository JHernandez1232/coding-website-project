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
        <a href="#">
            <img src="images/logo.png" alt="logo">
        </a>
        <ul>
            <li><a href="array.php">Array</a></li>
            <li><a href="calculator.php">calculator</a></li>
            <li><a href="calendar.php">Calendar</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="switch.php">switch</a></li>
        </ul>
        <div>
            <form action="includes/login.inc.php" methods="post">
                <input type="text" name="mailuid" placeholder="Username/E-mail...">
                <input type="text" name="mailuid" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>
            <form action="includes/logout.inc.php" methods="post">
            <button type="submit" name="logout-submit">logout</button>
            </div>
        </nav>
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



