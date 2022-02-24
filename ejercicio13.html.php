<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio13</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>">
    <p>Introduce un número: <input type="number" name="num"></p>
    </form>
    <?php 
        if(!isset($_SESSION['pos']) && !isset($_SESSION['neg'])){
            $_SESSION['pos']=0;
            $_SESSION['neg']=0;            
        }

        if($_POST['num'] < 0){
            $_SESSION['neg']=$_SESSION['neg']+1;
        }else if ($_POST['num'] >= 0) {
            $_SESSION['pos']=$_SESSION['pos']+1;
        }
        echo "<p>Los números positivos son = <b>".$_SESSION['pos']."</b></p>";
        echo "<p>Los números negativos son = <b>".$_SESSION['neg']."</b></p>";
    ?>
</body>
</html>