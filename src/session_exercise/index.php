<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>
<body>
    <header>
        <nav class="">
        <a href="#">
            <img src="../../assets/img/assembler.png" alt="logo">
        </a>
        <ul class="">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">About me</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="">
            <form action="./includes/validate.php" method="POST">
                <input type="text" name="email" placeholder="Username/E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit">Login</button>
            </form>
        </div>
        </nav>
    </header>
    <main></main>
    <footer></footer>
</body>
</html>