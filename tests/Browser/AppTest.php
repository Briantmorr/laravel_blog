<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AppTest extends DuskTestCase
{
    public function testFilterByDropdown()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Filter By')
                    ->click('@Filter-By')
                    ->assertSee('Popularity')
                    ->assertSee('Category')
                    ->assertSee('Author');
        });
    }
    
    public function testArticlesExist()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertPresent('.article');
        });
    }

    public function testArticleContentExists()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->with('.article', function ($table) {
                $table->assertPresent('@Article-Content');
            });
        });
    }

    public function testLastArticleViewCountIsZero()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSeeIn('#main > div:nth-child(3) > p.post-meta > span', 0);
        });
    }

    public function testArticleCountWorks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/article/3')
            ->assertSeeIn('#main > div > p.post-meta > span', 1);
        });
    }

    public function testCanGoBackToHomeFromArticle()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/article/3')
            ->assertSee('Back')
            ->clickLink('Back')
            ->assertPathIs('/');
        });
    }

    public function testArticleCountIncrementWorks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/article/3')
            ->assertSeeIn('#main > div > p.post-meta > span', 3);
        });
    }

    public function testDropdownPopularityFilter()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/article/3')
            ->assertSee('Back')
            ->clickLink('Back')
            ->assertPathIs('/')
            ->assertSeeIn('#main > div:nth-child(3) h3', 'Laravel Redis')
            ->click('@Filter-By')
            ->clickLink('Popularity')
            ->pause(500)
            ->assertSeeIn('#main > div:nth-child(1) h3', 'Laravel Redis')
            ->assertSeeIn('#main > div:nth-child(1) > p.post-meta > span', 4);
        });
    }

}
