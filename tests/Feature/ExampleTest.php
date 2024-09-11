<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_retrieve_config(): void
    {
        $this->assertSame('some-value', config('foo.some-key'));
        $this->assertNull(config('bar.some-key'));
    }
}
