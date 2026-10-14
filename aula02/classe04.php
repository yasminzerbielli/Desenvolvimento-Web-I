<?php

class Animal{
    const TIPO = 'Animal';

    public function emitirSom(): void{
        echo "Som qualquer";
    }

    // public static function identificar(): string{
    //     return self::TIPO;
    // }
}

class Cachorro extends Animal{
    const TIPO = 'Cachorro';

    public function emitirSom(): void{
        parent::emitirSom();
        echo " e latido";
    }
}

// echo Cachorro::identificar();
$c = new Cachorro();
$c->emitirSom();