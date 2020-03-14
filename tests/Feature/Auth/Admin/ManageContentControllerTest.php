<?php

namespace Tests\Feature\Auth\Admin;

use App\Formation;
use App\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ManageContentControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function testAccessAsGuest()
    {
        $this
            ->get('/dashboard/admin/manage-content')
            ->assertStatus(302)
            ->assertRedirect('/');
    }

    public function testAccessAsUser()
    {
        $user = factory(User::class)->make();

        $this
            ->be($user)
            ->get('/dashboard/admin/manage-content')
            ->assertStatus(302)
            ->assertRedirect('/connexion/fbo');
    }

    public function testAccessAsAdmin()
    {
        $user = factory(User::class)->make([
            'role_id' => 1
        ]);

        $this
            ->be($user)
            ->get('/dashboard/admin/manage-content')
            ->assertStatus(200);
    }

    //TODO: A finir
    /*public function testAddFormation()
    {
        Storage::fake('local');

        $user = factory(User::class)->make([
            'role_id' => 1
        ]);

        $faker = Factory::create('fr_FR');



        $this->post(route('manage.content.add.formation.admin'), [
            'category_id' => 1,
            'title' => $faker->title,
            'description' => $faker->sentence(),
            'link' => UploadedFile::fake()->image('fichier.jpg'),
            'user_id' => $user->value('id'),
        ]);
    }*/
}
