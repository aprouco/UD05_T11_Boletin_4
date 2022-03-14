<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio21</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <label for="num">Introduce un número: </label>
        <input type="text" name="num">
        <input type="submit" value="Enviar">
    </form>
    
    <?php
    #################################-------------------NO VA-------------------#################################
        error_reporting(E_ERROR);
        if(!isset($_SESSION['num'])){
            $_SESSION['num']=array();
            $_SESSION['par']=array();            
            $impar=($_SESSION['impar']=array());
        }

        if (isset($_POST['num']) && filter_var($_POST['num'],FILTER_VALIDATE_INT) && $num >= 0) {
            $n=$_POST['num'];
            if ($n % 2 != 0) {
                array_push($_SESSION['impar'],$n);
            }else{
                array_push($_SESSION['par'],$n);
            }
        }
        
        if (isset($_POST['num']) && filter_var($_POST['num'],FILTER_VALIDATE_INT) && $num < 0){
            $suma=0;
            for ($i=0; $i < count($_SESSION['impares']); $i++) { 
                $suma= $suma + $_SESSION['impares'][$i];
            }
            
            $media = $suma / count($_SESSION['impar']);
            
            echo "<p>Numeros introducidos: ".count($_SESSION['num'])."</p>";
            echo "<p>Media: ".$media."</p>";

            echo "<p>".max($_SESSION['pares'])."</p>";
            
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