<?php

namespace App\View\Components\Alert;

class Success extends Alert
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $class = 'success',
        public ?string $header = 'Success!',
        public ?string $message = 'Success message!',
    )
    {
        parent::__construct($this->class, $this->header, $this->message);
    }
}
