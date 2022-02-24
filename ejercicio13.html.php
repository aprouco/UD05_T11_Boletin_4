<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio13</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>">
    <p>Introduce un número: <input type="number" name="num"></p>
    </form>
    <?php 
        $num = $_POST['num'];
        $tiponum = array('num1' => $num[0],
                         'num2' => $num[1],
                         'num3' => $num[2],
                         'num4' => $num[3],
                         'num5' => $num[4],
                         'num6' => $num[5],
                         'num7' => $num[6],
                         'num8' => $num[7],
                         'num9' => $num[8],
                         'num10' => $num[9]);
        for ($i=$tiponum[0]; $i <= $tiponum[9] ; $i++) { 
            
        }
    ?>
</body>
</html>