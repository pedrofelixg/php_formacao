<?php
$floats = [
    [6.5, 4.3, 6.2],
    [5.1, 4.2, 8.1],
    [8.0, 9.0, 10.0]
];
// busca por tentar usar esse conjunto de arrays para a função requerida
function calcMedia ($float1, $float2, $float3) {
    $peso1 = 2;
    $peso2 = 3;
    $peso3 = 5;

    $pesos = $peso1 + $peso2 + $peso3;

    echo round(((($float1 * $peso1) + ($float2 * $peso2) + ($float3 * $peso3)) / $pesos), 1);
}

calcMedia(5.1, 4.2, 8.1);
