<?php

namespace Tests\Unit;

use Faker\Provider\UserAgent;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
  /*  public function testExample()
    {
        $this->assertTrue(true);

    }*/

  public function testInsertUser()
    {

        $user1=new User();
        $user1->name="name";
        $user1->email="email";
        $user1->password="password";
        $user1->remember_token="REMEMBER TOKEN";
       $this->assertTrue($user1->save());
    }

   public function testDeleteUser()
    {
        $user2=User::inRandomOrder()->first();

        $this->assertTrue($user2->delete());
    }

    public function testUserCount()
    {
     $this->assertEquals(50, User::count());
    }

   public function testUpdateName()
    {
        $user3=User::inRandomOrder()->first();
        $user3->name='Steve Smith';
        $this->assertTrue($user3->save());

    }


}

