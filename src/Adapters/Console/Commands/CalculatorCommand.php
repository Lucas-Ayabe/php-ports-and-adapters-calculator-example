<?php

namespace App\Adapters\Console\Commands;

use App\Core\UseCases\ConcatRequest;
use App\Core\UseCases\Divide;
use App\Core\UseCases\DivideRequest;
use App\Core\UseCases\Subtract;
use App\Core\UseCases\Sum;
use App\Core\UseCases\Multiply;

class CalculatorCommand
{
    public function __construct(
        private Sum $sum,
        private Subtract $subtract,
        private Multiply $multiply,
        private Divide $divide,
    ) {
    }

    public function calculator(): void
    {
        $x = readline("first value: ");
        echo PHP_EOL;
        $y = readline("second value: ");
        echo PHP_EOL;
        $operation = readline("operation (+, -, *, /): ");
        echo PHP_EOL;

        if ($x && $y) {
            echo "result: " . match ($operation) {
                '+' => $this->sum->execute(new ConcatRequest($x, $y)),
                '*' => $this->multiply->execute(new ConcatRequest($x, $y)),
                '-' => $this->subtract->execute(new ConcatRequest($x, $y)),
                '/' => $this->divide->execute(new DivideRequest($x, $y)),
            };
        }
    }
}
