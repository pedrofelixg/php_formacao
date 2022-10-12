<?php
$nome = 'Pedro Vinicius';

list($firstName, $sobrenome) = explode(" ", $nome);


echo "Nome: $firstName e Sobrenome: $sobrenome" . PHP_EOL;

$aparador = ",!Luiz Souza,.";

echo trim($aparador, ',.!') . PHP_EOL;
/*as funções trim(ambos os lados), ltrim(esquerda), e rtrim(direita) aparam uma string somente pelas
pontas, se algum caractere, estiver no meio não. */