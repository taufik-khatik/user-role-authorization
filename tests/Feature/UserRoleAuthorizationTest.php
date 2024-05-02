<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserRoleAuthorizationTest extends TestCase
{
    use RefreshDatabase;

    public function testAdminCanAccessAdminRoute()
    {
        // Create an admin user
        $admin = User::factory()->create(['role' => 'admin']);

        // Acting as the admin user, attempt to access admin-only route
        $response = $this->actingAs($admin)->get('/admin/dashboard');

        // Assert that access is granted (status code 200)
        $response->assertStatus(200);
    }

    public function testRegularUserCannotAccessAdminRoute()
    {
        // Create a regular user
        $user = User::factory()->create(['role' => 'user']);

        // Acting as the regular user, attempt to access admin-only route
        $response = $this->actingAs($user)->get('/admin/dashboard');

        // Assert that access is denied and redirected to the home page (status code 302 for redirection)
        $response->assertStatus(302);
        $response->assertRedirect('/home'); // Adjust the redirection URL based on your application
    }

    public function testMiddlewareFunctionality()
    {
        // Create an admin user
        $admin = User::factory()->create(['role' => 'admin']);
        
        // Acting as the admin user, attempt to access admin-only route
        $response = $this->actingAs($admin)->get('/admin/dashboard');

        // Assert that access is granted (status code 200)
        $response->assertStatus(200);

        // Create a regular user
        $user = User::factory()->create(['role' => 'user']);

        // Acting as the regular user, attempt to access admin-only route
        $response = $this->actingAs($user)->get('/admin/dashboard');

        // Assert that access is denied and redirected to the home page (status code 302 for redirection)
        $response->assertStatus(302);
        $response->assertRedirect('/home'); // Adjust the redirection URL based on your application
    }
}
