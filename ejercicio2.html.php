<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <?php 
        $m=0;
        while ($m <= 20) {
            $mult= $m * 5;
            echo "<p>5 * $m = $mult</p>";
            $m = $m + 1;
        }
    ?>
</body>
</html>