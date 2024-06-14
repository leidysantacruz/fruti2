<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\User;

class UserManagementTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_a_new_user()
    {
        $response = $this->post(route('users.store'), [
            '_token' => csrf_token(),
            'nombres' => 'John',
            'apellidos' => 'Doe',
            'edad' => 30,
            'telefono' => '123456789',
            'email' => 'john.doe@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('users.index'));

        $this->assertDatabaseHas('users', [
            'nombres' => 'John',
            'apellidos' => 'Doe',
            'email' => 'john.doe@example.com',
        ]);
    }

    /** @test */
    public function nombres_is_required()
    {
        $response = $this->post(route('users.store'), [
            '_token' => csrf_token(),
            'nombres' => '', // nombre vacío
            'apellidos' => 'Doe',
            'edad' => 30,
            'telefono' => '123456789',
            'email' => 'john.doe@example.com',
            'password' => 'password',
        ]);

        $response->assertSessionHasErrors('nombres');
    }

    /** @test */
    public function email_must_be_valid()
    {
        $response = $this->post(route('users.store'), [
            '_token' => csrf_token(),
            'nombres' => 'John',
            'apellidos' => 'Doe',
            'edad' => 30,
            'telefono' => '123456789',
            'email' => 'invalid-email', // email inválido
            'password' => 'password',
        ]);

        $response->assertSessionHasErrors('email');
    }

    // Otras pruebas relacionadas con usuarios...

}
