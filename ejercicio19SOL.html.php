<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio19</title>
</head>
<body>

    <?php

        $altura=$_POST['altura'];
        $icono=$_POST['icono'];

        $errores = validarFormulario($altura, $icono);

        if (count($errores) > 0) {
            pintarFormulario();
            for ($i=0; $i < count($errores); $i++) { 
                echo "<p>* $errores[$i]</p>";
            }
        }else{
            pintarPiramide($altura, $icono);
        }


        ######Declaración de funciones######
        function validarFormulario($a,$i){
            $errores=array();
            if ($a == '') {
                array_push($errores, "Tes que indicar a altura");
            }

            if (filter_var($a, FILTER_VALIDATE_INT) && $a < 0) {
                array_push($errores, "A altura ten que ser un valor positivo");
            }

            if ($i == '') {
                array_push($errores, "Tes que escoller unha imaxe.");
            }
            
            return $errores;
        }

        function pintarFormulario(){
            
            ?>
           
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <label for="altura">Altura da pirámide: </label>
                    <input type="number" name="altura">
                    <select name="select">
                        <option value="instagram.jfif">Instagram</option>
                        <option value="skype.jfif">Skype</option>
                        <option value="nintendo.jfif">Nintendo</option>
                        <option value="google.jfif">Google</option>
                        <option value="@.jfif">@</option>
                    </select>
                    <input type="submit" value="Enviar">
                </form>
                    
            <?php
        }

        function pintarPiramide($a, $i){
            $linea="";
            for ($indice=0; $indice < $a; $indice++) { 
                $indice=$indice."<img src='img/$i' height='24px'>";
                echo $indice."<br>";
            }
        }
    
    ?>


</body>
</html>