<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio11</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <p>Introduce un número: <input type="number" name="num"></p>
    <input type="submit" value="Enviar">

    <?php
        $num=isset($_POST['num']);
        if ($num >= 0 && is_int($num)) {
            for ($i=$num; $i < ($num + 6) ; $i++) { 
            echo "<p>
                        <tr>
                            <td>
                                ".pow($i,2)."
                            </td>
                            <td>
                                ".pow($i,3)."
                            </td>
                        </tr>
                  </p>";
            }
        }
    ?>
    </form>
</body>
</html>