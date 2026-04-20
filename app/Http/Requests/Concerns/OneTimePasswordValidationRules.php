<?php

declare(strict_types=1);

namespace App\Http\Requests\Concerns;

trait OneTimePasswordValidationRules
{
    /**
     * @return array<int, string>
     */
    protected function oneTimePasswordCodeRules(): array
    {
        return ['required', 'digits:6'];
    }
}
