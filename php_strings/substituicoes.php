<?php

$texto = "Alexya olhou pra Bento e disse: Porra Caralho";

echo str_replace(
    ['Porra', 'Caralho'],
    ['***', '###'],
    $texto
    ) . PHP_EOL;


