<?php

namespace App\Adapters\Web\Controllers;

use App\Adapters\Web\Models\Calculator;
use App\Adapters\Web\Views\View;

class CalculatorController
{
    public function __construct(
        private View $view,
        private Calculator $model
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
                '+' => $this->model->sum($first_value, $second_value),
                '-' => $this->model->subtract($first_value, $second_value),
                '*' => $this->model->multiply($first_value, $second_value),
                '/' => $this->model->divide($first_value, $second_value)
            };
        }

        $this->view->render("calculator.php", $data);
    }
}
