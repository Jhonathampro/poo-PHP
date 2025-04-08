<?php
namespace ScreenMatch\Modelo;

interface Avaliavel{

    public function avalia(Float $nota):void;
    public function media():float;

}