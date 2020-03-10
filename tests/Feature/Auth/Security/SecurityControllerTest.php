<?php

namespace Tests\Feature\Auth\Security;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SecurityControllerTest extends TestCase
{
    /**
     * L'utilisateur est connecté et ne peut pas accéde
     * au portail de connexion
     */
    public function testGatewayAccessAsUser()
    {
        $user = factory(User::class)->create();

        $this
            ->actingAs($user)
            ->get('/portail-connexion')
            ->assertStatus(302)
            ->assertRedirect('/');
    }
}
