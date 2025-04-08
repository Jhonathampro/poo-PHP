<?php
namespace ScreenMatch\Calculos;
use  ScreenMatch\modelo\Avaliavel;
use Throwable;

class NotaEstrela  {
    public function converte(Avaliavel $avaliavel): float{

        try{ 
        $nota = $avaliavel->media();

        // realize a conversão 
        return round($nota) / 2;
        } catch(Throwable) {
            return 0;
        }
        // tratamento de erro que pode acontecer, o throwable é um tarmento generico 
        // ou seja qualquer erro ele capitura, porém eu posso pegar tipos expecificos 
        // de erro, como divisão por zero.
    }
}