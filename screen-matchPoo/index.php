<?php

require 'autoload.php';

use ScreenMatch\modelo\{Filme, Episodio, Serie, Genero

};

use ScreenMatch\Calculos\{CalculadoraDeMaratona, NotaEstrela

};
echo "Bem vindo ao screenMatch\n";

$filme = new filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    180,

);


$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);



var_dump($filme);

echo $filme->media() . "\n";
echo $filme->anoLancamento . "\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);
$episodio = new Episodio($serie, 'Episodio piloto', 1);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);

echo $serie->media() . "\n"; 

$calculadora = new CalculadoraDeMaratona;
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para poder assitir tudo, Você precia de $duracao em minutos\n";

$conversor = new NotaEstrela;
echo $conversor->converte($serie) . "\n";
echo $conversor->converte($filme);