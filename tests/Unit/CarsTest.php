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

    public function testInsertCar()
    {

        $car1=new car();
        $car1->make="make";
        $car1->model="model";
        $car1->year=2019;

        $this->assertTrue($car1->save());
    }
    public function testUpdateYear(){
        $car2=car::inRandomOrder()->first();
        $car2->year=2000;
        $this->assertTrue($car2->year==2000);
    }

    public function testDeleteCar()
    {
        $car3=car::inRandomOrder()->first();

        $this->assertTrue($car3->delete());
    }

    public function testCarCount(){
        $this->assertEquals(50, car::count());
    }

    public function testYearType()
    {
        $car1=car::inRandomOrder()->first();
        $this->assertInternalType('string', $car1->year);

    }
    public function testMakelValue(){
        $car4=car::inRandomOrder()->first();
        $car4=$car4->make;
        $this->assertContains($car4, array("honda", "ford", "toyota"));
    }
    public function testModelisString()
    {
        $car=car::inRandomOrder()->first();
        $this->assertInternalType('string', $car->model);
    }
}
