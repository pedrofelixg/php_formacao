<?php
$email = 'melissa@alura.com.br';
$posicaoArroba = strpos($email, "@"); //retorna um inteiro do parâmetro indicado na str avaliada.

echo $posicaoArroba . PHP_EOL;

$usuario = substr($email, 0, $posicaoArroba);

echo strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoArroba +1) . PHP_EOL;
// como no exemplo acima, a emição do último parâmetro não quebra a função.