<?php

namespace App\Adapters\Web\Controllers;

use App\Adapters\Web\Views\View;
use App\Core\UseCases\ConcatRequest;
use App\Core\UseCases\Divide;
use App\Core\UseCases\DivideRequest;
use App\Core\UseCases\Subtract;
use App\Core\UseCases\Sum;
use App\Core\UseCases\Multiply;

class CalculatorController
{
    public function __construct(
        private View $view,
        private Sum $sum,
        private Subtract $subtract,
        private Multiply $multiply,
        private Divide $divide,
    ) {
    }

    public function calculator(): void
    {
        $data = [];

        $first_value = filter_input(INPUT_POST, 'first_value');
        $second_value = filter_input(INPUT_POST, 'second_value');
        $operation = filter_input(INPUT_POST, 'operation');

        if ($first_value && $second_value) {
            $data['result'] = match ($operation) {
                '+' => $this->sum->execute(new ConcatRequest($first_value, $second_value)),
                '*' => $this->multiply->execute(new ConcatRequest($first_value, $second_value)),
                '-' => $this->subtract->execute(new ConcatRequest($first_value, $second_value)),
                '/' => $this->divide->execute(new DivideRequest($first_value, $second_value)),
            };
        }

        $this->view->render("calculator.php", $data);
    }
}
