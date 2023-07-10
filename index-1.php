<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    /* echo nos sirve para debugear e imprimir datos */
    echo ("INTRODUCCIÒN A PHP");

    echo ("<br>");
    /* DECLARACIONE DE VARIABLES */

    $nombre = "Juan";
    $edad = 20;
    $direc = "Otzolotepect";
    echo ("<br>");
    /* imprimir variable */
    echo $nombre;
    echo ("<br>");

    /* Concatenar en php con un punto  */
    echo ("EL  " . " " . $nombre . " " . "Tiene " . " " . $edad . " " . "Años" . "vive en " . $direc);
    echo ("<br>");
    /* OPERACIONES */
    echo ("<p>SUMA</p>");
    $n1 = 10;
    $n2 = 2;
    $total = $n1 + $n2;
    /* SUMA */
    echo ("EL RESULTADO DE LA SUMA ES " . " " . $total);
    /* RESTA */
    echo ("<br>");
    echo ("<p>RESTA</p>");
    $total = $n1 - $n2;
    /* SUMA */
    echo ("EL RESULTADO DE LA RESTA ES " . " " . $total);
    /* MULTIPLICACIÓN */
    echo ("<br>");
    echo ("<p>MULTIPLICACIÓN</p>");
    $total = $n1 * $n2;
    /* SUMA */
    echo ("EL RESULTADO DE LA MULTIPLICACIÓN ES " . " " . $total);
    echo ("<br>");
    /* DIVISIÓN */
    echo ("<p>DIVISIÓN</p>");
    $total = $n1 / $n2;
    echo ("EL RESULTADO DE LA DIVISIÓN ES " . " " . $total);
    echo ("<br>");


    /* AREA Y PERIMETRO DEL CIRCULO */
    echo ("<p>AREA Y PERIMETRO DEL CIRCULO</p>");
    /*VARIABLES ASIGNADAS POR MI  */
    $pi = 3.1416;
    $radio = 5;
    $area = $pi * ($radio * $radio);
    $perimetro = 2 * $pi * $radio;
    echo ("Calcularemos area y perimetro del circulo por lo cual: \n El area es de: " . $area . "<br> Y el perimetro es de: " . $perimetro);


    /* AREA Y PERIMETRO DEL CIRCULO */
    echo ("<p>AREA Y PERIMETRO DEL TRIANGULO</p>");
    /*Declarar variables para operaciones de triangulo */
    $v1=16;
    $v2= 3;
    $v3=12;
    $A = ($v1*$v2)/2;
    $P = $v1+$v2+$v3;
    echo("El area de un triangulo es de: ".$A. "<br> El perimetro d eun triangulo es de: ". $P)
  
   
    
    ?>
</body>

</html>