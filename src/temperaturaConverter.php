<?php

namespace Rafaelvl2023\Convertetemperatura;

class Convertetemperatur {
    public function convert ($temperatura, $unit){
        if($unit === 'C'){
            $fahrenheit = ($temperatura *9 / 5) + 32;
            return $fahrenheit;
        } elseif ($unit === 'F'){
            $celsius = ($temperatura - 32) * 5 / 9;
            return $celsius;
        } else {
            throw new \InvalidArgumentException('Unidade Invalida');
        }
    }
}
