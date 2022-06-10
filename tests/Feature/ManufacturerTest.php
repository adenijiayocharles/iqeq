<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManufacturerTest extends TestCase
{
    use WithFaker;
    /**
     * get manufacturer of specific vehicle type
     *
     * @return void
     */
    public function test_get_manufacturer_vehicle_type(): void
    {
        $user = User::factory()->create([
            'name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'email' => $this->faker->email(),
            'password' => $this->faker->password()
        ]);
        $token = JWTAuth::fromUser($user);
        $this->getJson('api/manufacturers/9', ['Authorization' => 'Bearer ' . $token, 'Accept' => 'application/json', 'Content-Type' => 'application/json'])
            ->assertStatus(200);
    }
}
