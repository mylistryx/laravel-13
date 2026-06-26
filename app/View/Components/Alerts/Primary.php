<?php

namespace App\View\Components\Alerts;

class Primary extends Alert
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $class = 'primary',
        public ?string $header = 'Primary!',
        public ?string $message = 'Primary message!',
    )
    {
        parent::__construct($this->class, $this->header, $this->message);
    }
}
