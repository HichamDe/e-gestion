<?php

namespace Tests\Unit;

use App\Models\Categorie;
use PHPUnit\Framework\TestCase;

class TestCatecorie extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertContains((new Categorie)->produits,);
    }
}
