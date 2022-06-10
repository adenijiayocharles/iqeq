<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Foundation\Testing\WithFaker;

class VehicleTest extends TestCase
{

    use WithFaker;
    /**
     *test fetching single vehicle details
     *
     * @return void
     */
    public function test_get_single_vehicle_details(): void
    {
        $user = User::factory()->create([
            'name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'email' => $this->faker->email(),
            'password' => $this->faker->password()
        ]);
        $token = JWTAuth::fromUser($user);

        $this->getJson('api/vehicles/' . rand(1, 5), ['Authorization' => 'Bearer ' . $token, 'Accept' => 'application/json', 'Content-Type' => 'application/json'])
            ->assertStatus(200)->assertJsonStructure([
                'status',
                'message',
                'data' => [
                    'id',
                    'name',
                    'engine_data'
                ]
            ]);
    }
}
