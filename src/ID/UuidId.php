<?php

declare(strict_types=1);

namespace Stryber\Uuid\ID;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

abstract class UuidId extends ID
{
    private UuidInterface $identifier;

    public function __construct(UuidInterface $identifier)
    {
        $this->identifier = $identifier;
    }

    public function getValue(): string
    {
        return $this->toString();
    }

    public function toString(): string
    {
        return $this->identifier->toString();
    }

    public static function create(): self
    {
        return new static(Uuid::uuid4());
    }

    public static function fromString(string $uuid): self
    {
        return new static(Uuid::fromString($uuid));
    }
}
