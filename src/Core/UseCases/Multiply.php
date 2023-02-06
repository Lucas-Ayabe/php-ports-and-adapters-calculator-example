<?php

namespace App\Core\UseCases;

use App\Core\UseCases\ConcatRequest;

class Multiply
{
    public function execute(ConcatRequest $request): float|int
    {
        return $request->x * $request->y;
    }
}
