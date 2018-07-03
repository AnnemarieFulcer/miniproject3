<?php

namespace Tests\Unit;

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
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function insertUser()
    {
        $user=new User();
        $this->assertTrue($user->save());
    }
    public function deleteUser()
    {
        $user= new User();
        $user->save();
        $this->assertTrue($user->delete());
    }
    public function updateName()
    {

    }
}

