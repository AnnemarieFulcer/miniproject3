<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   /* public function testExample()
    {

        $this->assertTrue(true);

    }*/
    public function testYearType()
    {
        $car1=car::inRandomOrder()->first();
        $this->assertInternalType('string', $car1->year);

    }

}
