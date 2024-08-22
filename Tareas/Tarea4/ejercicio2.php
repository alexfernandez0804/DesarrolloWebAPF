<?php
$arreglo = [2, 3, 45, 32, 2, 1, 63, 21, 52, 242, 22, 1];
$longitud = count($arreglo);

for ($i = 0; $i < $longitud; $i++) {
    for ($j = 0; $j < $longitud - 1; $j++) {
        if ($arreglo[$j] > $arreglo[$j + 1]) {
            $temp = $arreglo[$j];
            $arreglo[$j] = $arreglo[$j + 1];
            $arreglo[$j + 1] = $temp;
        }
    }
}

echo "Arreglo Ordenado: ";
for ($k = 0; $k < $longitud; $k++) {
    echo $arreglo[$k] . " ";
}
?>
