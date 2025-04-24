<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class edit_noteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group edit_note
     */
    public function testEditnote(): void
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
            ->clickLink('Edit')
            ->assertPathIs('/edit-note-page/3')
            ->type('title', 'test edit')
            ->type('description', 'test edit')
            ->press('UPDATE')
            ->assertPathIs('/notes');
        });
    }
}
