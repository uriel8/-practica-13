<?php
    if($_POST["valor1"] != "" and $_POST["valor2"]!="")
    {
        if($_POST["operador"] == "suma")
        {
            echo 'El resultado de la suma es: <br>';
            echo $resultado = $_POST["valor1"] + $_POST["valor2"];
            echo '<br/><a href="index.php"> Volver</a>';
        }
        
        else if($_POST["operador"] == "resta")
        {
            echo 'El resultado de la resta es: <br>';
            echo $resultado = $_POST["valor1"] - $_POST["valor2"];
            echo '<br/><a href="index.php"> Volver</a>';
        }
        
        else if($_POST["operador"] == "multiplicacion")
        {
            echo 'El resultado de la multiplicacion es: <br>';
            echo $resultado = $_POST["valor1"] * $_POST["valor2"];
            echo '<br/><a href="index.php"> Volver</a>';
        }
        
        else if($_POST["operador"] == "divicion")
        {
            echo 'El resultado de la divicion es: <br>';
            echo $resultado = $_POST["valor1"] / $_POST["valor2"];
            echo '<br/><a href="index.php"> Volver</a>';
        }
    }else
    {
        echo 'Ingresa alg&uacute;n valor';
        echo '<br/><a href="index.php">Volver</a>';
    }
?>