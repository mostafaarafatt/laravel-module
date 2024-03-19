<?php

namespace Modules\Order\Tests;

use Modules\Order\Models\Order;
use Modules\Product\Models\Product;
use Tests\TestCase;

class OrderTest extends TestCase
{
    public function test_it_creates_an_order()
    {
        $product = new Product();
        $this->assertTrue(true);
    }
}
