<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterTest extends TestCase
{

    use DatabaseTransactions;

    /** @test */
    function a_user_may_register_but_must_confirm_email()
    {
        $this->visit('auth/register')
             ->type('johndoe@example.com', 'email')
             ->type('johndoe', 'password')
             ->type('johndoe', 'password_confirmation')
             ->press('Sign Up');

        $this->see('Please confirm your email address')
             ->seeInDatabase('users', ['email' => 'johndoe@example.com', 'email_verified' => 0]);
    }
}
