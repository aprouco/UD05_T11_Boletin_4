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
    
        <p>Introduce un número: <input type="number" name="num"></p>
        <input type="submit" value="Enviar">
    
    </form>

</body>
</html>