<?php
namespace ScreenMatch\Modelo;
trait ComAvaliacao{

    private array $notas = [];
    /**
     * @throws \InvalidArgumentException se a nota for negativa ou maior que 10;
     */

    public function avalia(float $nota): void{
        
        if($nota < 0 || $nota > 10){
            throw new \InvalidArgumentException('Nota precisa ser entre 0 e 10');
        }
        
        $this->notas[] = $nota;
}

public function media(): float{
     $somaNotas = array_sum($this->notas);
     $quantidades = count($this->notas);

     return $somaNotas / $quantidades;
}

}