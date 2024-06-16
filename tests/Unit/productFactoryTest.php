<?php

namespace Tests\Unit;

use App\Models\product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class productFactoryTest extends TestCase
{
    /**
     * A basic unit test example.
     */

    use RefreshDatabase;

    public function testProductFactory()
    {
       $product = product::factory()->count(5)->make();

       $this->assertDatabaseCount('products', 5);
    }

}
