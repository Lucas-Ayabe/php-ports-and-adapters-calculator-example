<?php

namespace App\Adapters\Web\Views;

class View
{
    public function __construct(private string $viewDir)
    {
    }

    public function render(string $view, array $data = []): void
    {
        extract($data);
        include $this->viewDir . $view;
    }
}
