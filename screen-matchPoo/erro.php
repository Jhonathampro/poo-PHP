<?php

use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Calculos\NotaEstrela;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;

require 'autoload.php';

$serie = new Serie('Nome da serie', 2025, Genero::Acao, 7, 20, 30);
$episodio = new Episodio($serie, 'piloto', 1);
try{ 
$episodio->avalia(-50);

$conversor = new NotaEstrela();
echo $conversor->converte($episodio);

}catch(Exception $e){
    echo "Um problema aconteceu: " . $e->getMessage();
}
