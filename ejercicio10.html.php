<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio10</title>
</head>
<body>
    <form action="action="<?php echo $_SERVER ['PHP_SELF'];?> method="POST">
    
        <label for="numero">Introduce un número: </label>
        <p><input type="number" name="numero"></p>
        <input type="submit" value="Enviar">
    </form>
    <?php 
        if (isset($_POST['numero']) && filter_var($_POST['numero'],FILTER_VALIDATE_INT)) {
            # code...
        }
    ?>
</body>
</html>