<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {

        $name = 'cesar';
        $email = 'cesar@gmail.com';
        
        $user = factory(\Foro\User::class)->create([
            'name' => $name,
            'email' => $email,
        ]);

        $this->actingAs($user,'api')
             ->visit('api/user')
             ->see($name)
             ->see($email);
    }
}
