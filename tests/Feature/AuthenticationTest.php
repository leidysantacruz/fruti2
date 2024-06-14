<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Testeamos que un usuario puede iniciar sesión con credenciales correctas.
     *
     * @return void
     */
    public function test_user_can_login_with_correct_credentials()
    {
        // Crear un usuario de prueba
        $user = User::factory()->create([
            'nombres' => 'Harrison',
            'apellidos' => 'Hermann',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Intentar iniciar sesión con las credenciales correctas
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        // Verificar que el usuario ha sido autenticado
        $response->assertStatus(302); // Redireccionamiento esperado después del login
        $this->assertAuthenticatedAs($user);
    }

    /**
     * Testeamos que un usuario no puede iniciar sesión con credenciales incorrectas.
     *
     * @return void
     */
    public function test_user_cannot_login_with_incorrect_credentials()
    {
        // Crear un usuario de prueba
        $user = User::factory()->create([
            'nombres' => 'Harrison',
            'apellidos' => 'Hermann',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Intentar iniciar sesión con credenciales incorrectas
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'wrongpassword',
        ]);

        // Verificar que el usuario no ha sido autenticado
        $response->assertStatus(302); // Redireccionamiento esperado después del fallo en el login
        $this->assertGuest(); // Verificar que el usuario no está autenticado
    }
}
