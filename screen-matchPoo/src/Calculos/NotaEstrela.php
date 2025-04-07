<?php

class NotaEstrela  {
    public function converte(Avaliavel $avaliavel): float{

        $nota = $avaliavel->media();

        // realize a conversão 

        return round($nota) / 2;
    }
}