<?php

namespace Tests\Feature\Auth\Admin;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery;
use Tests\TestCase;

class DashboardControllerTest extends TestCase
{
    /**
     * L'utilisateur est admin et peut donc accéder au dashboard
     */
    public function testDashboardAccessAsAdmin()
    {
        $user = factory(User::class)->make([
            'role_id' => 2,
        ]);

        $this
            ->actingAs($user)
            ->get('dashboard/admin')
            ->assertStatus(200);
    }

    /**
     * L'utilisateur est admin et peut donc accéder au dashboard
     */
    public function testDashboardAccessAsUser()
    {
        $user = factory(User::class)->make([
            'role_id' => 2,
        ]);

        $this
            ->actingAs($user)
            ->get('dashboard/admin')
            ->assertStatus(302);
    }

    /**
     * L'utilisateur est admin et peut donc accéder au dashboard
     */
    public function testDashboardAccessAsGuest()
    {
        $this
            ->get('dashboard/admin')
            ->assertStatus(302);
    }
}
