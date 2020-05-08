<?php

namespace Tests;

class Calculadora {
    public function multiplicar($a, $b) {
        return $a * $b;
    }
    public function multiplicar2($a, $b) {
        $r = 0;
        while ($b > 0) {
            $r = $r + $a;
            $b = $b - 1;
        }
        return $r;
    }
}