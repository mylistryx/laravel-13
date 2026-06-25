<?php

namespace App\View\Components\Alert;

class Warning extends Alert
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $class = 'warning',
        public ?string $header = 'Warning!',
        public ?string $message = 'Warning message!',
    )
    {
        parent::__construct($this->class, $this->header, $this->message);
    }
}
