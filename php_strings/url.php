<?php

$url = 'https://alura.com.br';

if(str_starts_with($url, 'https')) {
    echo 'É uma URL segura';
} else {
    echo 'Não é uma URL segura';
}

echo PHP_EOL;

if(str_ends_with($url, 'br')) {
    echo 'é um domínio brasileiro';
} else {
    echo 'Não é um domínio brasileiro';
}

echo PHP_EOL;
