<?php 
    
    $DB_email = "marcyoutheman@gmail.com";
    $DB_pwd = "123456";

    if(isset($_POST["login-submit"])){

        $username = $_POST["email"];
        $password = $_POST["pwd"];

        // Creating a hash token for the validation_pwd (in a real  
        // scenario it would be a DB pwd) for password validation later on
        $DB_hash_pwd = password_hash($DB_pwd, PASSWORD_DEFAULT);
        
        if(empty($username) || empty($password)){
            
            header("Location: ../index.php?error=emptyfields");
            exit();

        }else{

            if($username != $DB_email){

                header("Location: ../index.php?error=invaliduser");
                exit();

            }else{
                // password validation step
                if(!password_verify($password, $DB_hash_pwd)){

                    header("Location: ../index.php?error=invalidpwd");
                    exit();

                }elseif(password_verify($password, $DB_hash_pwd)){
                    // Everything was valid and so session needs to be started
                    session_start();
                    $_SESSION["username"] = $username;
                    $_SESSION["pwd"] = $DB_hash_pwd;

                    header("Location: ../panel.php?login=success");
                    exit();

                }else{

                    header("Location: ../index.php?error=wrongpwd");
                    exit();

                }
            }

            
        }
    }

?>