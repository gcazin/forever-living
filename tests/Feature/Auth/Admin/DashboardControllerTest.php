<?php

namespace Tests\Feature\Auth\Admin;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery;
use Tests\TestCase;

class DashboardControllerTest extends TestCase
{
    public function setUp(): void
    {
        $this->user = Mockery::mock('App\User');

        $this->math = new User($this->user);
    }

    /**
     * L'utilisateur est admin et peut donc accéder au dashboard
     */
    public function testDashboardAccessAsAdmin()
    {
        $user = factory(User::class)->make([
            'role_id' => 1,
        ]);

        $this
            ->actingAs($user)
            ->get('admin/dashboard')
            ->assertStatus(200);
    }

    /**
     * L'utilisateur est admin et peut donc accéder au dashboard
     */
    public function testDashboardAccessAsUser()
    {
        $this->instance(User::class, Mockery::mock(User::class, function ($mock) {
            $mock->shouldReceive('create')->once();
        }));

        $this
            ->be($user)
            ->get('admin/dashboard')
            ->assertStatus(302)
            ->assertRedirect('/');
    }

    /**
     * L'utilisateur est admin et peut donc accéder au dashboard
     */
    public function testDashboardAccessAsGuest()
    {
        $this
            ->get('admin/dashboard')
            ->assertStatus(302);
    }

    public function loginWithFakeUser()
    {
        $user = new User([
            'id' => 2,
            'passcode' => 'admin',
        ]);

        return $user;
    }
}
