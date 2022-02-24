<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio8</title>
</head>
<body>
    <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="POST">
        <p>Introduce un número: <input type="text" name="num"></p>
        <input type="submit" name="Enviar">
    </form>
    <?php
        error_reporting(E_ERROR); 
        $num=$_POST["num"];
    ?>
    <p>
        <table border="1">
            <tr>
                <th><b>Multiplicación</b></th>
                <th><b>Resultado</b></th>
            </tr>
            <?php
                for ($i=1; $i < 11 ; $i++) { 
                $mult = $i * $num;
                echo "<tr>
                <td>".$num." * ".$i."</td>
                <td>".$mult."</td>
                </tr>";
            ?>
            <?php 
                }
            ?>
        </table>
    </p>
</body>
</html>