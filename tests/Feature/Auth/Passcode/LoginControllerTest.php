<?php

namespace Tests\Feature\Auth\Passcode;

use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    /**
     * @test Page de connexion fonctionne
     */
    public function testShowLoginFormAsGuest()
    {
        $response = $this->get('/connexion/passcode');

        $response->assertStatus(200);
    }

    /**
     * @test La redirection se fait si l'utilisateur souhaite accéder au formulaire de connexion
     */
    public function testRedirectLoginFormAsUser()
    {
        $user = $this->loginWithFakeUser();

        $this->get('/connexion/passcode');

        $this
            ->withSession(['passcode' => $user->passcode])
            ->get('/connexion/passcode')
            ->assertRedirect('/')
            ->assertStatus(302);
    }

    /**
     * L'utilisateur peut se connecter et se fait rediriger automatiquement
     * sans id dans l'url
     */
    public function testPasscodeLoginWithoutQueryParameter()
    {
        $this->withoutMiddleware();

        $user = $this->loginWithFakeUser();

        $this
            ->post('/connexion/passcode?id=1', ['passcode' => $user->passcode])
            ->assertRedirect(route('show.formation', 1));
    }

    /**
     * L'utilisateur peut se connecter avec un passcode et se fait rediriger automatiquement
     * avec l'id dans l'url
     */
    public function testPasscodeLoginWithQueryParameter()
    {
        $this->withoutMiddleware();

        $user = $this->loginWithFakeUser();

        $_GET['id'] = 1;

        $response = $this->post('/connexion/passcode?id'.$_GET['id'].'', ['passcode' => $user->passcode]);

        $response->assertRedirect(route('show.formation', $_GET['id']));
    }

    public function loginWithFakeUser()
    {
        $user = new User([
            'id' => 1,
            'passcode' => 'admin',
        ]);

        return $user;
    }
}
