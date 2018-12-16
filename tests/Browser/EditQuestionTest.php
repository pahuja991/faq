<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class EditQuestionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_edit_question()
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
                ->clickLink('Edit Question')
                ->assertSee('Body')
                ->type('body', 'have you seen budapest?')
                ->click('#submit')
                ->assertSee('Saved')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertTitle('Laravel');
        });
    }
}
