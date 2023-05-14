<?php

namespace Database\Factories;

use App\Models\Passenger;
use Illuminate\Database\Eloquent\Factories\Factory;

class PassengerFactory extends Factory
{
    protected $model = Passenger::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'code' => $this->faker->unique()->randomNumber(),
            'dni' => $this->faker->unique()->randomNumber(),
            'allergies' => $this->faker->sentence(5),
            'medications' => $this->faker->sentence(5),
            'observations' => $this->faker->sentence(10),
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
        ];
    }
}
