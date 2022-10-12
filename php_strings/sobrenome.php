<?php
$nome = 'Pedro Vinicius';

list($firstName, $sobrenome) = explode(" ", $nome);


echo "Nome: $firstName e Sobrenome: $sobrenome" . PHP_EOL;