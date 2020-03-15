<?php

namespace Tests\Feature\Home;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    public function test_can_access_to_index_as_guest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_can_access_to_index_as_user()
    {
        $user = factory(User::class)->make();

        $this
            ->be($user)
            ->get('/')
            ->assertStatus(200);
    }

    public function test_can_access_to_index_as_admin()
    {
        $user = factory(User::class)->make([
            'role_id' => 1
        ]);

        $this
            ->be($user)
            ->get('/')
            ->assertStatus(200);
    }
}
