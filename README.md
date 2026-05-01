# Laravel Mobile API Starter Kit

Minimal **type-safe** starter kit for mobile-first apps with OTP and action pattern.

## Why use it?

- OTP over signed link for better mobile UX
- Versioned API routes
- Action pattern
- CRUD controllers
- Type-safe with PHPStan **at max level**
- Consistency and refactoring with Rector and Pint
- AI-ready with **[Laravel Boost](https://github.com/laravel/boost)**
- Better defaults, thanks to **[Essentials](https://github.com/nunomaduro/essentials)**
- Feature, unit, and architecture tests

## Getting Started

You need:

- [PHP 8.5+](https://php.net/releases/)
- [Composer](https://getcomposer.org)
- A database driver supported by Laravel

Create the app:

```bash
composer create-project gruya/laravel-mobile-api-starter-kit --prefer-dist example-app
```

Move in and set it up:

```bash
cd example-app
composer setup
```

Start local dev:

```bash
composer dev
```

Check the project:

```bash
composer test
```

That runs Rector check, Pint check, PHPStan, and the Laravel test suite.

## Available Tooling

### Development

- `composer dev` - Runs the Laravel server, queue listener, and Pail logs

### Code Quality

- `composer refactor` - Runs Rector and changes code
- `composer test:refactor` - Runs Rector without changing files
- `composer lint` - Runs Pint and fixes PHP style
- `composer test:lint` - Runs Pint without changing files

### Testing

- `composer test:types` - Runs PHPStan/Larastan
- `composer test:unit` - Clears Laravel config and runs tests
- `composer test` - Runs all checks above

## Similar recommended kits

All **these** kits have PHPStan **at max level**, with Pint and Rector.

- **[Laravel API Kit](https://github.com/Grazulex/laravel-api-kit)**: Spatie-oriented with a different pattern
- **[Laravel Inertia & React](https://github.com/nunomaduro/laravel-starter-kit-inertia-react)**: Web-only with a similar **pattern**
- **[Laravel Inertia & Vue](https://github.com/nunomaduro/laravel-starter-kit-inertia-react)**: Web-only with a similar **pattern**
- **[Laravel Blade](https://github.com/nunomaduro/laravel-starter-kit-inertia-react)**: Web-only with a similar **pattern**

## License

**This Starter Kit** was created by **[Gruya](https://x.com/gruya_)** under the **[MIT license](https://opensource.org/licenses/MIT)**.
