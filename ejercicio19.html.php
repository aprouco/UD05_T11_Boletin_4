<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio19</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

        <p>Introduce el valor de la altura: <input type="text" name="altura"></p>
        <label for="figuras">Selecciona las figuras con las que se creará la pirámide: </label>
        <select name="select">
            <option value="ladrillo">Ladrillo</option>
            <option value="bolas">Bolas</option>
            <option value="triangulo">Triángulo</option>
            <option value="asteriscos" selected>Asteriscos</option>
        </select>   

        <?php
            for ($i=1; $i <=9 ; $i++) { 
                for ($y=1; $y <= $i ; $y++) { 
                    echo "*";
                }
                echo "<br/>";
            }
        ?>

    </form>

</body>
</html>