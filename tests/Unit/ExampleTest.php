<?php

namespace Tests\Unit;

use App\Models\Visitor;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    function testStorage() {
        $response = $this->get('/');
 
        $response->assertStatus(200);
    }
}
