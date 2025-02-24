<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class OneRequired implements ValidationRule
{
    protected $other_field, $message;

    public function __construct($other_field, $message)
    {
        $this->other_field = $other_field;
        $this->message = $message;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (empty($value) && empty(request()->input($this->other_field))) {
            $fail($this->message);
        }
    }
}
