<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio5</title>
</head>
<body>
    <?php 
        $m = 0;
        while ($m <= 8) {
            $mult=$m * 20;
            $result = 320 - $mult;
            echo "<p>$result</p>";
            $m = $m + 1;
        }
    ?>
</body>
</html>