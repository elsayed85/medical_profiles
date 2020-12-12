<?php

namespace App\Payment\vapulus\Exceptions;

use Exception;
use Throwable;

class VaPulusException extends Exception
{
    public $message;
    public $code;

    public function __construct($message, $code)
    {
        $this->message = $message;
        $this->code = $code;
    }

    public function render()
    {
        if ($this->code != 200) {
            return back()->withErrors(['payment_error' => $this->message]);
        }
    }
}
