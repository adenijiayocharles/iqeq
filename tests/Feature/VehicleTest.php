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
                    'id', 'name', 'base_price', 'top_speed', 'fuel_type', 'maximum_seating', 'transmission_type', 'number_of_doors', 'length', 'width', 'weight', 'height'
                ]
            ]);
    }

    /**
     * test for updating vehicle details
     *
     * @return  void    [return description]
     */
    public function test_update_vehicle_details(): void
    {
        $user = User::factory()->create([
            'name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'email' => $this->faker->email(),
            'password' => $this->faker->password()
        ]);
        $token = JWTAuth::fromUser($user);
        $updateData = [
            "base_price" => 456343,
            "fuel_type" => "diesel"
        ];
        $this->putJson('api/vehicles/' . rand(1, 3), $updateData, ['Authorization' => 'Bearer ' . $token, 'Accept' => 'application/json', 'Content-Type' => 'application/json'])
            ->assertStatus(201);
    }
}
