<?php
$email = 'ana_julia_moura@alura.com.br';
$posicaoArroba = strpos($email, "@"); //retorna um inteiro do parâmetro indicado na str avaliada.

echo $posicaoArroba . PHP_EOL;

echo substr($email, 0, $posicaoArroba) . PHP_EOL;
echo substr($email, $posicaoArroba +1) . PHP_EOL;
// como no exemplo acima, a emição do último parâmetro não quebra a função.