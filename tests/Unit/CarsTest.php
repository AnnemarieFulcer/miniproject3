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
/*
    public function testDeleteUser()
    {
        $user2=User::inRandomOrder()->first();

        $this->assertTrue($user2->delete());
    }

    public function testUserCount(){
        $this->assertEquals(50, User::count());
    }
    public function testUpdateName()
    {
        $user3=User::inRandomOrder()->first();
        $user3->name='Steve Smith';
        $this->assertTrue($user3->save());

    }*/

    public function testYearType()
    {
        $car1=car::inRandomOrder()->first();
        $this->assertInternalType('string', $car1->year);

    }

}
