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

    /**
     * test for updating vehicle engine data details
     *
     * @return  void    [return description]
     */
    public function test_update_vehicle_engine_data_details(): void
    {
        $user = User::factory()->create([
            'name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'email' => $this->faker->email(),
            'password' => $this->faker->password()
        ]);
        $token = JWTAuth::fromUser($user);
        $updateData = [
            "power" => 34.4,
            "number_of_valves" => 10
        ];
        $this->putJson('api/vehicles/engine-data/' . rand(1, 3), $updateData, ['Authorization' => 'Bearer ' . $token, 'Accept' => 'application/json', 'Content-Type' => 'application/json'])
            ->assertStatus(201);
    }
}
