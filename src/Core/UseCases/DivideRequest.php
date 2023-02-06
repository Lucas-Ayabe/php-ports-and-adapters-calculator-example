<?php

namespace App\Core\UseCases;

use InvalidArgumentException;

readonly class DivideRequest
{
    public function __construct(
        public float|int $numerator,
        public float|int $denominator
    ) {
        if ($numerator === 0) {
            throw new InvalidArgumentException("Numerator cannot be 0");
        }
    }
}
