<?php

namespace App\Adapters\Web\Models;

use App\Core\UseCases\ConcatRequest;
use App\Core\UseCases\Divide;
use App\Core\UseCases\DivideRequest;
use App\Core\UseCases\Subtract;
use App\Core\UseCases\Sum;
use App\Core\UseCases\Multiply;

class Calculator
{
    public function __construct(
        private Sum $sum,
        private Subtract $subtract,
        private Multiply $multiply,
        private Divide $divide,
    ) {
    }

    public function sum(float|int $x, float|int $y): float|int
    {
        return $this->sum->execute(new ConcatRequest($x, $y));
    }

    public function subtract(float|int $x, float|int $y): float|int
    {
        return $this->subtract->execute(new ConcatRequest($x, $y));
    }

    public function multiply(float|int $x, float|int $y): float|int
    {
        return $this->multiply->execute(new ConcatRequest($x, $y));
    }

    public function divide(float|int $x, float|int $y): float|int
    {
        return $this->divide->execute(new DivideRequest($x, $y));
    }
}
