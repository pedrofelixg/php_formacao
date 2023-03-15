<?php

$anoNascimento = "1997";
$idade = 2023 - $anoNascimento;

echo $idade . PHP_EOL;
var_dump($idade); // retorna inteiro(26)

/* o php possui o conceito de strings numéricas
se caso a string só possuir caracteres numericos, ele fez uma conversão implícita e opera matematicamente.
*/

if($anoNascimento == 1997) {
    echo "SIM" . PHP_EOL;
} else {
    echo "NÃO" . PHP_EOL;
}

// retorno = true;

if($anoNascimento === 1997) {
    echo "SIM" . PHP_EOL;
} else {
    echo "NÃO" . PHP_EOL;
}

// retorno = false (A IDE PHPStorm já avisa sobre o erro antes da execução da função.)