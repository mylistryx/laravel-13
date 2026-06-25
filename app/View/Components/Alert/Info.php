<?php

namespace App\View\Components\Alert;

class Info extends Alert
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $class = 'info',
        public ?string $header = 'Info!',
        public ?string $message = 'Info message!',
    )
    {
        parent::__construct($this->class, $this->header, $this->message);
    }
}
