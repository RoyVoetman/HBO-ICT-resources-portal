<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function testHomePage()
    {
        $this->get('/')
            ->assertSuccessful()
            ->assertSee('Hanze HBO-ICT resource library');
    }
}
