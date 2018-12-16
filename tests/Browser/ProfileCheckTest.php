<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class ProfileCheckTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_profile_check()
    {
        $user = factory(User::class)->make();
        $user->save();
        $this->browse(function ($browser) use ($user)  {
            $browser->visit('http://localhost:8000/user/52/profile')
                ->assertSee('My Profile');
        });
    }
}
