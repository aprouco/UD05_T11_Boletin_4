<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3</title>
</head>
<body>
    <?php 
        $m=0;
        do {
            $mult= 5 * $m;
            echo "<p>5 * $m = $mult</p>";
            $m = $m + 1;
        } while ($m <= 20);
    ?>
</body>
</html>