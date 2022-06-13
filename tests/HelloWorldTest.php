<?php

declare(strict_types=1);

namespace Tests;

use App\HelloWorld;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\HelloWorld
 */
final class HelloWorldTest extends TestCase
{
    /**
     * @test
     */
    public function shouldCreateAnInstanceOfTheHelloWorldclass(): void
    {
        $helloWorld = new HelloWorld();

        $this->assertSame('Hello World', (string) $helloWorld);
    }
}
