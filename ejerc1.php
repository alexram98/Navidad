<!-- 1. Crear un arreglo unidimensional de 5 valores enteros e imprimir el promedio y mostrarlos
ordenados descendentemente. -->
$array = array(,10, 20, 98, 50);


$sum = array_sum($array);
$count = count($array);
$average = $sum / $count;


rsort($array);


echo "Promedio:   " . $average . "\n";
echo "   Arreglo Ordenado Descendentemente: " . implode(", ", $array) . "\n"