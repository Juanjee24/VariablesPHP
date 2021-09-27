<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        //Ejercicio 1


        echo "Hola Mundo"."<br>";
        


        //Ejercicio 2

        $var1="Hola mundo";

        echo $var1."<br>";
        

        //Ejercicio 3

        $varINT=10;
        $varFloat=10.5;
        $varString="Hola Mundo";
        var_dump($varINT);
        echo "<br>";
        var_dump($varFloat);
        echo "<br>";
        var_dump($varString);
        echo "<br>";

        //Ejercicio 4

        $varBoolean=true;
        $varNULL=null;
        var_dump($varBoolean);
        echo "<br>";
        var_dump($varNULL);
        echo "<br>";

        //Ejercicio 5

        $varINT1=20;
        $varINT2=10;
        $varPot= pow($varINT1,$varINT2);
        echo ($varINT1 + $varINT2)."<br>";
        echo ($varINT1 - $varINT2)."<br>";
        echo ($varINT1 * $varINT2)."<br>";
        echo ($varINT1 / $varINT2)."<br>";
        echo ($varINT1 % $varINT2)."<br>";
        echo ($varPot)."<br>";

        //Ejercicio 6

        $varString1="Buenas tardes ";
        $varString2="Son las 3 de la mañana crack";
        echo $varString1.$varString2."<br>";

        //Ejercicio 7

        $varString3="1";
        var_dump($varString3);
        echo "<br>";
        $varResultado=$varString3 * 2;
        echo $varResultado.var_dump($varResultado)."<br>"; //hace la conversion
        $varResultado2=$varString3 * 1.3;
        echo $varResultado2.var_dump($varResultado2)."<br>"; //hace la conversion
        $varResultado3=$varString3 * "10 manzanas";
        echo $varResultado3.var_dump($varResultado3)."<br>"; //da error

        //Ejercicio 8

        $varBoolean1=true;
        $varBoolean2=false;
        $varINT5=10;
        $varINT6=20;
        if ($varBoolean1 && $varBoolean2){
            echo ($varINT5 + $varINT6)."<br>";
        }
        else{
            echo "Error crack"."<br>";
        }

        if ($varBoolean1 || $varBoolean2){
            echo ($varINT5 + $varINT6)."<br>";
        }
        else{
            echo "Error crack"."<br>";
        }

        echo ($varBoolean1 && $varBoolean2)."<br>"; //si las dos booleanas son true, devuelve 1, si una es false, no devuelve nada
        echo ($varBoolean1 || $varBoolean2)."<br>"; //si una variable es true, devuelve 1, si las dos son false, no devuelve nada
        



















    
    ?>
    
</body>
</html>