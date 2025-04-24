<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class create_noteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group createnote
     */
    public function testcreate_note(): void
    {
        $this->browse(function (Browser $browser): void {
            $browser->visit('/')
            ->assertSee('Modul 3')
            ->clickLink('Log in')
            ->assertPathIs('/login')
            ->type('email', 'rfadhilah611@gmail.com')
            ->type('password', '12345')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->clickLink('Notes')
            ->assertPathIs('/notes')
            ->clickLink('Create Note')
            ->assertPathIs('/create-note')
            ->type('title', 'Praktikum PPL Modul 3')
            ->type('description', 'Modul 3')
            ->press('CREATE')
            ->assertPathIs('/notes');
        });
    }
}
