<?php

namespace App\Core\UseCases;

use App\Core\UseCases\DivideRequest;

class Divide
{
    public function execute(DivideRequest $request): float|int
    {
        return $request->numerator / $request->denominator;
    }
}
