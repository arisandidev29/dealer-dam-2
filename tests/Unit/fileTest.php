<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class fileTest extends TestCase
{
    public function testFile()
    {
        $response = $this->post('/');

        $response->assertStatus(200);
    }
}
