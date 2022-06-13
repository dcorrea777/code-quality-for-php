<?php

declare(strict_types=1);

namespace App;

use function sprintf;

class HelloWorld
{
    public function __toString(): string
    {
        return sprintf('Hello %s', 'World');
    }
}
