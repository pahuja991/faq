<?php

namespace Tests\Browser;


use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class CreateQuestionTest extends DuskTestCase
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

            $browser->loginAs(User::find(1))
                ->visit('/questions/create')
                ->type('body', "Making another test Via Laravel Dusk")
                ->press('Save')
                ->assertPathIs('/home');
        });
    }
}
