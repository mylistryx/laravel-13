<?php

namespace App\View\Components\Alerts;

class Secondary extends Alert
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $class = 'secondary',
        public ?string $header = 'Secondary!',
        public ?string $message = 'Secondary message!',
    )
    {
        parent::__construct($this->class, $this->header, $this->message);
    }
}
