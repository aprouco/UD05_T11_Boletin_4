<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio13</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <p>Introduce un número: <input type="number" name="num" autofocus></p>
    <p><input type="submit" value="Enviar"></p>
    </form>
    <?php 
    error_reporting(E_ERROR);
        if(!isset($_SESSION['pos']) && !isset($_SESSION['neg'])){
            $_SESSION['pos']=0;
            $_SESSION['neg']=0;            
        }

        if($_SESSION['neg']+$_SESSION['pos'] < 10){
            if(filter_var(($_POST['num']),FILTER_VALIDATE_INT) < 0){
                $_SESSION['neg']=$_SESSION['neg']+1;
            }else {
                $_SESSION['pos']=$_SESSION['pos']+1;
            }
        }else{
            echo "<p>Los números positivos son = <b>".$_SESSION['pos']."</b></p>";
            echo "<p>Los números negativos son = <b>".$_SESSION['neg']."</b></p>";
            #Destruimos la sesión#
            $_SESSION = array();

            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
                );
            }
            // Finalmente, destruir la sesión.
            session_destroy();    
        }
        
    ?>
</body>
</html>