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
    public function testExample()
    {
        $this->browse(function ($browser) {
            $user = User::find(1);
            $question = Question::find(812);
            $browser->loginAs(User::find(1))
                ->visit('/questions/answers/create', $question->id)
                ->type('body', "This is Making another test Via Laravel Dusk")
                ->press('Save')
                ->assertPathIs('/questions', $question->id);
        });
    }
}
