<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio17</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

        <p>Introduce un número:<input type="text" name="num"></p><br>
        <input type="submit" value="Enviar">
        <p>
        <?php 
            error_reporting(E_ERROR);
            $num=$_POST['num'];

            if (isset($_POST['num']) && filter_var($_POST['num'],FILTER_VALIDATE_INT) && $num > 0) {
                $suma = 0;
                for ($i=$num + 1; $i < ($num + 100); $i++) { 
                    $suma = $suma + $i;
                }
                    ?>
                        <b>
                            <?php echo $suma; ?>
                        </b>
                    <?php
            }else {
                echo "Introduce un número positivo.";
            }
        ?>
        </p>
    </form>
</body>
</html>