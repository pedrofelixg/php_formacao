<?php

$telefones = [
    '(81) 99287 - 4343',
    '(81) 98962 - 5289',
    '(81) 94451 - 1221'
];

foreach ($telefones as $telefone) {
    $telefoneValido = preg_match("/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/", $telefone) ;
    if($telefoneValido) {
        echo 'Telefone Válido' . PHP_EOL;
    } else {
        echo 'Telefone Inválido' . PHP_EOL;
    }
}

// usando regex em função
function verificaCPF(string $cpf){
    $cpfValido = preg_match('/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/', $cpf);
    if($cpfValido) {
        echo "o cpf $cpf é válido" . PHP_EOL;
    } else {
        echo "o cpf é inválido" . PHP_EOL;
    }
}

verificaCPF("123.456.789-10");