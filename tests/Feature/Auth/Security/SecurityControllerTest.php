<?php

namespace Tests\Feature\Auth\Security;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SecurityControllerTest extends TestCase
{
    /**
     * L'utilisateur est connecté et ne peut pas accéder
     * au portail de connexion
     */
    public function testGatewayAccessAsUser()
    {
        $user = factory(User::class)->make();

        $this
            ->actingAs($user)
            ->get('/portail-connexion')
            ->assertStatus(302)
            ->assertRedirect('/');
    }

    /**
     * L'utilisateur n'est pas connecté et peut accéder
     * au portail de connexion
     */
    public function testGatewayAccessAsGuest()
    {
        $this
            ->get('/portail-connexion')
            ->assertStatus(200);
    }
}
