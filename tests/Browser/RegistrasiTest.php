<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group register
     
     */

    public function testRegister(): void
    {
        $this->browse(function (Browser $browser): void {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name', 'Han')
                    ->type('email', 'raihan123@gmail.com')
                    ->type('password', '123')
                    ->type('password_confirmation', '123')
                    ->press('REGISTER')
                    ->assertPathIs('/dashboard');
        });
    }
}
