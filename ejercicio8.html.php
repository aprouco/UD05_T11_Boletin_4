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
        $num=isset($_POST["num"]);
        for ($i=1; $i < 11 ; $i++) { 
            $mult = $i * $num;
    ?> 
        <p>
        <table border="1">
            <tr>
                <td>
                    <?php 
                        echo $i." * ".$num;
                    ?>
                </td>
                <td>
                    <?php 
                        echo $mult;
                    ?>
                </td>
            </tr>
        </table>
    </p>
    <?php 
        }
    ?>
</body>
</html>