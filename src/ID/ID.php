<?php

declare(strict_types=1);

namespace Stryber\Uuid\ID;

abstract class ID
{
    abstract public function getValue(): string;
}
