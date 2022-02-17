<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio4</title>
</head>
<body>
    <?php 
        for ($m=0; $m <= 8; $m++) { 
            $multi=$m * 20;
            $result=320 - $multi;
            echo "<p>$result</p>";
        }
    ?>
</body>
</html>