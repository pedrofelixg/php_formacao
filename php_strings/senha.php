<?php
$senha = 'bloco';
$senha2 = 'SargitariusT40@';

if(strlen($senha) < 8) {
    echo "Essa senha é fraca" . PHP_EOL;
} else {
    echo "Essa senha é possível" . PHP_EOL;
}

//strlen($senha2);
    /* A função retorna o número de bites que uma string contém. */