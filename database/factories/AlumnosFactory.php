<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumnos>
 */
class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>fake()->word(),
            'codigo'=>fake()->word(),
            'correo'=>fake()->email(),
            'fecha_nacimiento'=>fake()->date(),
            'sexo'=>fake()->word(),
            'carrera'=>fake()->word()
        ];
    }
}
