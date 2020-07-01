<?php

declare(strict_types=1);

namespace Stryber\Uuid;

use Illuminate\Support\ServiceProvider;

final class UuidServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(UuidGenerator::class, PersistentUuidGenerator::class);
        $this->app->singleton(PersistentUuidGenerator::class, fn() => PersistentUuidGenerator::instance());
    }
}
