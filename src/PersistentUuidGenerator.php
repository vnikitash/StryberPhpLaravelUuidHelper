<?php

declare(strict_types=1);

namespace Stryber\Uuid;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

final class PersistentUuidGenerator implements UuidGenerator
{
    private static ?PersistentUuidGenerator $instance = null;
    private UuidInterface $uuid;

    private function __construct()
    {
        $this->uuid = Uuid::uuid4();
    }

    public function generate(): UuidInterface
    {
        return $this->uuid;
    }

    public static function instance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
