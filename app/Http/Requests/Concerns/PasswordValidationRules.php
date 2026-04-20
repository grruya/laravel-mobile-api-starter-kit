<?php

declare(strict_types=1);

namespace App\Http\Requests\Concerns;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rules\Password;

trait PasswordValidationRules
{
    /**
     * @return array<int, Rule|string>
     */
    protected function passwordRules(): array
    {
        return ['required', 'confirmed', Password::default()];
    }

    /**
     * @return array<int, string>
     */
    protected function currentPasswordRules(string $guard = 'sanctum'): array
    {
        return ['required', 'current_password:'.$guard];
    }
}
