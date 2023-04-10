<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Variables y Operadores </title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
     <h1>Variables y Operadores</h1>

     <?php

      echo "<h2> Hola Mundo </h2>"; 
       //Variables
      $texto= "PHP y Mysql Inicial";
      $unidades_curso= 8; 
      $arancel= 56266;
      $fecha= "10-11-2022";

      $texto_2= "PHP y Mysql Intermedio";
      $unidades_curso_2= 5; 
      $arancel_2= 86866;
      $fecha_2= "10-11-2023";


      $texto_3= "PHP y Mysql Avanzado";
      $unidades_curso_3= 15; 
      $arancel_3= 10600;
      $fecha_3= "19-12-2023";
  
     ?>


<section class= "contenido">
<h2> <?php echo $texto; ?> </h2>
<div>
<ul> 
    <li> Duracion: <?php echo $unidades_curso; ?> </li>
    <li> Arancel: <?php echo $arancel; ?> </li>
    <li> Fecha: <?php echo $fecha; ?> </li>

</ul>
</div>


<div>
<h2> <?php echo $texto_2; ?> </h2>
<ul> 
    <li> Duracion: <?php echo $unidades_curso_2; ?> </li>
    <li> Arancel: <?php echo $arancel_2; ?> </li>
    <li> Fecha: <?php echo $fecha_2; ?> </li>
 
<div>
<h2> <?php echo $texto_3; ?> </h2>
<ul> 
    <li> Duracion: <?php echo $unidades_curso_3; ?> </li>
    <li> Arancel: <?php echo $arancel_3; ?> </li>
    <li> Fecha: <?php echo $fecha_3; ?> </li>




</div>
</ul>
</section>



<?php
$duracion_total = $unidades_curso + $unidades_curso_2 + $unidades_curso_3;
$aranceles_totales = $arancel + $arancel_2 + $arancel_3;
$dolar = 250; 
$arancel_dolar= $aranceles_totales / $dolar; 
?>
<section class="totales"> 
    <h3> Totales </h3>
    <ul> 
        <li> Duracion Total: <?php echo $duracion_total ?> </li>
        <li> Aranceles Totales: <?php echo $aranceles_totales ?> </li>
        <li> Arancel Dolar: <?php echo round($arancel_dolar)  ?> </li> 


    </ul>

</section>

<?php

define('SALUDO', 'Hola mundo');
echo SALUDO; 
echo "<br>"; 


const CONSTANTE = "Constante con palabra reservada const" ;
echo CONSTANTE;


define('COLORES' , array('Azul' , 'Rojo' , 'Amarillo' )) ;
echo "<br>"; 
echo COLORES [0]; 


const COLORES2 = array ('Verde' , 'Morado' , ' Naranja' ); 
echo "<br>";
echo COLORES2 [1];
echo "<br>";

echo PHP_INT_MAX; 









?>

</body>
</html>