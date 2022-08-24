<?php
$nome = "Matheus Lúcio";
$familia = str_contains($nome, "Gonçalves");

if ($familia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}

$teste = "Teste de String";
$verificador = "de";

$resultado = str_contains($teste, $verificador);
var_dump($resultado);