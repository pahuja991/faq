<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class EditAnswerTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_edit_answer()
    {
        $user = factory(User::class)->make();
        $user->save();
        $this->browse(function ($browser) use ($user) {
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
                ->type('body', 'i have eaten butter chicken')
                ->press('#submit')
                ->assertSee('Saved')
                ->clickLink('View')
                ->clickLink('Edit Answer')
                ->type('body', 'No i have not eaten butter chicken')
                ->press('#submit')
                ->assertSee('Updated')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertTitle('Laravel');
        });
    }
}
