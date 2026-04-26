<?php

declare(strict_types=1);

namespace App\Actions\Auth;

use App\Enums\OneTimePasswordPurpose;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use SensitiveParameter;

final readonly class CreateUser
{
    public function __construct(private IssueOneTimePassword $issueOneTimePassword) {}

    /**
     * @param  array<string, mixed>  $attributes
     */
    public function handle(array $attributes, #[SensitiveParameter] string $password, #[SensitiveParameter] string $deviceId): User
    {
        return DB::transaction(function () use ($attributes, $password, $deviceId): User {
            $user = User::query()->create([
                ...$attributes,
                'password' => $password,
            ]);

            $this->issueOneTimePassword->handle($user, OneTimePasswordPurpose::EmailVerification, $deviceId);

            return $user;
        });
    }
}
