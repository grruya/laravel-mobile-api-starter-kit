<?php

declare(strict_types=1);

namespace App\Http\Requests\Concerns;

trait DeviceValidationRules
{
    /**
     * @return array<int, string>
     */
    protected function deviceIdRules(): array
    {
        return ['required', 'string', 'min:1', 'max:255'];
    }

    /**
     * @return array<int, string>
     */
    protected function deviceNameRules(): array
    {
        return ['required', 'string', 'min:1', 'max:255'];
    }
}
