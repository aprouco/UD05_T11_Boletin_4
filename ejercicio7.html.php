<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio7</title>
</head>
<body>
    <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">
    <label for="combinacion">Combinación</label>
    <input type="number" name="combinacion"><br>
    <input type="submit" name="Enviar">
    <?php 
        $combinacion = "1111";

        if (isset($_POST['combinacion']) && filter_var($_POST('combinacion'), FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/[0-9]{4}/")))) {
            
        }
    ?>
    </form>

</body>
</html>