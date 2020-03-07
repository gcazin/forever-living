<?php

namespace Tests\Feature\Auth\FBO;

use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    /**
     * Page de connexion
     */
    public function testShowLoginFormAsGuest()
    {
        $response = $this->get('/connexion/fbo');

        $response->assertStatus(200);
    }

    /**
     * La redirection se fait si l'utilisateur souhaite accéder au formulaire de connexion
     * en étant connecté
     */
    public function testRedirectLoginFormAsUser()
    {
        $user = factory(User::class)->create();

        $response = $this->get('/connexion/fbo');

        $this
            ->actingAs($user)
            ->get('/connexion/fbo')
            ->assertRedirect('/')
            ->assertStatus(302);
    }

    /**
     * L'utilisateur peut se connecter si il n'est pas connecté
     */
    public function testFboLogin()
    {
        $this->withoutMiddleware();

        $user = factory(User::class)->create();

        $response = $this->post(route('login.fbo'), [
            'fbo_number' => $user->fbo_number,
            'password' => 'secret'
        ]);

        $response->assertRedirect(route('dashboard.fbo'));
        $this->assertAuthenticatedAs($user);
    }
}
