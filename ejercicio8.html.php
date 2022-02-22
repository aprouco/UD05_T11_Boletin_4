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
        $num=$_POST['num'];
        for ($i=1; $i < 11 ; $i++) { 
            $mult = $i * $num;
            ?> 
                <table border="1">
                        <tr>
                            <td>
                                <?php
                                    echo $num. "*" .$i; 
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $mult;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    echo $num. "*" .$i; 
                                ?>
                            </td>
                            <td>noooooooo</td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    echo $num. "*" .$i; 
                                ?>
                            </td>
                            <td>noooooooo</td>
                        </tr>
                </table>
                    <?php ?>
        }
</body>
</html>