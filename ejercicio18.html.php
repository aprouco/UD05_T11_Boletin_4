<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio18</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    
        <p>Introduce un número: <input type="text" name="num1"></p>
        <p>Introduce un número: <input type="text" name="num2"></p>
        <input type="submit" value="Enviar">
    
        <p>
            <?php 
                error_reporting(E_ERROR);
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];

                if ((isset($_POST['num1']) && filter_var($_POST['num1'],FILTER_VALIDATE_INT) && $num1 > 0) && (isset($_POST['num2']) && filter_var($_POST['num2'],FILTER_VALIDATE_INT) && $num2 > 0)) {
                    $min=min($num1,$num2);
                    $max=max($num1,$num2);
                    for ($i=$min; $i <=$max ; $i+=7) { 
                        ?><br>
                            <?php 
                                echo $i;
                            ?>
                        <?php
                    }

                }

            ?>
        </p>

    </form>
</body>
</html>