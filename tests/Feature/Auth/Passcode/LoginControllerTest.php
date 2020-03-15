<?php

namespace Tests\Feature\Auth\Passcode;

use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

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
        $user = factory(User::class)->make();

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
        $user = factory(User::class)->make();

        $id = false;

        $this
            ->post('/connexion/passcode', ['passcode' => $user->passcode])
            ->assertStatus(302)
            ->assertRedirect(route('show.home_content', $id));
    }

    /**
     * L'utilisateur peut se connecter avec un passcode et se fait rediriger automatiquement
     * avec l'id dans l'url
     */
    public function testPasscodeLoginWithQueryParameter()
    {
        $user = factory(User::class)->make();

        $_GET['id'] = 1;

        $this
            ->post('/connexion/passcode?id='.$_GET['id'].'', ['passcode' => $user->passcode])
            ->assertRedirect(route('show.home_content', $_GET['id']));
    }
}
