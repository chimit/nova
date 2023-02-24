<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Indicate that the home is active.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function active(bool $active = true)
    {
        return $this->state(function (array $attributes) use ($active) {
            return [
                'active' => $active,
            ];
        });
    }

    /**
     * Indicate that the home is on the basement floor.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function basementFloor()
    {
        return $this->state(function (array $attributes) {
            return [
                'floor' => 'B'.$this->faker->numberBetween(1, 3),
            ];
        });
    }

    /**
     * Indicate that the home has a color code instead of a number.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function colorCoded()
    {
        return $this->state(function (array $attributes) {
            return [
                'door' => $this->faker->randomElement([
                    'black',
                    'blue',
                    'orange',
                    'pink',
                    'green',
                    'yellow',
                ]),
            ];
        });
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'active' => $this->faker->boolean(),
            'floor' => $this->faker->unique()->numberBetween(1, 40),
            'door' => $this->faker->numberBetween(1, 100),
        ];
    }
}
