<?php 
    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['pwd'])){

        header('Location: ./panel.php?login=success');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<body>
    <main>
    <div class="main-container">
        <form action="./includes/validate.php" method="POST">

            <h1>Sign in</h1>
            <div class ='input-wrapper'>
                <input id="email" type="text" name="email" autocomplete="off" placeholder="Username/E-mail">
                <!-- <label for="email">Email address</label> -->
            </div>
            <div class ='input-wrapper'>
                <input id="password" type="password" name="pwd" autocomplete="off" placeholder="Password">
                <!-- <label for="email">Password</label> -->
            </div>
            <button class="submit-btn" type="submit" name="login-submit">Login</button>
        </form>
        <?php 

            if(isset($_GET['error'])){

                if ($_GET['error'] == "emptyfields"){

                    echo "<div class='alert'> <h2>Fill all empty fields</h2></div>";

                }elseif($_GET['error'] == "invaliduser"){

                    echo "<div class='alert'> <h2>This user is invalid. <br>Input a valid user.</h2></div>";

                }elseif($_GET['error'] == "invalidpwd"){

                    echo "<div class='alert'> <h2> Password is not correct . <br>Input the correct password.</h2></div>";

                }
                
            } 

            ?>
        </div>
    </main>
</body>
</html>