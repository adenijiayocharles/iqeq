<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    use WithFaker;

    public function test_registration(): void
    {
        $password = $this->faker->password();

        $response = $this->postJson(
            "api/register",
            [
                "name" => $this->faker->firstName() . " " . $this->faker->lastName(),
                "email" => $this->faker->email(),
                "password" => $password,
                "password_confirmation" => $password
            ],
            [
                "Accept" => "application/json",
                "Content-Type" => "application/json"
            ]
        );
        $response->assertStatus(201)
            ->assertJsonStructure([
                "status",
                "message",
                "data" => [
                    "auth_token"
                ]
            ]);
    }

    /**
     * login and token generation test
     *
     * @return  void
     */
    public function test_login(): void
    {
        $password = $this->faker->password();
        $email = $this->faker->email();

        User::factory()->create([
            "name" => $this->faker->firstName() . " " . $this->faker->lastName(),
            "email" => $email,
            "password" => $password
        ]);

        $loginData = [
            "email" => $email,
            "password" => $password
        ];

        $this->postJson("api/login", $loginData, ["Accept" => "application/json", "Content-Type" => "application/json"])
            ->assertStatus(200)->assertJsonStructure([
                "status",
                "message",
                "data" => [
                    "auth_token"
                ]
            ]);
    }
}
