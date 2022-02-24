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
        error_reporting(E_ERROR);
        $num=$_POST['num'];
        if (isset($_POST['num']) && filter_var($num,FILTER_VALIDATE_INT) && $num >= 0) {
    ?>
            <table>
                <?php
                    for ($i=$num; $i < ($num + 6) ; $i++) { 
                        echo "<tr>
                                    <td>
                                        ".pow($i,2)."
                                    </td>
                                    <td>
                                        ".pow($i,3)."
                                    </td>
                                </tr>";
                    }
        }
                ?>
            </table>
    </form>
</body>
</html>