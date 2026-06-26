<?php

namespace App\View\Components\Alerts;

class Danger extends Alert
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $class = 'danger',
        public ?string $header = 'Danger!',
        public ?string $message = 'Danger message!',
    )
    {
        parent::__construct($this->class, $this->header, $this->message);
    }
}
