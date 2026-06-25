<?php

namespace App\View\Components\Alert;

class Dark extends Alert
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $class = 'dark',
        public ?string $header = 'Dark!',
        public ?string $message = 'Dark message!',
    )
    {
        parent::__construct($this->class, $this->header, $this->message);
    }
}
