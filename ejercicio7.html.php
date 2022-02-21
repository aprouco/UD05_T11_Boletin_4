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
    <input type="hidden" name="intentos" value="1">
    <label for="combinacion">Combinación</label>
    <input type="number" name="combinacion"><br>
    <input type="submit" name="Enviar">
    <?php 
        $combinacionSecreta = "1111";

        if (isset($_POST['intentos']) && $_POST['intentos'] > 4) {
            
            if (isset($_POST['combinacion']) && filter_var($_POST['combinacion'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/[0-9]{4}/")))) {
                if ($_POST['combinacion']==$combinacionSecreta) {
                    echo "<p>La caja fuerte se ha abierto satisfactoriamente</p>";
                }else{
                    echo "<p>Lo siento, esta no es la combinación</p>";
                }
            }else{
                echo "<p>Introduce un número de catro díxitos.</p>";
            }
        }else{
            echo "<p>Ha superado el númeor de intentos</p>";
        }

    ?>
    </form>

</body>
</html>