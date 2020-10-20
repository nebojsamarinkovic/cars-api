<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'brand' => $this->faker->text(20),
        'model' => $this->faker->text(20),
        'year' => $this->faker->numberBetween(1900, 2020),
        'maxSpeed'=> $this->faker->numberBetween(1, 500),
        'isAutomatic' => $this->faker->boolean,
        'engine' => $this->faker->text(10),
        'numberOfDoors' => $this->faker->numberBetween(1, 5),
        ];
    }
}
