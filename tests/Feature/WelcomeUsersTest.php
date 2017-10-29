<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('/usuarios/ysrael/xxcalichinxx')
        	 ->assertStatus(200)
        	 ->assertSee('El usuario tiene el nombre Ysrael, y el nick xxcalichinxx');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
    	$this->get('/usuarios/ysrael')
    		 ->assertStatus(200)
    		 ->assertSee('El usuario tiene el nombre Ysrael');
    }
}
