<?php

declare(strict_types=1);

namespace Stryber\Uuid;

use Ramsey\Uuid\UuidInterface;

interface UuidGenerator
{
    public function generate(): UuidInterface;
}
