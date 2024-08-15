<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidCurrentOrFutureDateForEvents implements Rule
{
    public function passes($attribute, $value)
    {
        $selectedTimestamp = strtotime($value);
        $currentTimestamp = strtotime(date('Y-m-d'));
        return $selectedTimestamp >= $currentTimestamp;
    }

    public function message()
    {
        return 'Invalid date. Please select the current date or any upcoming date.';
    }
}
