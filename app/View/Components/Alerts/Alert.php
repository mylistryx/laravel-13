<?php

namespace App\View\Components\Alerts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public function __construct(
        public ?string $class = null,
        public ?string $header = null,
        public ?string $message = null,
    )
    {
    }

    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
