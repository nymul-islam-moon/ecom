<?php

namespace Tests\Unit\Api\Admin;

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    protected string $loginUrl = '/api/admin/login'; // ✅ CORRECT

    #[Test]
    public function it_logs_in_successfully_with_correct_credentials()
    {
        $admin = Admin::create([
            'name' => 'Nymul Islam',
            'username' => 'nymulIslam',
            'email' => 'nymulislam.dev@gmail.com',
            'password' => Hash::make('Moon@12345'),
        ]);

        $response = $this->postJson($this->loginUrl, [
            'email' => 'nymulislam.dev@gmail.com',
            'password' => 'Moon@12345',
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'success',
                'message',
                'collections' => ['name', 'email', 'token', 'token_type'],
            ]);
    }

    #[Test]
    public function it_fails_with_invalid_password()
    {
        Admin::create([
            'name' => 'Admin User',
            'username' => 'adminuser', // ✅ Add this line
            'email' => 'admin@example.com',
            'password' => Hash::make('correct-password'),
        ]);

        $response = $this->postJson($this->loginUrl, [
            'email' => 'admin@example.com',
            'password' => 'wrong-password',
        ]);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Invalid email or password',
            ]);
    }

    #[Test]
    public function it_fails_with_validation_errors()
    {
        $response = $this->postJson($this->loginUrl, [
            'email' => '',
            'password' => '',
        ]);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'success',
                'collections',
                'message',
                'errors' => ['email', 'password'],
            ]);
    }
}
