<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio10</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    
        <label for="numero">Introduce un número: </label>
        <p><input type="number" name="numero"></p>
        <input type="submit" value="Enviar">
    </form>
    <?php 
        if(!isset($_SESSION['numeros'])){
            $_SESSION['numeros'] = array();
        }
        if (isset($_POST['numero']) && filter_var($_POST['numero'],FILTER_VALIDATE_INT) && $_POST['numero'] >= 0) {
            $n = $_POST['numero'];
            array_push($_SESSION['numeros'],$n);
        }elseif (isset($_POST['numero']) && filter_var($_POST['numero'],FILTER_VALIDATE_INT) && $_POST['numero'] < 0) {
            $suma=0;
            $divisor=count($_SESSION['numeros']);
            for ($i=0; $i < $divisor; $i++) { 
                $suma = $suma + $_SESSION['numeros'][$i];
            }
            $media = $suma / $divisor;
            echo "La media es = <b>".$media."</b>";

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

        }else {
            echo "<p>Introduce un número.</p>";
        }
    ?>
</body>
</html>