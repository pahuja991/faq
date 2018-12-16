<?php
namespace Tests\Browser;


use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class CreateAnswerTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_create_answer()
    {
        $user = factory(User::class)->make();
        $user->save();
        $this->browse(function ($browser) use ($user) {
            $browser->visit('http://localhost:8000')
                ->assertTitle('Laravel')
                ->clickLink('Login')
                ->type('email', 'rohitpahuja91@icloud.com')
                ->type('password', 'hello123')
                ->press('button[type="submit"]')
                ->assertSee('Questions')
                ->clickLink('View')
                ->assertSee('Question')
                ->clickLink('Answer Question')
                ->type('body', 'Hello everyone how are you?')
                ->press('#submit')
                ->assertSee('Saved');
        });
    }
}