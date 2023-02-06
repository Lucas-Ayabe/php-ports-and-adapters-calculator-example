<?php
require_once __DIR__ . "/../vendor/autoload.php";

use App\Core\UseCases\Divide;
use App\Core\UseCases\Subtract;
use App\Core\UseCases\Sum;
use App\Core\UseCases\Multiply;

use App\Adapters\Console\Commands\CalculatorCommand;

use App\Adapters\Web\Controllers\CalculatorController;
use App\Adapters\Web\Models\Calculator;
use App\Adapters\Web\Views\View;

$sum = new Sum();
$subtract = new Subtract();
$multiply = new Multiply();
$divide = new Divide();

$consoleApp = new CalculatorCommand(
    sum: $sum,
    subtract: $subtract,
    multiply: $multiply,
    divide: $divide
);

$webApp = new CalculatorController(
    view: new View("./Adapters/Web/Views/pages/"),
    model: new Calculator(
        sum: $sum,
        subtract: $subtract,
        multiply: $multiply,
        divide: $divide
    )
);

$app = $webApp;

$app->calculator();
