<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";


echo "Bem vindo ao screenMatch\n";

$filme = new filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,

);


$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);



var_dump($filme);

echo $filme->media() . "\n";
echo $filme->anoLancamento . "\n";
echo $filme->nome . "\n";

