<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio9</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

        <p>Introduce un número: <input type="text" name="num"></p>
        <input type="submit" value="Enviar">

    </form>
    <?php 
        error_reporting(E_ERROR);
        $num = $_POST['num'];
        if(isset($_POST['num'])){
            $longnumero = strlen($num);
            echo "<p>La cantidad de dígitos del número son = <b>".$longnumero."</b></p>";
        }else{
            echo "<p>Introduce un número</p>";
        }
    ?>
</body>
</html>