<?php

namespace Tests\Feature\Auth\Admin;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardControllerTest extends TestCase
{
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
        $user = factory(User::class)->create();

        $this
            ->actingAs($user)
            ->get('admin/dashboard')
            ->assertStatus(302);
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
}
