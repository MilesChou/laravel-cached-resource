<?php

declare(strict_types=1);

namespace Tests\Unit\Support;

use MilesChou\Laravel\Support\CachedManager;
use Tests\TestCase;

class SampleTest extends TestCase
{
    /**
     * @test
     */
    public function sample(): void
    {
        $target = new CachedManager();

        $this->assertTrue(true);
    }
}
