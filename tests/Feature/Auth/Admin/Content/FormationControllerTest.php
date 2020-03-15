<?php

namespace Tests\Feature\Auth\Admin\Content;

use App\CategoryFormation;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase;

class FormationControllerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * Accès au CRUD en étant connecté en tant qu'utilisateur
     */
    public function test_can_access_to_formation_crud_as_guest()
    {
        $this
            ->get('/dashboard/admin/contenu/formations')
            ->assertStatus(302)
            ->assertRedirect('connexion/fbo');
    }

    /**
     * Accès au CRUD en étant connecté en tant qu'utilisateur
     */
    public function test_can_access_to_formation_crud_as_user()
    {
        $user = factory(User::class)->make();

        $this
            ->actingAs($user)
            ->get('/dashboard/admin/contenu/formations')
            ->assertStatus(302)
            ->assertRedirect('dashboard/fbo');
    }

    /**
     * Accès au CRUD en étant connecté en tant qu'utilisateur
     */
    public function test_can_access_to_formation_crud_as_admin()
    {
        $user = factory(User::class)->make([
            'role_id' => 1
        ]);

        $this
            ->actingAs($user)
            ->get('/dashboard/admin/contenu/formations')
            ->assertStatus(200);
    }

    /*public function test_can_access_to_formation_crud_as_admin()
    {
        $user = factory(User::class)->make([
            'role_id' => 1
        ]);

        $this
            ->actingAs($user)
            ->get('/dashboard/admin/contenu/formations')
            ->assertStatus(200);
    }

    public function test_can_create_a_formation()
    {
        Storage::fake('testing');

        $user = factory(User::class)->make([
            'id' => 1,
            'role_id' => 1
        ]);
        $category = factory(CategoryFormation::class)->make([
            'id' => 1
        ]);


        $title = "title";

        UploadedFile::fake()->image('f');

        $this->post(route('manage.content.create.formation.admin'), [
            'title' => $title,
            'description' => 'Description',
            'file' => UploadedFile::fake()->create(Str::slug($title).'.pdf'),
            'user_id' => $user->id,
            'category_id' => $category->id,
        ]);

        Storage::disk('testing')->assertExists('formations/f');

        $this
            ->assertDatabaseHas('formations', [
                'title' => $title,
                'description' => 'Description',
                'link' => Str::slug($title).'.pdf',
                'user_id' => $user->id,
                'category_id' => $category->id,
            ]);
    }*/
}
