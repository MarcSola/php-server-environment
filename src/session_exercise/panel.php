<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel.php</title>
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
            <form action="close_session.php" method="POST">
                <button type="submit" name="logout-submit">Logout</button>
            </form>
        </div>
        </nav>
    </header>
    <main>
        <div>
            <p> You are logged in :D !!! </p>
            <p> This is a private section :/. To access it, please login.</p>
        </div>
        
    </main>
    <footer></footer>
</body>
</html>