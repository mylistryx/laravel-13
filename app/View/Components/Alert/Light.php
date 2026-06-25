<?php

namespace App\View\Components\Alert;

class Light extends Alert
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $class = 'light',
        public ?string $header = 'Light!',
        public ?string $message = 'Light message!',
    )
    {
        parent::__construct($this->class, $this->header, $this->message);
    }
}
