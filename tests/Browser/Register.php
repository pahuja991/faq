<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class Register extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function user_can_register()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register');
                    ->type('email','rohitpahuja91@icloud.com')


        });
    }
}
