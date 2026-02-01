<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alumno>
 */
class alumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = $this->faker->firstName().' '.$this->faker->firstName();
        return [
            //Crea datos falsos para la tabla alumnos
            'nombre' => $nombre,
            'grupo' => $this->faker->randomElement(['1ºESO A', '1ºESO B', '2ºESO A', '2ºESO B', '3ºESO A', '3ºESO  B']),
        ];
    }
}
