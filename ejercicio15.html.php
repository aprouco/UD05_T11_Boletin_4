<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio15</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <p>Introduce la base: <input type="text" name="base"></p>
        <p>Introduce el exponente: <input type="text" name="exp"></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
    <?php
        ###############--------NO VA--------###############
        error_reporting(E_ERROR);
        $base=$_POST['base'];
        $exp=$_POST['exp'];
        if (!filter_var($_POST['base'],FILTER_VALIDATE_INT) || !filter_var($_POST['exp'],FILTER_VALIDATE_INT)) {
            echo "Debes introducir ambos valores";
        }else{
            for ($i=1; $i <= $exp ; $i++) { 
                ?>
                <table border="1">
                    <tr>
                        <th><b>Potencias</b></th>
                        <th><b>Resultados</b></th>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            echo "<p>".$base."<sup>".$i."</sup></p>";
                            ?>
                        </td>
                        <td>
                            <?php
                            echo pow($base, $exp);
                            ?>
                        </td>
                    </tr>
                </table>

                
    <?php
            }
        }
    ?>
</body>
</html>