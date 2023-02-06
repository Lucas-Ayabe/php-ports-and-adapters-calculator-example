<?php

namespace App\Core\UseCases;

readonly class ConcatRequest
{
    public function __construct(
        public float|int $x,
        public float|int $y
    ) {
    }
}
