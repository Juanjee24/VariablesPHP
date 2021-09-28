<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EJERCICIOS DE ARRAYS</h1>
    <pre>
    <?php 
        $array1 = array(10, 20, 30, 40, 50, 60, 70, 80, 90);
        $salida = array_slice($array1, 2);
        print_r($salida);
        echo "<br>";

        print_r(array_slice($array1, 2, -2, true));

        $matriz =array(
            array(
                'id'=> "JK",
                'nombre' => "Paco"

            ),
            array(
                'id'=> "BR",
                'nombre' => "Manolo"

            ),
            array(
                'id'=> "OP",
                'nombre' => "Pepe"

            ),


        );
        echo "<br>";
        print_r(array_slice($matriz, 1, -1));

        
    
    
    
    ?>

    </pre>
    
</body>
</html>