<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class ViewAnswerTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_view_answer()
    {
        $user = factory(User::class)->make();
        $user->save();
        $this->browse(function ($browser) use ($user){
            $browser->visit('http://127.0.0.1:8000')
                ->assertTitle('Laravel')
                ->clickLink('Login')
                ->type('email', 'rohitpahuja91@icloud.com')
                ->type('password', 'hello123')
                ->press('button[type="submit"]')
                ->assertSee('Questions')
                ->clickLink('View')
                ->assertSee('Question')
                ->clickLink('Answer Question')
                ->type('body', 'have you eaten butter paneer masala')
                ->press('#submit')
                ->assertSee('Saved')
                ->clickLink('View')
                ->assertSee('Answer')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertTitle('Laravel');
        });
    }
}
