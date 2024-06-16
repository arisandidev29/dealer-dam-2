<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    function testStorage() {
        $response = $this->get("/dashboard/product/create");

        $response->assertStatus(200);
    }
}
