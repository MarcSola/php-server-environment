<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel.php</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/styles.css">
</head>
<body>
    <main>
        <div class="main-panel-wrapper">
            <?php 

                if(isset($_GET["login"]) && $_GET["login"] == "success"){
                    
                    echo "<div class='login-message'><h3> You are logged in :D !!! </h3></div>";
                }else{
                    
                    echo "
                        <div class='signin-message'><h3> This is a private section :/.  To access it, please sign in.</h3></div>
                        <a href='./index.php'><button class='submit-btn'> Sign in</button></a>
                    ";
                }

                if(isset($_SESSION['username']) && isset($_SESSION['pwd'])){
                        
                    echo "
                    <div>
                        <form action='./includes/close_session.php' method='POST'>
                            <button class='submit-btn' type='submit' name='logout-submit'>Logout</button>
                        </form>
                    </div>";
                }

            ?>
        </div>
    </main>
    <footer></footer>
</body>
</html>