<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio17</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

        <p>Introduce un número:<input type="text" name="num"></p>

        <?php 
        
            $num=isset($_POST['num']) && filter_var($_POST['num'],FILTER_VALIDATE_INT);

            if ((isset($_POST['num']) && filter_var($_POST['num'],FILTER_VALIDATE_INT)) > 0) {
                
            }else {
                echo "Introduce un número positivo.";
            }
        
        ?>

    </form>
</body>
</html>